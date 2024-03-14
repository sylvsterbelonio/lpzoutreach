<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
            //this is for admin direction
            if(Auth::user()->user_Type=='1')
            {
                return view('admin.home');
               
            }
            else
            {
                return view('user.home');
            }
        }
        else
        {
            return redirect()->back();
        }
    }

    public function index()
    {
        return view('user.home');
    }

    public function logout () {
        //logout user
        auth()->logout();
        // redirect to homepage
        return redirect('/');
    }


}
