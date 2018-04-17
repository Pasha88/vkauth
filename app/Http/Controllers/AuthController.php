<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Redirect;
use Auth;
use Illuminate\Support\Facades\Session;
use App\CustomStaff\Authorization\VkAuthorization;


class AuthController extends Controller {

    /*Основная функция по входу через вк*/
    public function getLogin(Request $request) {
        $access_token = Session::get('access_token');
        $vkAthorization = new VkAuthorization();
        $request_access_token = $vkAthorization->isAlreadyRegistered($request, $access_token);
        $mainUserInfo = $vkAthorization->getMainUserInfo($request_access_token, $access_token);

        $mainUser = $mainUserInfo->response[0];

        $UserFriendsInfo = $vkAthorization->getUserFriendsInfo($request_access_token, $access_token);
        $friends = $UserFriendsInfo->response->items;

        return view('todo.login')->withMainUser($mainUser)->withFriends($friends);
    }

    public function postLogin() {
 //     $access_token =  Input::get('username'); //$_GET['access_token'];
        return Redirect::route('todo');
    }
}
