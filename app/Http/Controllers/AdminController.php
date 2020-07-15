<?php
/**
 * Created by PhpStorm.
 * User: tonnes
 * Date: 7/12/20
 * Time: 6:47 PM
 */

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;


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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
       $this->validate($request,[
            'postName' => 'required',
            'postBody' => 'required',
            'image' => 'required',
            'audio' => 'required'
        ]);

        $item = new Item();
        $item->name = $request->postName;
        $item->body = $request->postBody;
        $image = $request->image->storeAs('img/', $request->image->getClientOriginalName());
        $item->image = $request->image->getClientOriginalName();
        $audio = $request->audio->storeAs('audio/', $request->audio->getClientOriginalName());
        $item->audio = $request->audio->getClientOriginalName();
        $item->save();

        return redirect()->back();
    }

    public function destroy($id)
    {
        $item = Item::find($id);
        $item->delete();
        return redirect()->back();
    }
}
