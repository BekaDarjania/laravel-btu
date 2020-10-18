<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index($theme = 'light', $show_footer)
    {
        return view('home')
            ->with('Title', 'Home')
            ->with('Theme', $theme)
            ->with('ShowFooter', $show_footer);
    }

    public function about($theme, $show_footer)
    {
        return view('about')
            ->with('Title', 'About')
            ->with('Theme', $theme)
            ->with('ShowFooter', $show_footer);
    }

    public function contact($theme, $show_footer)
    {
        return view('contact')
            ->with('Title', 'Contact')
            ->with('Theme', $theme)
            ->with('ShowFooter', $show_footer);
    }
}
