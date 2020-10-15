@extends('layouts/app')

@section('title', 'Home page')

@section('main')

<div class="mt-3">
    <form class="container" action="{{route('games.store')}}" method="post">
        @csrf
        @method('POST')
        <div class="form-row">
            <div class="col-4">
                <input name="gioco" type="text" class="form-control" placeholder="Nome gioco">
            </div>
            <div class="col-3">
                <input name="casa" type="text" class="form-control" placeholder="Casa editrice">
            </div>
            <div class="col-2">
                <input name="min" type="number" class="form-control" placeholder="minimo giocatori">
            </div>
            <div class="col-2">
                <input name="max" type="number" class="form-control" placeholder="massimo giocatori">
            </div>
            <div class="col-1">
                <input class="btn btn-primary mb-2" type="submit" value="invia">
            </div>
        </div>

    </form>


</div>



@endsection
