@extends('base')

@section('title', 'inscription')
@section('content')
    <div class="mt-5">
        <div class="text-end">
            <a class="btn btn-success mb-2" href="{{ route('locataire.create') }}"><i class="fa fa-plus"></i> Ajouter un
                locataire</a>
        </div>
        @if (!$locataires->isEmpty())

            <table class="table table-bordered table-light table-hover">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Téléphone</th>
                        <th scope="col">Login</th>
                        <th scope="col">Mot de passe</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($locataires as $locataire)
                        <tr>
                            <td>{{ $locataire->id }}</td>
                            <td>{{ $locataire->nom }}</td>
                            <td>{{ $locataire->telephone }}</td>
                            <td>{{ $locataire->login }}</td>
                            <td>{{ $locataire->mot_de_passe }}</td>

                            <td>
                                <a href="{{ route('locataire.edit', ['locataire' => $locataire]) }}"
                                    class="btn btn-secondary"><i class="fa fa-pencil me-2"></i></a>
                                <a href="{{ route('locataire.destroy', ['locataire' => $locataire]) }}"
                                    class="btn btn-danger"><i class="fa fa-trash me-2"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>

@endsection
