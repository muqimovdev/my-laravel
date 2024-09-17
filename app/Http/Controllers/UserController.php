<?php

namespace App\Http\Controllers;
use App\Models\UsersFix;
use Illuminate\Http\Request;
use Hash;

class UserController extends Controller
{
    
    public function index(){

        $users = UsersFix::all();

        return response()->json($users , 200);
    }



    public function store(Request $request){

        $users = UsersFix::create([
            "username" =>  $request->username,
            "phone" =>  $request->phone,
            "password" =>  Hash::make($request->password),
        ]);

        return response()->json($users , 201);
    }


    public function login(Request $request){

        $check_users = UserFix::where('phone' , $request->phone )->first();



        if ($check_users == null) {
            return response()->json([null, false, "User Not Found", 400]);
        }

        if (!Hash::check($request->password, $check_users->password)) {
            return response()->json([null, false, "Password is incorrect", 400]);
        }

        $token = Str::random(20);

        $check_users->update([
            "token" => $token
        ]);

        return response()->json(null , 200);
    }
  


    public function delete($id){
        $users = UsersFix::find($id);

        $users->delete();
        
        return response()->json(null , 200);
    }


}
