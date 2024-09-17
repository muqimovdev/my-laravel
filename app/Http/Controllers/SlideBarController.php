<?php

namespace App\Http\Controllers;
use App\Models\SlideBar;
use Illuminate\Http\Request;

class SlideBarController extends Controller
{
  

    public function index(){
        $slides = SlideBar::all();

        return response()->json($slides , 200);
    }



    public function store(Request $request){
        $slides = SlideBar::create([
            "img" =>  $request->img,
        ]);

        return response()->json($slides , 200);
    }


    public function update(Request $request , $id){

        $slides = SlideBar::find($id);

        $slides = SlideBar::update([
            "img" =>  $request->img,
        ]);

        return response()->json(null , 200);
    }
  


    public function delete($id){
        $slides = SlideBar::find($id);

        $slides->delete();
        
        return response()->json(null , 200);
    }


}
