<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    //Show Register/Create Form
    public function create() {
        return view('users.register');
    }
}
