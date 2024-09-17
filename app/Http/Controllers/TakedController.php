<?php

namespace App\Http\Controllers;
use App\Models\TakedProduct;

use Illuminate\Http\Request;

class TakedController extends Controller
{
    
    public function index(){
        $takeds = TakedProduct::all();

        return response()->json($takeds , 200);
    }



    public function store(Request $request){

        
        $takeds = TakedProduct::create([
            "deliveryType" =>  $request->deliveryType,
            "paymentType" =>  $request->paymentType,
            "totalPrice" =>  $request->totalPrice,
            "totalCount" =>  $request->totalCount,
            "comment" =>  $request->comment,
            "email" =>  $request->email,
        ]);

        return response()->json($takeds , 201);
    }


    public function update(Request $request , $id){

        $taked = TakedProduct::find($id);

        $taked->update([
            "deliveryType" =>  $request->deliveryType,
            "paymentType" =>  $request->paymentType,
            "totalPrice" =>  $request->totalPrice,
            "totalCount" =>  $request->totalCount,
            "comment" =>  $request->comment,
            "email" =>  $request->email,
        ]);

        return response()->json(null , 200);
    }
  


    public function delete($id){
        $taked = TakedProduct::find($id);

        $taked->delete();
        
        return response()->json(null , 200);
    }
}
