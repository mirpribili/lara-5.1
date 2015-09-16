<?php

namespace App\Http\Controllers;


use App\Menu;

class MainController extends Controller
{
    public function __construct(Menu $menuModel){
        $this->data =[];
        $this->data ['menu']['left']    =$menuModel->getLeftMenu();
        $this->data ['menu']['right']   =$menuModel->getRightMenu();
    }
}