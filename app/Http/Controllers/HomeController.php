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
    public function index(Request $request)
    {
        $user = Auth::user();
        
        // Handle tooltip session management
        if ($request->isMethod('post') && $request->input('hide_tooltip')) {
            session(['show_welcome_tooltip' => false]);
            return response()->json(['success' => true]);
        }
        
        // If flag not set, default to false to avoid unexpected popup on manual nav
        if (!session()->has('show_welcome_tooltip')) {
            session(['show_welcome_tooltip' => false]);
        }
        
        return view('home', compact('user'));
    }
}
