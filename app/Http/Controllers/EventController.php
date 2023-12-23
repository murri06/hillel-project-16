<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class EventController extends Controller
{
    public function table(): View
    {
        return view('events', [
            'events' => DB::table('events')->get()
        ]);
    }

    public function event(string $id): View
    {
        return view('event', [
            'events' => DB::select("select * from events where id = :id", ['id' => $id])
        ]);
    }

}
