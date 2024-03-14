<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AndroidController extends Controller
{
    //

    public function bible()
    {
        return view('user.home');
    }
}
