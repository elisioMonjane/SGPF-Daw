<?php

namespace App\Http\Controllers\API;
 use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
 use Illuminate\Support\Facades\Auth;   

class AuthController extends Controller


    {
        public function __construct()
        {
            $this->middleware('auth:api', ['except' => ['login', 'register']]);
        }
    
        public function login(Request $request)
        {
            $request->validate([
                'email' => 'required|string|email',
                'password' => 'required|string',
            ]);
            $credentials = $request->only('email', 'password');
            $token = Auth::attempt($credentials);
            
            if (!$token) {
                return response()->json([
                    'message' => 'Unauthorized',
                ], 401);
            }
    
            $user = Auth::user();
            return response()->json([
                'user' => $user,
                'authorization' => [
                    'token' => $token,
                    'type' => 'bearer',
                ]
            ]);
        }
    
        public function register(Request $request)
        {
            /*$request->validate([
                'name' => 'required|string|max:255',
                'apelido' => 'require|string|max:255',
                 'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6',
            ]);*/
    
            /** @var App\Models\User $user */
            $user = User::create([
                'name' => $request->name,
                'apelido'=>$request->apelido,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
    
            return response()->json([
                'message' => 'User created successfully',
                'user' => $user,
                'token' => $user->createToken('token')
            ]);

        }
    
        public function logout()
        {
            Auth::logout();
            return response()->json([
                'message' => 'Successfully logged out',
            ]);
        }
    
        public function refresh()
        {
            return response()->json([
                'user' => Auth::user(),
                'authorisation' => [
                    'token' => Auth::refresh(),
                    'type' => 'bearer',
                ]
            ]);
        }
    }
    

