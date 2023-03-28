<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class RegisterController extends Controller
{
    public function index()
    {
        return view('Register.index', [
            'title' => 'Register',
            'active' => 'register',
        ]);
    }
}
