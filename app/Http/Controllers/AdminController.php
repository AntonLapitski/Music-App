<?php
/**
 * Created by PhpStorm.
 * User: tonnes
 * Date: 7/12/20
 * Time: 6:47 PM
 */

namespace App\Http\Controllers;

use App\Item;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = Item::all();
        return view('admin.index', ['items' => $items]);
    }
}
