<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function create(){
        return view ('form');
    }
    public function index(){
        $artikel = userModel::get_all();
        return view ('index');
    }
    public function store(Request $request){
        $artikel = \App\Models\userModel::create($request->all());
        return redirect ('/artikel/create');
    }
    public function show(){
        return view ('show');
    }
    public function edit(Request $request, $id){
        $artikel = \App\Models\userModel::find($id);
        return view ('user.edit',['user'=>$user]);
    }
    public function update (Request $request, $id)
    {
        $artikel = \App\Models\Pertanyaan::find($id);
        $artikel->update($request->all());
        return redirect('/artikel');
    }
    public function delete($id)
    {
        $artikel = \App\Models\Pertanyaan::find($id);
        $artikel->delete($artikel);
        return redirect('/artikel');
    }
}
