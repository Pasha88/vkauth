<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


}


echo "222";

$aContext = array(
    'http' => array(
        'proxy' => '109.126.12.58:3128',
        'request_fulluri' => true,
    ),
);
$cxContext = stream_context_create($aContext);

$token = '4b4affa3188651aa4f710e6ef19d651c7bf1e3537f479e230363822f8a953d703e37e0fba2b2eec89148a';

//   $query = file_get_contents("https://api.vk.com/method/docs.get?offset=0&owner_id%2091503273&access_token=4b4affa3188651aa4f710e6ef19d651c7bf1e3537f479e230363822f8a953d703e37e0fba2b2eec89148a&v=1", False, $cxContext);
//    $result = json_decode($query, true);

$query = file_get_contents("https://api.vk.com/method/users.get?uids=37137627&fields=uid,first_name,friends&access_token=a5cae34bc2fb59b2023affa8c4860067ceb6e20a436d49a18f813da27ab3688c876d430c209818939a5c1&v=5.6
", False, $cxContext);
$result = json_decode($query, true);
print_r($result);


$var_text = "https://api.vk.com/method/friends.get?params[user_id]=37137627&count=5&params[order]=name&params[offset]=100&params[fields]=city%2Cdomain&params[name_case]=ins&params[v]=5.74&access_token=a5cae34bc2fb59b2023affa8c4860067ceb6e20a436d49a18f813da27ab3688c876d430c209818939a5c1&v=5.6";

echo "333";