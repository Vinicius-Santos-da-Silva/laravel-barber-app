<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller as BaseController;

class ConfigController extends BaseController
{
    public function index()
    {
        return view('Admin/config');
    }
}
