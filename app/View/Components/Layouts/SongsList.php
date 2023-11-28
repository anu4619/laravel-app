<?php

namespace App\View\Components\Layouts;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SongsList extends Component
{

    public $songs = [];
    public function __construct($songs = [])
    {
        $this->songs = $songs;
    }

    public function render(): View|Closure|string
    {
        return view('components.layouts.songs-list');
    }
}