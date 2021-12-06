<?php

namespace App\Http\Controllers\Extra;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MicrosoftWordController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function microsoftWord()
    {
        return view('extra.microsoft');
    }
}
