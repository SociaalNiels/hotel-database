@extends('layouts.app')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>

            </ul>
        </div><br />
    @endif
    <form method="post" action="{{ route('boeking.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Datumboeking</label>
            <input type="date" class="form-control" name="datumboeking"/>
        </div>
        <div class="form-group">
            <label>Naam</label>
            <input type="text" class="form-control" name="naam"/>
        </div>
        <div class="form-group">
            <label>Adres</label>
            <input type="text" class="form-control" name="adres"/>
        </div>
        <div class="form-group">
            <label>Creditkaartnummer</label>
            <input type="text" class="form-control" name="creditkaartnummer"/>
        </div>
        <div class="form-group">
                <label>Vertrekdatum</label>
                <input type="date" class="form-control" name="vertrekdatum"/>
            </div>
        <label>Aankomstdatum</label>
        <input type="date" class="form-control" name="aankomstdatum"/>
        <div class="form-group">
        </div>
        <div class="form-group">

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
        </div>







@endsection

