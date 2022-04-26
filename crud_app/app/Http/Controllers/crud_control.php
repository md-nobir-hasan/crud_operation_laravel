<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class crud_control extends Controller
{
    public function shows(){
        $category = category::all();
        return view('crud',['category'=>$category]);
    }
    public function category_page(){
        // $category = category::all();
        return view('add_category');
    }
    public function insert(request $request){
        $category = new category;
        // dd($request->title);
        $category->title= $request->title ;
        $category->save();
        return redirect('/');
        // return view('add_category');
    }

    public function update_page($id){
        // dd($id);
        $category = category::where ('id',$id)->first();
        return view('category_update_page',['categories'=>$category]);
    }

    public function update(request $request,$id){
        $category = category::where('id',$id)->first();
        // dd($request->title);
        $category->title= $request->title ;
        $category->save();
        return redirect('/');
        // return view('add_category');
    }
    public function delete($id){
        $category = category::where('id',$id)->first();
        $category->delete();
        return redirect('/');
        // return view('add_category');
    }
    
}
