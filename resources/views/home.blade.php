@extends('layouts/app')

@section('title', 'Home page')

@section('main')
@dd($games)
<div class="container">
    <table class="table">
        <thead class="thead-primary">
            <tr>
                <th scope="col">Nome Gioco</th>
                <th scope="col">Casa Editrice</th>
                <th scope="col">Minimo Giocatori</th>
                <th scope="col">Massimo Giocatori</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($games $game)
            <tr>
                <td>{{ $game->nome_gioco }}</td>
                <td>{{ $game->casa_editrice }}</td>
                <td>{{ $game->min_gioc }}</td>
                <td>{{ $game->max_gioc }}</td>
                <input type="hidden" value="{{ $game->id }}">

            </tr>

            @endforeach
        </tbody>








</div>
@endsection
