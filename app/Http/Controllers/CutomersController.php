<?php

namespace App\Http\Controllers;
use App\Models\Customers;
use Illuminate\Http\Request;

class CutomersController extends Controller
{
    public function index(){
        $customers = Customers::all();

        return response()->json($customers , 200);
    }



    public function store(Request $request){
        $customers = Customers::create([
            "type" =>  $request->type,
            "totalPrice" =>  $request->totalPrice,
            "comment" =>  $request->comment,
            "payment" =>  $request->payment,
        ]);

        return response()->json($customers , 200);
    }


    public function update(Request $request , $id){

        $customers = Customers::find($id);

        $customers = Customers::update([
            "type" =>  $request->type,
            "totalPrice" =>  $request->totalPrice,
            "comment" =>  $request->comment,
            "payment" =>  $request->payment,

        ]);

        return response()->json(null , 200);
    }
  


    public function delete($id){
        $customers = Customers::find($id);

        $customers->delete();
        
        return response()->json(null , 200);
    }

}
