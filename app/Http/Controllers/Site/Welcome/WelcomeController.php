<?php

namespace App\Http\Controllers\Site\Welcome;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        return view('admin.site.welcome.index');
    }
}
