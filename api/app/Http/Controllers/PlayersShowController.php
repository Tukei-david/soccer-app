<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayersShowController extends Controller
{
    //
    public function __invoke()
    {
        return response()->json(['players' => Player::latest()->get()]);
    }
}
