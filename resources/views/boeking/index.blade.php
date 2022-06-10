@extends('layouts.app')
@section('content')

      <a href="{{ route('boeking.create') }}" class="btn btn-primary mt-2 mb-2">Nieuwe Boeking</a>
    <table class="table">
        <thead>
        <tr>
            <td>Datumboeking</td>
            <td>Naam</td>
            <td>Adres</td>
            <td>Creditkaartnummer</td>
            <td>Aankomstdatum</td>
            <td>Vertrekdatum</td>
            <td>Kamernummer</td>

        </tr>
        </thead>
        <tbody>
        @foreach($boekings as $boeking)
            <tr>
                <td>{{$boeking->datumboeking}}</td>
                <td>{{$boeking->naam}}</td>
                <td>{{$boeking->adres}}</td>
                <td>{{$boeking->creditkaartnummer}}</td>
                <td>{{$boeking->aankomstdatum}}</td>
                <td>{{$boeking->vertrekdatum}}</td></td>
                <td>{{ $boeking->kamer->nummer ?? 'default value if there is no kamer here' }}</td>


                <td style="display: inline-flex">
                    <a href="{{ route('boeking.edit',$boeking->id)}}" class="btn btn-primary">Wijzig</a>
                    &nbsp;
                    <form action="{{ route('boeking.destroy', $boeking->id)}}" method="post">

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
