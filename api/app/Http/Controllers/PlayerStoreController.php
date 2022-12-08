<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerStoreController extends Controller
{
    //
    public function __invoke(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'club' => ['required'],
            'country' => ['nullable'],
            'position' => ['nullable'],
        ]);

        Player::create([
            'name' => $request->name,
            'club' => $request->club,
            'country' => $request->country,
            'position' => $request->position
        ]);
    }
}
