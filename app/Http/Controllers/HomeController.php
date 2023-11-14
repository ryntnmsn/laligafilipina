<?php

namespace App\Http\Controllers;

use App\Models\DressCode;
use App\Models\Game;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homeIndex() {
        return view('home');
    }

    public function dressIndex() {
        $dressCodes = DressCode::all();
        return view('dress', [
            'dressCodes' => $dressCodes
        ]);
    }

    public function dressShow($slug) {
        $dressCode = DressCode::where('slug', $slug);

        return view('dress_single', [
            'dressCode' => $dressCode->first()
        ]);
    }

    public function gamesIndex() {
        $games = Game::all();
        return view('games', [
            'games' => $games
        ]);
    }

    public function mediaIndex() {
        return view('media');
    }

    public function venueIndex() {
        return view('venue');
    }
}
