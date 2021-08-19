<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:nosotros']);
    }

    public function index(){
        return view('admin.about.team.index');
    }

    public function show(Team $person){
        return view('admin.about.team.show', compact('person'));
    }
}
