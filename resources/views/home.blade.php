@extends('layouts/app')

@section('title', 'Home page')

@section('main')
{{-- @dd($games) --}}
<div class="container">
    <table class="table table-striped table-light">
        <thead class="thead thead-dark">
            <tr>
                <th scope="col">Nome Gioco</th>
                <th scope="col">Casa Editrice</th>
                <th scope="col" class="text-center">Min</th>
                <th scope="col" class="text-center">Max</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($games as $game)
            <tr>
                <td>{{ $game->nome_gioco }}</td>
                <td>{{ $game->casa_editrice }}</td>
                <td class="text-center">{{ $game->min_gioc }}</td>
                <td class="text-center">{{ $game->max_gioc }}</td>
                <td><a href="#"><button class="btn btn-secondary" type="button">Modifica</button> </a></td>
                <td><a href="#"><button class="btn btn-danger" type="button">Elimina</button> </a></td>
                <input type="hidden" value="{{ $game->id }}">

            </tr>

            @endforeach
        </tbody>








</div>
@endsection
