<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RelationController extends Controller
{
    public function relation (){
        $user = User::with(['post','phone'])->find([1,2]);
        // // return  ;
        return response()-> json($user);
    }
}
