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
    <form class="container" action="{{route('games.store')}}" method="post">
        @csrf
        @method('POST')
        <div class="form-row">
            <div class="col-3">
                <input name="gioco" type="text" class="form-control" placeholder="Nome gioco" value="{{ old('gioco') }}">
            </div>
            <div class="col-3">
                <input name="casa" type="text" class="form-control" placeholder="Casa editrice" value="{{ old('casa') }}">
            </div>
            <div class="col-2">
                <input name="min" type="number" class="form-control" placeholder="minimo giocatori" value="{{ old('min') }}">
            </div>
            <div class="col-2">
                <input name="max" type="number" class="form-control" placeholder="massimo giocatori" value="{{ old('max') }}">
            </div>
            <div class="col-2">
                <input class="btn btn-primary mb-2" type="submit" value="invia">
            </div>
        </div>

    </form>


</div>



@endsection
