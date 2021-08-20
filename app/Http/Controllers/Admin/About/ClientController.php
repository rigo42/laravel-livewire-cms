<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function __construct(){
        $this->middleware(['permission:nosotros']);
    }

    public function index(){
        return view('admin.about.client.index');
    }
}
