@extends('layouts.app')

@section('content')
    <a href="{{ route('kamer.create') }}" class="btn btn-primary mt-2 mb-2">Nieuwe Kamer</a>
    <table class="table">
        <thead>
        <tr>
            <td>Nummer</td>
            <td>Personen</td>
            <td>Oppervlakte</td>
            <td>Minibar</td>
            <td>Foto</td>

        </tr>
        </thead>
        <tbody>
        @foreach($kamers as $kamer)

            <tr>
                <td>{{$kamer->nummer}}</td>
                <td>{{$kamer->personen}}</td>
                <td>{{$kamer->oppervlakte}}</td>
                <td>{{$kamer->minibar ? "Ja" : "Nee"}}</td>
                <td><img width="100" src="{{asset('storage/' . $kamer->foto)}}"></td>
                <td style="display: inline-flex">
                    <a href="{{ route('kamer.edit',$kamer->id)}}" class="btn btn-primary">Wijzig</a>
                    &nbsp;
                    <form action="{{ route('kamer.destroy', $kamer->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-primary" type="submit">Verwijder</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
