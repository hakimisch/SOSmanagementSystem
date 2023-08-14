<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AdminDashboard extends Controller
{
    public function index()
    {
        if (Auth::check()) {
        // User is authenticated, show dashboard content
        return view('dashboardadmin');
        } 
    }
}
