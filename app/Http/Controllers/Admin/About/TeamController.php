<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    function __construct(){
        $this->middleware('permission:nosotros');
    }

    public function index(){
        return view('admin.about.team.index');
    }
}
