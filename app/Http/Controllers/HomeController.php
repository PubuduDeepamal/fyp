<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if($usertype=='1')
        {
            return view('admin.home');
        }

        else
        {
            // $data = Product::paginate(3);

            // $user=auth()->user();

            // $count=cart::where('phone',$user->phone)->count();


            return view('dashboard');
        }

    }

    public function index()
    {

        if(Auth::id())
        {
            return redirect('redirect');
        }
        else
        {
            return view('user.home');
        }
    }
}
