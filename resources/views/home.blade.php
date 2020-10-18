@extends('layouts/app')

@section('title', 'Home page')

@section('main')
{{-- @dd($games) --}}
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
            @foreach($games as $game)
            <tr>
                <td>{{ $game->nome_gioco }}</td>
                <td>{{ $game->casa_editrice }}</td>
                <td>{{ $game->min_gioc }}</td>
                <td>{{ $game->max_gioc }}</td>
                <td><a href="{{ route('games.edit', $game->id) }}"><button type="button" class="btn btn-secondary">Modifica</button></a></td>
                <td>
                    <form action="{{ route('games.destroy', $game) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </form>
                </td>


            </tr>

            @endforeach
        </tbody>








</div>
@endsection
