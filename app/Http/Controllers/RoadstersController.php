<?php

namespace App\Http\Controllers;

use App\Roadster;
use Illuminate\Http\Request;

class RoadstersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
}
