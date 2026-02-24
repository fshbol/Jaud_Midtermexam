<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feature;

class FeaturesController extends Controller
{
    public function index()
    {
        // Fetch first profile
        $features = Feature::all();

        return view('home', compact('features'));
    }
}
