<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RelationController extends Controller
{
    public function relation (){
        $user = \App\Models\User::all();

        return $user -> phone;
        // return response()-> json($user);
    }
}
