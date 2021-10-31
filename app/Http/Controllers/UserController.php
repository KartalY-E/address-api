<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }
}
