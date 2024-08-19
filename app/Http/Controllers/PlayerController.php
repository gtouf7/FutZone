<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePlayerRequest;
use App\Http\Requests\UpdatePlayerRequest;
use App\Models\Player;
use App\Models\Team;

use Illuminate\Support\Facades\Session;


class PlayerController extends Controller
{
    /*Authentication*/
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('players.index', [
            'players' => Player::all()
        ]);
    }

    public function trashed()
    {
        return view('players.trashed', [
            'players' => Player::onlyTrashed() -> get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('players.create', [
            'teams' => Team::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePlayerRequest $request)
    {
        $player = Player::create($request->validated());
        $player -> teams() -> attach($request -> team);
        Session::flash('success', 'Player created successfully');

        return redirect() -> route('players.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Player $player)
    {
        return view('players.show', compact('player'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Player $player)
    {
        return view('players.edit',compact('player'),['teams' => Team::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePlayerRequest $request, Player $player)
    {
        $player -> update($request -> validated());
        Session::flash('success', 'Player updated successfully');
        return redirect() -> route('players.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $player = Player::withTrashed() -> where('id', $id) -> first();
        $player -> forceDelete();
        Session::flash('success', 'Player deleted successfully');
        return redirect() -> route('players.index');
    }

    public function trash($id)
    {
        Player::destroy($id);
        Session::flash('success', 'Player deleted successfully');
        return redirect() -> route('players.index');
    }

    public function restore($id)
    {
        $player = Player::withTrashed() -> where('id', $id) -> first();
        $player -> restore();
        Session::flash('success', 'Player restored successfully');
        return redirect() -> route('players.index');
    }
    
}
