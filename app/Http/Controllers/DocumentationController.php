<?php

namespace App\Http\Controllers;

use App\Documentation;
use Illuminate\Http\Request;

class DocumentationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docs = Documentation::all();
        return view('documentations.index', compact('docs'));
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
     * @param  \App\Documentation  $documentation
     * @return \Illuminate\Http\Response
     */
    public function show(Documentation $documentation)
    {
        return view('documentations.show', compact('documentation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Documentation  $documentation
     * @return \Illuminate\Http\Response
     */
    public function edit(Documentation $documentation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Documentation  $documentation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Documentation $documentation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Documentation  $documentation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Documentation $documentation)
    {
        //
    }
}
