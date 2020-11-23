<?php

namespace App\Http\Controllers\Publico;

use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{
    public function index()
    {
        return view('Publico/welcome');
    }
}
