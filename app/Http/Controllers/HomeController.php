<?php

namespace App\Http\Controllers;

use App\Models\DressCode;
use App\Models\Game;
use App\Models\Media;
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
        $media = Media::all();
        return view('media', [
            'media' => $media
        ]);
    }

    public function venueIndex() {
        return view('venue');
    }
}
