<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class UserController extends Controller
{
    public function table(): View
    {
        return view('users', [
            'users' => DB::table('users')->get()
        ]);
    }

    public function user(string $id): View
    {
        return view('user', [
            'users' => DB::select("select * from users where id = :id", ['id' => $id])
        ]);
    }
}
