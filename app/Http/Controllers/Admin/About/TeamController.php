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

    public function create(){
        $team = new Team();
        return view('admin.about.team.create', compact('team'));
    }

    public function show(Team $team){
        return view('admin.about.team.show', compact('team'));
    }

    public function edit(Team $team){
        return view('admin.about.team.edit', compact('team'));
    }
}
