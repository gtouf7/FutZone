<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        //fetch non-admin related data
        return view('dashboard');
    }
}
