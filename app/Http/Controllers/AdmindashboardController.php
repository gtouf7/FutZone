<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmindashboardController extends Controller
{
    public function index()
    {
        // Fetch admin data
        return view('admin.dashboard');
    }
}
