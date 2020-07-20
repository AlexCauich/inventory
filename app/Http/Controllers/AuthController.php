<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator, Hash, Auth;
use App\User;

class AuthController extends Controller
{

    public function __construct(){
        $this->middleware('guest')->except(['getLogout']); 
    }

    public function getLogin(){
        return view('connect.login');
    }

    public function getRegister(){
        return view('connect.register');
    }

    public function postRegister(Request $request){
        $rules = [
            'name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'repead_pass' => 'required|same:password'
        ];

        // Si queremos personalizar los mensajes, podemos crear un array ya llamarlas
        $messages = [
            'name.required' => 'Your name is required',
            'last_name.required' => 'Your last name is required',
            'email.required' => 'Your mail is required',
            'email.email' => 'The format in not valid',
            'email.unique' => 'There is already a user with this email',
            'password.required' => 'Place enter a password',
            'password.min' => 'The password must be eight characters',
            'repeat_pass.required' => 'You need to confirm the password',
            'repeat_pass.min' => 'The password confirmation, must be eight characters',
            'repeat_pass.same' => 'Passwords do not match'
        ];

        $validator = Validator::make($request->all(), $rules, $messages); // Se almacenara la respuesta de la validacion sea verdaro o falso
        if($validator->fails()):
            return back()->withErrors($validator)->with('message', 'Se ha producido un error.')->with('typealert', 'danger');
        else:   
            $user = new User;
            $user->name = e($request->input('name'));
            $user->last_name = e($request->input('last_name'));
            $user->email = e($request->input('email'));
            $user->password = Hash::make($request->input('password'));

            if($user->save()):
                return redirect('/login')->with('message', 'Su usuario se creo con exito, ya puede iniciar sesión')->with('typealert', 'success');
            endif;
        endif;
    }

    public function postLogin(Request $request) {
        $rules = [
            'email' => 'required|email',
            'password' => 'required|min:8'
        ];

        $messages = [
            'email.required' => 'Your mail is required',
            'email.email' => 'The format in not valid',
            'password.required' => 'Place enter a password',
            'password.min' => 'The password must be eight characters',
        ];

        $validator = Validator::make($request->all(), $rules, $messages); // Se almacenara la respuesta de la validacion sea verdaro o falso
        if($validator->fails()):
            return back()->withErrors($validator)->with('message', 'Se ha producido un error.')->with('typealert', 'danger');
        else: 

            if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')], true )):
                return redirect('/');
            else:
                return back()->with('message', 'Correo electronico o contraseña erroneas.')->with('typealert', 'danger');
            endif;

        endif;
    }

    public function getLogout() {
        Auth::logout();
        return redirect('/');
    }
}
