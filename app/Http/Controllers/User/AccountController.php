<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    //


    public $viewPath = 'dashboards.user.account.';

    public function show_account(){
        return view($this->viewPath . 'my-account');
    }

    public function show_saved_ads(){
        return view($this->viewPath . 'saved-ads');
    }

    public function show_saved_searches(){
        return view($this->viewPath . 'saved-searches');
    }

    public function show_my_ads(){
        return view($this->viewPath . 'my-ads');
    }

    public function show_who_interested_ads(){
        return view($this->viewPath . 'who-interested-ads');
    }

    public function show_messages(){
        return view($this->viewPath . 'messages');
    }

    public function show_edit_my_details(){
        return view($this->viewPath . 'edit-my-details');
    }

    public function show_email_alert(){
        return view($this->viewPath . 'email-alert');
    }

    public function show_upgrade(){
        return view($this->viewPath . 'upgrade');
    }

}
