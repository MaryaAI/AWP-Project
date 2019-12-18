<?php

namespace App\Http\Controllers;

use App\Roadster;
use App\Comment;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoadstersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {

        $roadsters = Roadster::all();
        return view('admin.roadsters.index', compact('roadsters'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::all();
        return view('admin.roadsters.create', compact('categories'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

        public function store(Request $request)

        {
            $this->validate($request, [
                'name' => 'required',
                'cover_image' => 'image|required',
                'category' => 'nullable',
                'description' => 'nullable',
                'price' => 'numeric|required',
            ]);

            $roadster = new Roadster();

            $roadster->name = $request->name;
            $roadster->cover_image = $request->file('cover_image')->store('images/covers', 'public');
            $roadster->category_id = $request->category;
            $roadster->description = $request->description;
            $roadster->price = $request->price;

            $roadster->save();


            session()->flash('flash_message',  'تمت إضافة الكتاب بنجاح');

            return back();
        }





    /**
     * Display the specified resource.
     *
     * @param  \App\Roadster  $roadster
     * @return \Illuminate\Http\Response
     */
    public function show(Roadster $roadster)
    {
        return view('roadsters.show', compact('roadster'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Roadster  $roadster
     * @return \Illuminate\Http\Response
     */
    public function edit(Roadster $roadster)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Roadster  $roadster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Roadster $roadster)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Roadster  $roadster
     * @return \Illuminate\Http\Response
     */
    public function destroy(Roadster $roadster)
    {
        //
    }

    public  function  read(Request $request ,$id){
        if ($request->isMethod('post')){
            $ar= new Comment();
            $ar->user_id=Auth::user()->id;
            $ar->roadster_id=$id;
            $ar->comment=$request->input('comment1');
            $ar->save();
            // return redirect("view");
        }

        $article=Roadster::find($id);
        $ar=Array('roadster'=>$article);
        return view("roadsters.show",$ar );
    }
}
