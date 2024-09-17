<?php

namespace App\Http\Controllers;
use  App\Models\Newsletter;
use Illuminate\Http\Request;

class NewController extends Controller
{
    public function index(){
        $news = Newsletter::all();

        return response()->json($news , 200);
    }



    public function store(Request $request){
        $news = Newsletter::create([
            "email" =>  $request->email,
        ]);

        return response()->json($news , 200);
    }


    public function update(Request $request , $id){

        $news = Newsletter::find($id);

        $news = Newsletter::update([
            "email" =>  $request->email,

        ]);

        return response()->json(null , 200);
    }
  


    public function delete($id){
        $news = Newsletter::find($id);

        $news->delete();
        
        return response()->json(null , 200);
    }
}
