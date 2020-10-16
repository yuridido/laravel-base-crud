@extends('layouts/app')

@section('title', 'Home page')

@section('main')
<div class="container">
    <ul>
        <li>{{ $game->nome_gioco }}</li>
        <li>{{ $game->casa_editrice }}</li>
        <li>{{ $game->min_gioc }}</li>
        <li>{{ $game->max_gioc }}</li>
    </ul>
</div>


@endsection
