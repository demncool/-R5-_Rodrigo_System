<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    public function getUsers()
    {
        $users = User::all();
        return response($users, 200);
    }
}
