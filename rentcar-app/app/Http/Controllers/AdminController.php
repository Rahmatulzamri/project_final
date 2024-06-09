<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;

class AdminController extends Controller
{
    public function index()
    {   
        $admin = admin::all();
        return view('admin.index', compact('admin'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $admin = new admin;
        $admin->name = $request->input('name');
        $admin->email = $request->input('email');
        $admin->password = $request->input('password');
        $admin->save();

        return redirect()->route('administrator.index')->with('success', 'admin berhasil disimpan.');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $admin = admin::find($id);

        return view('admin.update', ['admin' => $admin]);
    }

    public function update(Request $request, string $id)
    {
    
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        admin::where('id',$id)
        ->update(
            [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => $request->input('password'),
            ]
            );
        return redirect('/administrator');
    }

    public function destroy(string $id)
    {
        admin::where('id',$id)->delete();

        return redirect('/administrator');
    }
}
