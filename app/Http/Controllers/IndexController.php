<?php

namespace App\Http\Controllers;


use App\Project;
use App\Slider;

class IndexController extends MainController
{

    public function index(Slider $slider)
    {
        $this->data['slides']=$slider->getActive();

        return view('pages.home', $this->data);
    }

    public function projectList(Project $project){
        $this->data['projects']=$project->getActive();
        return view('pages.project_list',$this->data);
    }

    public function projectCart($slug, Project $project){
        $this->data['project']=$project->getBySlug($slug);
        return view('pages.project_cart',$this->data);
    }

    public function about(){
        $this->data['about']=json_decode(file_get_contents(storage_path().'/administrator_settings/about.json'));
        return view('pages.about',$this->data);
    }
}