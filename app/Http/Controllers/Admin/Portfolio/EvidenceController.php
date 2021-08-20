<?php

namespace App\Http\Controllers\Admin\Portfolio;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class EvidenceController extends Controller
{
    public function __construct(){
        $this->middleware(['permission:portafolio']);
    }

    public function index(){
        return view('admin.portfolio.index');
    }

    public function create(){
        return view('admin.portfolio.create');
    }

    public function edit(Portfolio $evidence){
        return view('admin.portfolio.edit', compact('evidence'));
    }

    public function show(portfolio $evidence){
        return view('admin.portfolio.show', compact('evidence'));
    }
}
