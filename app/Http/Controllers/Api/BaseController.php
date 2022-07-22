<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Jobs\GetUsers;
use App\Models\User;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    
    public function getUsers(Request $request) {

        $users = new User();
        GetUsers::dispatch($users->all())->delay(now()->addSeconds('5'));
        dd('fim');

    }

}
