<?php

namespace App\Http\Controllers;

use App\Country;
use App\User;

class UserController extends Controller
{
    public function user_address($user_id)
    {
        $user = User::find($user_id);
        return $user->address;
    }

    public function user_articles($user_id)
    {
        $user = User::find($user_id);
        return $user->articles;
    }

    public function user_roles($user_id)
    {
        $user = User::find($user_id);
        return $user->roles;
    }

    public function country_posts($country_id)
    {
        $country = Country::find($country_id);
        return $country->articles;
    }
}
