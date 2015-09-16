<?php

namespace App\Http\Controllers;


class IndexController extends MainController
{

    public function index()
    {
        return view('pages.home', $this->data);
    }
}