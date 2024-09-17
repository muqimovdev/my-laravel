<?php

namespace App\Http\Controllers;
use App\Models\ProductsFix;
use Illuminate\Http\Request;

class ProductsFixController extends Controller
{
    public function index(){
        $products = ProductsFix::all();

        return response()->json($products , 200);
    }



    public function store(Request $request){
        $products = ProductsFix::create([
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

        return response()->json($products , 200);
    }


    public function update(Request $request , $id){

        $like = ProductsFix::find($id);

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
        $like = ProductsFix::find($id);

        $like->delete();
        
        return response()->json(null , 200);
    }
    


    public function search($key){
       
        return ProductsFix::where('name' , 'Like' , "%$key%")->get();
       
    }
    

}
