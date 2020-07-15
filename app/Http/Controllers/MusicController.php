<?php
/**
 * Created by PhpStorm.
 * User: tonnes
 * Date: 6/7/20
 * Time: 10:46 AM
 */

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Support\Facades\Response;

class MusicController
{
    public function index()
    {
        $items = Item::orderBY('id', 'desc')->paginate(5);
        return view('music.music_index', ['items' => $items]);
    }
}
