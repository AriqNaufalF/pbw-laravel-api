<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function getUsers()
    {
        $users = DB::table('users')
            ->select('username', 'fullname', 'email')
            ->orderBy('username', 'asc')
            ->get();

        return response()->json($users, 200);
    }

    public function getAllMembers()
    {
        $members = User::all();

        return response()->json($members, 200);
    }
}
