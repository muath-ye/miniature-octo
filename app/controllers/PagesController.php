<?php

namespace App\Controllers;

class PagesController
{
    /**
     * Show the home page.
     */
    public function home()
    {
        return view('index');
    }
    
    /**
     * Show the Sql page.
     */
    public function sql()
    {
        return view('sql');
    }
}
