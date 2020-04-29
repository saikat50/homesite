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


    //room rent steps

    public function room_rent_step1(){
        return view($this->viewPath . 'room-rent.step-1');
    }

    public function room_rent_step2(){
        return view($this->viewPath . 'room-rent.step-2');
    }

    public function room_rent_step3(){
        return view($this->viewPath . 'room-rent.step-3');
    }

    public function room_rent_step4(){
        return view($this->viewPath . 'room-rent.step-4');
    }

    public function room_rent_step5(){
        return view($this->viewPath . 'room-rent.step-5');
    }

    public function room_rent_step6(){
        return view($this->viewPath . 'room-rent.step-6');
    }


    //property steps
    public function property_step1(){
        return view($this->viewPath . 'property-rent.step-1');
    }

    public function property_step2(){
        return view($this->viewPath . 'property-rent.step-2');
    }
    public function property_step3(){
        return view($this->viewPath . 'property-rent.step-3');
    }
    public function property_step4(){
        return view($this->viewPath . 'property-rent.step-4');
    }
    public function property_step5(){
        return view($this->viewPath . 'property-rent.step-5');
    }


    //ROOM WANTED STEP
    public function room_wanted_step2(){
        return view($this->viewPath . 'room-wanted.step-2');
    }
    public function room_wanted_final_step(){
        return view($this->viewPath . 'room-wanted.final-step');
    }


    //FINAL STEP
    public function final_step(){
        return view($this->viewPath . 'final-step');
    }


}
