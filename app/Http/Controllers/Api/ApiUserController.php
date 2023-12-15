<?php

namespace App\Http\Controllers;

use App\Models\User;

class ApiUserController extends Controller
{

    public function index()
    {
        $users = User::all();

        return $users;
    }
}