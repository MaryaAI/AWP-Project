<?php

namespace App\Http\Controllers;

use App\Roadster;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addToCart(Request $request)
    {
        $roadster = Roadster::find($request->id);



        return redirect()->back();
    }

    public function viewCart()
    {
        $items = auth()->user()->roadstersInCart;
        return view('cart', compact('items'));
    }

    public function removeOne(Roadster $roadster) {
        $oldQuantity = auth()->user()->roadstersInCart->where('roadster_id', $roadster->id)->first()->pivot->number_of_copies;

        if($oldQuantity > 1) {
            auth()->user()->roadstersInCartt->updateExistingPivot($roadster->id, ['number_of_copies'=> --$oldQuantity]);
        } else {
            auth()->user()->roadstersInCart->detach($roadster->id);
        }

        return redirect()->back();
    }

    public function removeAll(Roadster $roadster) {
        auth()->user()->roadstersInCart->detach($roadster->id);

        return redirect()->back();
    }
}




