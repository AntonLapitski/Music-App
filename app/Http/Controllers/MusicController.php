<?php
/**
 * Created by PhpStorm.
 * User: tonnes
 * Date: 6/7/20
 * Time: 10:46 AM
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;

class MusicController
{
    public function index()
    {
        return view('music.music_index');
    }
}
