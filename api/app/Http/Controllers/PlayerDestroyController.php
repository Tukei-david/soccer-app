<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerDestroyController extends Controller
{
    //
    public function __invoke(Player $player)
    {
        $player->delete();
    }
}
