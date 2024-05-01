<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){
        return view("admin.admin");
    }
    public function menu(){
        return view("menu.menu");
    }
    public function blog(){
        return view("blog.blog");
    }
  
    public function store(Request $request){
        request()->validate([
            "name"=>'required',
            "price"=>'required',
            "description"=>'required',
            "image"=> "required",
        ]);
        // dd($request);
        $image = $request->file("image");
        $filename =  $image->hashName();
        $image->storeAs("public/img/" . $filename);
        Menu::create([
            "name"=>$request -> name,
            "price"=>$request -> price,
            "description"=>$request -> description,
            "image"=>$filename ,
        ]);
        return back();
    }
    public function update(Request $request, Menu $menu){
        request()->validate([
            "name"=>'required',
            "price"=>'required',
            "description"=>'required',
            "image" => "required",
        ]);

        $uploadedFile = $request->file("image");
        $filename = $uploadedFile->hashName();
        $uploadedFile->move("storage/img", $filename);

        $menu->update([
            "name"=>$request->name,
            "price"=>$request->price,
            "description"=>$request->description,
            "image"=>$filename, 
        ]);


        return back();
    }
        public function destroy(Menu $menu){
        $menu->delete();
        return back();
    }
}