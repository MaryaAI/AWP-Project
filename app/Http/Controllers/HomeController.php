<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Roadster;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $roadsters = Roadster::Paginate(12);
     $title = ' عرض الكتب حسب تاريخ الإضافة';
     return view('home', compact('roadsters', 'title'));

    }

    public function search(Request $request)
        {
            $roadsters = Roadster::where('name', 'like', "%{$request->term}%")->paginate(12);
            $title = ' عرض نتائج البحث عن: ' . $request->term;
            return view('home', compact('roadsters', 'title'));
        }

}