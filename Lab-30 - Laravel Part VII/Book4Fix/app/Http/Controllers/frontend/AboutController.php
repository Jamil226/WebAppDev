<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\AboutModel;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function index()
    {
        return view('frontend.about');
    }

}
