<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function homepage()
    {
        $pageTitle = 'Homepage';

        return view('welcome', compact('pageTitle'));
    }

    public function aboutUs()
    {
        $pageTitle = 'Sobre nós';

        return view('about-us', compact('pageTitle'));
    }

    public function contacts()
    {
        $pageTitle = 'Contacts';

        return view('contacts', compact('pageTitle'));
    }
}
