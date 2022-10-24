<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserApiController extends Controller
{
    public function index(User $user)
    {
        $users = $user->all();

        return response()->json($users);
    }
}
