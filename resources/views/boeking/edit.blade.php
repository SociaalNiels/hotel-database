@extends('layouts.app')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
    @endif
    <form method="post" action="{{ route('boeking.update', $boeking->id) }}" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <div class="form-group">
            <label>Datum boeking</label>
            <input type="date" class="form-control" name="datumboeking" value="{{$boeking->datumboeking}}"/>
        </div>
        <div class="form-group">
            <label>Datum boeking</label>
            <input type="text" class="form-control" name="naam" value="{{$boeking->naam}}"/>
        </div>
        <div class="form-group">
            <label>Adres</label>
            <input type="text" class="form-control" name="adres" value="{{$boeking->adres}}"/>
        </div>
        <div class="form-group">
            <label>Creditkaartnummer</label>
            <input type="text" class="form-control" name="creditkaartnummer" value="{{$boeking->creditkaartnummer}}"/>
        </div>
        <div class="form-group">
            <label>Vertrekdatum</label>
            <input type="date" name="vertrekdatum" class="form-control" value="{{$boeking->vertrekdatum}}"/>
            <div class="form-group">
        </div>
        </div>
        <div class="form-group">
            <label>Aankomstdatum</label>
            <input type="date" name="aankomstdatum" class="form-control" value="{{$boeking->aankomstdatum}}"/>
            <div class="form-group">
        </div>
            <select class="form-control" name="kamer_id">
                <option value="">Selecteer kamer</option>

                @foreach($kamers as $kamer){
                <option value="{{$kamer->id}}">{{$kamer->nummer}}</option>
                }
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Toevoegen</button>
    </form>
    </div>


@endsection

