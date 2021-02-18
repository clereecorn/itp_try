<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentPagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Go through middleware for authentication
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('stdAccount.stdProfile');
    }

    public function documents()
    {
        return view('stdAccount.stdDocs');
    }
    
    public function enrollment()
    {
        return view('stdAccount.stdEnroll');
    }
}
