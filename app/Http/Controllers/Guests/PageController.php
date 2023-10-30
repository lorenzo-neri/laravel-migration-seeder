<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $message = 'Trenitalia 🇮🇹';
        $trains = \App\Models\Train::all();
        return view('welcome', compact('trains', 'message'));
    }
}
