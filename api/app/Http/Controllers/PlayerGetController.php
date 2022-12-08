<?php

namespace App\Http\Controllers;

use App\Http\Resources\PlayerResource;
use App\Models\Player;
use Illuminate\Http\Request;

class PlayerGetController extends Controller
{
    //
    public function __invoke(Player $player)
    {
        return new PlayerResource($player);
    }
}
