<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studController extends Controller
{
    public function showForm(Request $request)
    {
    	return view ('reg-form');
    }
}
