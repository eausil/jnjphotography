<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardController extends Controller
{
    public function photobooth()
    {
        return view('photobooth');
    }

    public function rentals()
    {
        return view('rentals');
    }
    public function cakes()
    {
        return view('cakes');
    }

    public function developers()
    {
        return view('developers');
    }
}
