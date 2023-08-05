@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row">
            <div class="col-12 py-2">
                <div class="card">
                    <div class="card-header d-flex justify-content-center align-items-center text-center">
                        <h2 class="fw-bold py-2">{{ $comic->title }}</h2>
                    </div>
                    <div class="card-body">
                        <div class="row mt-3">
                            <div class="d-flex justify-content-center">
                                <img src="{{ $comic->thumb }}" alt="banner-image" class="img-fluid border border-black border-5">
                            </div>
                            <div class="mt-4">
                                <h3 class="fw-bold py-2">Description</h3>
                                <hr>
                                <p>{{ $comic->description }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-12">
                                <h5 class="fw-bold py-2">Artists</h5>
                                <hr>
                                <p>{{ $comic->artists }}</p>
                            </div>

                            <div class="col-12">
                                <h5 class="fw-bold py-2">Writers</h5>
                                <hr>
                                <p>{{ $comic->writers }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center mt-3">
                <a href="{{ Route('comics.index') }}" class="btn btn-dark">Back <span class="align-middle">&#8629</span></a>
            </div>
        </div>
    </div>
@endsection