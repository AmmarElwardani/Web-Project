<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $user = Auth::user();
        // \Log::debug($user->getRoleNames());

        $role = $user->getRoleNames()[0];
        if ($role === "enterprise") {
            
        } else if ($role == "etudiant") {
            
        }
        return view('home', 
                    ['role' => $role]);
    }
}
