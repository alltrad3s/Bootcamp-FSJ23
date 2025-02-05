<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Exception;

class UserController extends Controller
{
    // Register new user
    public function register(Request $request) {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8',
            ]);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            return response()->json([
                'message' => 'User Registration Succesful',
                'data' => $user,
            ], 201);

        }catch (Exception $e) {
            return response()->json([
                'message' => "User Registration Failed {$e->getMessage()}",
            ]);
        }
    } //Cerramos Regisater

    public function login(Request $request){
        try{

            //Validate the request
            $request->validate([
                'email' => 'required|string|email',
                'password' => 'required|string'
            ]);

            $credentials = $request->only('email','password');
            
            // Attempt to log the user in
            // Auth::attempt() intenta loguear al usuario con las credenciales
            // Pero su funcionamiento da true si el usuario se loguea correctamente
            // con el ! negamos el resultado para que sea true si no se loguea
            if(!Auth::attempt($credentials)){
                // Si attempt no funciona damos una excepcion como respuesta
                // y cortamos la ejecucion
                throw new Exception('Invalid Login Credentials');
            }            

            // Si el email y el password estan bien obtenemos el usuario

            $user = $request->user();

            // Creamos un token para el usuario
            $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json([
                'message' => 'User Login Successful!',
                'user' => $user,
                'token' => $token
            ]);

        } catch(Exception $e){
            return response()->json([
                'message' => "Login Failed! {$e->getMessage()}"
            ] );
        }
    }

    public function logout(Request $request) {
        try {
            //Eliminamos token de usuario
            $request->user()->tokens()->delete();
            
            return response()->json([
                'message' => 'User logout succesful!'
            ]);
        } catch(Exception $e){
            return response()->json([
                'message' => "Logout Failed! {$e->getMessage()}"
            ]);
        }
    }
}
