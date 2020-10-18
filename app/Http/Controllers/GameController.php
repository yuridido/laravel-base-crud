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
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $request->validate([
            'nome_gioco' => 'required | min:4',
            'casa_editrice' => 'required',
            'min_gioc' => 'required',
            'max_gioc' => 'required',
        ]);


        $gameNew = new Game;
        $gameNew->fill($data);
        // $gameNew->nome_gioco =  $data['nome_gioco'];
        // $gameNew->casa_editrice =  $data['casa_editrice'];
        // $gameNew->min_gioc =  $data['min_gioc'];
        // $gameNew->max_gioc =  $data['max_gioc'];

        $gameNew->save();
        // $gioco = $gameNew->save();
        // return view('show', compact('gameNew'));
        return redirect()->route('games.show', $gameNew);

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
    public function edit(Game $game)
    {

        return view('create', compact('game'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
    {
        $data = $request->all();
        $request->validate([
            'nome_gioco' => 'required | min:4',
            'casa_editrice' => 'required',
            'min_gioc' => 'required',
            'max_gioc' => 'required',
        ]);
        $game->update($data);
        return view('show', compact('game'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        $game->delete();
        return redirect()->route('games.index');
    }
}
