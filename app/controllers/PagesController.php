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
    
    /**
     * Show the accounts page.
     */
    public function accounts()
    {
        $accounts_types = App::get('database')->all('accounts_types');

        return view('accounts', compact('accounts_types'));
    }
}
