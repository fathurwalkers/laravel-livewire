<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class PageController extends Controller
{
    public function home()
    {
        return view('page');
    }
}
