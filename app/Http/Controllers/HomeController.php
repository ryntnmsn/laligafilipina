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
        $media = Media::where('name', 'Photobooth');
        return view('media', [
            'media' => $media->get()
        ]);
    }

    public function mediaEvent() {
        $media = Media::where('name', 'event');
        return view('event', [
            'media' => $media->get()
        ]);
    }

    public function venueIndex() {
        return view('venue');
    }
}
