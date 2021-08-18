<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('admin.layouts.main');
    }
}
