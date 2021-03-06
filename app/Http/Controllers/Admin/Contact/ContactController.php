<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __construct(){
        $this->middleware(['permission:contacto']);
    }

    public function index(){
        return view('admin.contact.index');
    }
}
