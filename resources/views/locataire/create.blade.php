@extends('base')

@section('title', 'ajout')
@section('content')
    <div class=" my-5 row">
        <div class="col-0 col-lg-3"></div>
        <div class="col-12 col-lg-6 border p-3 shadow rounded">
            <h4>Créer un nouvel locataire</h4>
            <form action="{{ route('locataire.store') }}" method="post">
                @include('locataire.form')
            </form>
        </div>
        <div class="col-0 col-lg-3"></div>

    </div>

@endsection
