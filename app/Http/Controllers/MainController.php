<?php


namespace App\Http\Controllers;

use App\Item;

class MainController extends Controller
{
    public function index()
    {
        $item = Item::latest()->first();
        return view('main', ['item' => $item]);
    }
}
