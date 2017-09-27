<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create()
    {
        return view('session.login');
    }

    public function store()
    {

    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->home();
    }
}