<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
   function index(){

    return view('user.dashboard');
   }

   function profile(){
       return view('dashboards.users.profile');
   }
   function settings(){
       return view('dashboards.users.settings');
   }
}
