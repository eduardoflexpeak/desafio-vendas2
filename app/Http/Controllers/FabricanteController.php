<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FabricanteController extends Controller
{
    public function index()
    {
        return view('fabricante.index');
    }

    public function create()
    {
        return view('fabricante.form');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
