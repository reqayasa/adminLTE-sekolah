<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Blank extends BaseController
{
    public function index()
    {
        $title = 'Blank';
        return view('admin/pages/blank', compact('title'));
    }
}
