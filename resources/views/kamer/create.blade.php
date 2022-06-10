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
    <form method="post" action="{{ route('kamer.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Nummer</label>
            <input type="text" class="form-control" name="nummer"/>
        </div>
        <div class="form-group">
            <label>Personen</label>
            <input type="text" class="form-control" name="personen"/>
        </div>
        <div class="form-group">
            <label>Oppervlakte</label>
            <input type="text" class="form-control" name="oppervlakte"/>
        </div>
        <div class="form-group">
            <div class="checkbox">
                <label>Minibar</label>
                <input type="checkbox" name="minibar"/>
            </div>
        </div>
        <label>Foto</label>
        <div class="custom-file mb-4">
            <input type="file" name="image" class="custom-file-input" id="upload-foto">
            <label class="custom-file-label" for="upload-foto">Upload Foto</label>
        </div>

        <button type="submit" class="btn btn-primary">Toevoegen</button>
    </form>

    <script>
        // Wijzig text label van foto upload in filename
        $('.custom-file-input').on('change', function() {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        });
    </script>
@endsection

