<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //

    public $viewPath = 'dashboards.user.search.';

    public function show_basic(){
        return view($this->viewPath . 'basic-search');
    }

    public function show_advanced(){
        return view($this->viewPath . 'advanced-search');
    }
    public function show_browse(){
        return view($this->viewPath . 'browse');
    }



}
