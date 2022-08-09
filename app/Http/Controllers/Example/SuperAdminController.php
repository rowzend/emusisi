<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'super-admin']);
    }

    public function index()
    {
        dd('ini adalah halaman khusus super-admin, selain itu tolong keluar');
    }
}
