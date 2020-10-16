<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::all();
        // dd($games);
        return view('home', compact('games'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data = $request->all();
        // $request->validate([
        //     'gioco' => 'required | min:4',
        //     'casa' => 'required | min:4',
        // ]);
        //
        //
        // $gameNew = new Game;
        // $gameNew->nome_gioco =  $data['gioco'];
        // $gameNew->casa_editrice =  $data['casa'];
        // $gameNew->min_gioc =  $data['min'];
        // $gameNew->max_gioc =  $data['max'];
        //
        // $gameNew->save();
        // // $gioco = $gameNew->save();
        // // return view('show', compact('gameNew'));
        // return redirect()->route('games.show', compact('gameNew'));

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        // $game = Game::find($id);
        return view('show', compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
