<?php

namespace App\Controllers;

use App\Core\App;

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
    
    /**
     * Show the categories page.
     */
    public function categories()
    {
        // $data = App::get('database')->all('tbl_category');
        // $data = App::get('database')->where('tbl_category', 'WHERE parent_category_id = 0');

        // return view('categories', compact('data'));
        return view('categories');
    }
}
