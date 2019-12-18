<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Roadster;
use App\Category;

class AdminsController extends Controller
{
    public function index()
    {
        $number_of_roadsters=Roadster::count();
        $number_of_categories=Category::count();
        return view('admin.index', compact('number_of_roadsters', 'number_of_categories'));

    }
}
