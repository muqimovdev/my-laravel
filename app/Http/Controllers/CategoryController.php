<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function index(){
        $categories = Category::all();

        return response()->json($categories , 200);
    }



    public function store(Request $request){
        $categories = Category::create([
            "img" =>  $request->img,
            "name" =>  $request->name,
        ]);

        return response()->json($categories , 200);
    }


    public function update(Request $request , $id){

        $categories = Category::find($id);

        $categories = Category::update([
            "img" =>  $request->img,
            "name" =>  $request->name,
        ]);

        return response()->json(null , 200);
    }
  


    public function delete($id){
        $categories = Category::find($id);

        $categories->delete();
        
        return response()->json(null , 200);
    }

    
}
