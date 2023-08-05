@extends('layouts.app')

@section('content')
    <div class="container py-3">
        <div class="row">
            <div class="col-12 text-center">
                <a href="{{ Route('comics.index') }}" class="btn btn-dark">Visualizza i fumetti</a>
            </div>
        </div>
    </div>
@endsection