<?php

namespace App\Http\Controllers\Site\About;

use App\Http\Controllers\Controller;
use App\Models\SiteAboutTeam;
use Illuminate\Http\Request;

class AboutTeamController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:site nosotros']);
    }

    public function index(){
        return view('admin.site.about.team.index');
    }

    public function create(){
        $team = new SiteAboutTeam();
        return view('admin.site.about.team.create', compact('team'));
    }

    public function show(SiteAboutTeam $team){
        return view('admin.site.about.team.show', compact('team'));
    }

    public function edit(SiteAboutTeam $team){
        return view('admin.site.about.team.edit', compact('team'));
    }

}
