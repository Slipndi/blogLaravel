<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{

    public function create()
    {
        return view('session.create');
    }

    public function store()
    {
        //valider la requête
        $attributes= request()->validate([
            'email'=>['required','email'],
            'password'=>['required']
        ]);

        if(auth()->attempt($attributes)){
                return redirect('/')->with('success','Bonjour '. auth()->user()->name .' bienvenue chez toi ! ');
        }

        throw ValidationException::withMessages([
            'email'=>"Votre e-mail n'existe pas dans la base."
        ]);


    }


    public function destroy()
    {
        auth()->logout();
        return redirect('/')->with('success','Vous avez bien été déconnecté. Belle journée !');
    }

}
