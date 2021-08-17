<?php

namespace App\Http\Controllers\Site\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutInfoController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:site nosotros']);
    }

    public function index(){
        return view('admin.site.about.info.index');
    }
}
