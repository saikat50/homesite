<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    public $viewPath = 'dashboards.user.post-ad.';

    public function show_post_ads(){
        return view($this->viewPath . 'show-post-ads');
    }

    public function post_room_for_rent(){
        return view($this->viewPath . 'post-room-for-rent-advert');
    }

    public function post_whole_property(){
        return view($this->viewPath . 'post-whole-property-for-rent');
    }

    public function post_room_wanted(){
        return view($this->viewPath . 'post-room-wanted');
    }
}
