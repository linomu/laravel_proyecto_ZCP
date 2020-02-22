<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function index()
    {
        return view('admin.list');
    }

    
    public function create()
    {
        return view('admin.create');
    }

    
    public function store(Request $request)
    {
        //
    }

    public function show($id = 1)
    {
        return view('admin.show', compact('id'));
    }

    public function edit($id = 1)
    {
        return view('admin.edit');
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
