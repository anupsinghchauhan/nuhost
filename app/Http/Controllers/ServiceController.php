<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function domainSearch()
    {
        return view('domain-search');
    }
    public function ourService()
    {
        return view('our-service');
    }
    public function webHosting()
    {
        return view('web-hosting');
    }
}
