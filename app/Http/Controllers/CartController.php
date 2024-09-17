<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    

    public function index(){
        $carts = Cart::all();

        return response()->json($carts , 200);
    }



    public function store(Request $request){

        
        $carts = Cart::create([
            "img" =>  $request->img,
            "name" =>  $request->name,
            "about" =>  $request->about,
            "price" =>  $request->price,
        ]);

        return response()->json($carts , 201);
    }


    public function update(Request $request , $id){

        $cart = Cart::find($id);

        $cart->update([
            "img" =>  $request->img,
            "name" =>  $request->name,
            "about" =>  $request->about,
            "price" =>  $request->price,
        ]);

        return response()->json(null , 200);
    }
  


    public function delete($id){
        $cart = Cart::find($id);

        $cart->delete();
        
        return response()->json(null , 200);
    }
}
