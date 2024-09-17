<?php

namespace App\Http\Controllers;
use App\Models\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function index(){
        $likes = Like::all();

        return response()->json($likes , 200);
    }



    public function store(Request $request){
        $likes = Like::create([
            "img" =>  $request->img,
            "img2" =>  $request->img2,
            "img3" =>  $request->img3,
            "name" =>  $request->name,
            "about" =>  $request->about,
            "type" =>  $request->type,
            "price" =>  $request->price,
            "discount" =>  $request->discount,
            "width" =>  $request->width,
            "height" =>  $request->height,
            "weight" =>  $request->weight,
            "country" =>  $request->country,
        ]);

        return response()->json($likes , 200);
    }


    public function update(Request $request , $id){

        $like = Like::find($id);

        $like->update([
            "img" =>  $request->img,
            "img2" =>  $request->img2,
            "img3" =>  $request->img3,
            "name" =>  $request->name,
            "about" =>  $request->about,
            "type" =>  $request->type,
            "price" =>  $request->price,
            "discount" =>  $request->discount,
            "width" =>  $request->width,
            "height" =>  $request->height,
            "weight" =>  $request->weight,
            "country" =>  $request->country,
        ]);

        return response()->json(null , 200);
    }
  


    public function delete($id){
        $like = Like::find($id);

        $like->delete();
        
        return response()->json(null , 200);
    }
    

}
