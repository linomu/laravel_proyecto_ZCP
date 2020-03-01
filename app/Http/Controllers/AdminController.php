<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;

class AdminController extends Controller
{
    
    public function index()
    {
        //$admins = App\Admin::all();
        $admins = App\Admin::paginate(5);
        return view('admin.list',compact('admins'));
    }

    
    public function create()
    {
        return view('admin.create');
    }

    
    public function store(Request $request)
    {
        //Con $request->all(); podemos saber todo lo que nos llega en el objeto request
        $request->validate([
            'txt_name'=>'required',
            'txt_personal_id'=>'required|unique:admins,personal_id',
            'txt_last_name'=>'required',
            'txt_email'=>'required'
        ]);

        
        $newAdmin = new App\Admin;
        $newAdmin->personal_id=$request->txt_personal_id;
        $newAdmin->name = $request->txt_name;
        $newAdmin->lastname = $request->txt_last_name;
        $newAdmin->email = $request->txt_email;

        $newAdmin->save();
        return back()->with('mensaje','Administrador Agregado!');

       
    }

    public function show($id = 1)
    {
        $admin = App\Admin::findOrFail($id);
        return view('admin.show', compact('admin'));
    }

    public function edit($id = 1)
    {
        $admin = App\Admin::findOrFail($id);
        return view('admin.edit', compact('admin'));
    }

    
    public function update(Request $request, $id)
    {
        $admin = App\Admin::findOrFail($id);
        $request->validate([
            'txt_name'=>'required',
            'txt_personal_id'=>'required',
            'txt_last_name'=>'required',
            'txt_email'=>'required'
        ]);

        $admin->personal_id=$request->txt_personal_id;
        $admin->name = $request->txt_name;
        $admin->lastname = $request->txt_last_name;
        $admin->email = $request->txt_email;
        $admin->save();

        return back()->with('mensaje','Administrador Actualizado!');
    }

    /*public function destroy($id)
    {
        $admin = App\Admin::findOrFail($id);
        $admin->delete();
        return back()->with('mensaje','Administrador Eliminado!');
    }*/

    public function destroy(Request $request, $id)
    {
        if($request->ajax()){
            $admin = App\Admin::findOrFail($id);
            $admin->delete();
            return response()->json([
                'mensaje'=>$admin->name.' fue eliminado satisfactoriamente!'
            ]);
            
        }
    }
}
