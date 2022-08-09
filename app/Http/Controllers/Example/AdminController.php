<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','admin'])
    }

    public index() 
    {
        dd('hei ini adalah halaman admin. selain admin akan di usir');
    }
}
