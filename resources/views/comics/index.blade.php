@extends('layouts.app')

@section('content')
<div class="index-page">
    <div class="container py-3">
        <div class="row">
            <div class="col-12 text-center">
                <a href="{{ Route('comics.create') }}" class="btn btn-success">Aggiungi Comic</a>
            </div>
            @foreach ($comics as $comic)
                <div class="col-4 my-5">
                    <div class="card">
                        <img src="{{ $comic->thumb }}" alt="cover-image" class="card-img-top border border-5">
                        <div class="card-header d-flex justify-content-center align-items-center text-center">
                            <h2>{{ $comic->title }}</h2>
                        </div>
                        <div class="card-body">
                            <div class="py-2">
                                <strong>Serie:</strong>
                                <span>{{ $comic->series }}</span>
                            </div>
                            <div class="py-2">
                                <strong>Tipo:</strong>
                                <span>{{ $comic->type }}</span>
                            </div>
                            <div class="py-2">
                                <strong>Data vendita:</strong>
                                <span>{{ $comic->sale_date }}</span>
                            </div>
                            <div class="py-2">
                                <strong>Prezzo:</strong>
                                <span>{{ $comic->price }}</span>
                            </div>
                            <div class="py-2">
                                <a href="{{ Route('comics.show', $comic->id) }}" class="btn btn-dark">Altro...</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection