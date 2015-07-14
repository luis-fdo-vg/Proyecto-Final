<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Routing\Controller;

class RegsitroController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    public function authenticate()
    {
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // Authentication passed...
            return redirect()->intended('index');
        }
    }

    public function get


}