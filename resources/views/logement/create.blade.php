@extends('base')

@section('title', 'ajout')
@section('content')
    <div class=" my-5 row">
        <div class="col-0 col-lg-3"></div>
        <div class="col-12 col-lg-6 border p-3 shadow rounded">
            <h4>Créer un nouvel logement</h4>
            <form action="{{ route('logement.store') }}" method="post">
                @include('logement.form')
            </form>
        </div>
        <div class="col-0 col-lg-3"></div>

    </div>

@endsection
