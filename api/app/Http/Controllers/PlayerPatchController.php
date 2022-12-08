<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlayerPatchRequest;
use App\Models\Player;
use Illuminate\Http\Request;

class PlayerPatchController extends Controller
{
    //
    public function __invoke(Request $request, Player $player)
    {
        $this->validate($request, [
            'name' => 'required',
            'club' => 'required',
            'country' => 'nullable',
            'position' => 'nullable'
        ]);

        $player->update($request->only('name', 'club', 'country', 'position'));
    }
}
