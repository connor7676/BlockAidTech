<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Welcome to Blockaid!';
        return view('pages.index')->with('title', $title);
    }

    public function payment()
    {
        return view('pages.payment');
    }

    public function benefits()
    {
        $data = array(
            'title' => 'Benefits',
            'services' => ['Blockaid', 'Blockchain', 'Cryptocurrency']
        );
        return view('pages.benefits')->with($data);
    }

    public function process()
    {
        return view('pages.process');
    }

    public function team()
    {
        return view('pages.team');
    }

    public function watchlist()
    {
        return view('pages.watchlist');
    }
}
