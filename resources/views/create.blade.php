@extends('layouts/app')

@section('title', 'Home page')

@section('main')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="mt-3">
    <form class="container" action="{{ (empty($game)) ? route('games.store') : route('games.update', $game->id) }}" method="post">
        @csrf
        @if(empty($game))
            @method('POST')
        @else
            @method('PATCH')
        @endif
        <div class="form-row">
            <div class="col-3">
                <input name="nome_gioco" type="text" class="form-control" placeholder="Nome gioco" value="{{ (empty($game)) ? old('nome_gioco') : $game->nome_gioco }}">
            </div>
            <div class="col-3">
                <input name="casa_editrice" type="text" class="form-control" placeholder="Casa editrice" value="{{ (empty($game)) ? old('casa_editrice') : $game->casa_editrice }}">
            </div>
            <div class="col-2">
                <input name="min_gioc" type="number" class="form-control" placeholder="minimo giocatori" value="{{ (empty($game)) ? old('min_gioc') : $game->min_gioc }}">
            </div>
            <div class="col-2">
                <input name="max_gioc" type="number" class="form-control" placeholder="massimo giocatori" value="{{ (empty($game)) ? old('max_gioc') : $game->max_gioc }}">
            </div>
            <div class="col-2">
                <input class="btn btn-primary mb-2" type="submit" value="invia">
            </div>
        </div>

    </form>


</div>



@endsection
