<?php


namespace App\Http\Controllers;


class UserController extends Controller
{
    public function indexFormSwitch($formType) {
        return view('welcome.accessView', compact('formType'));
//        return view('welcome.accessView', compact('formType'));
    }

    public function showSettings() {
        return view('user.setting');
    }

    public function showFriends() {
        return view('welcome.resume');
//        return view('login.forgot');
//        return view('login.reset');
//        return view('welcome.contact');
//        return view('welcome.services');
    }
}
