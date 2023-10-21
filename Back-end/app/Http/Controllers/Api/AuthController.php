<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function _construct(){
    return $this->middleware('auth api',[
        'except'=>[
        'login',
        'register']
        
        ]);
  }
  public function register(Request $request){

    $request->validate([
 'name' => 'required',
 'email'=> 'require|email',
 'password' => 'required|min:8'

    ]);
 
  $user = User::create([

    'name' => $request->nome,
    'email' =>$request->email,
    'password' =>$request->password  ]);


$token = Auth::login($user);

return response()->json([
    'status'=>'sucessfully',
    'message'=>'user register sucessfuly',
    'user' => $user,
    'token'=> $token
]);
 }

}


