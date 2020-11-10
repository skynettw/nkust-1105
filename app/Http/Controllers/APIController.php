<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\UserModel;

use Illuminate\Http\Request;

class APIController extends Controller
{
    public function all() {
        $users = UserModel::all();
        return $users;
    }

    public function adduser($name) {
        UserModel::insert(["name"=>$name]);
        return $name;
    }
}
