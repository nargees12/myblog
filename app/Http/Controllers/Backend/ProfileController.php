<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function my_acc(){
        return view('backend.profile.my_acc');
    }
}
