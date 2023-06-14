@extends('base')

@section('title', 'inscription')
@section('content')
    <div class="mt-5">
        <div class="text-end">
            <a class="btn btn-success mb-2" href="{{ route('logement.create') }}"><i class="fa fa-plus"></i> Ajouter
                logement</a>
        </div>
        @if (!$logements->isEmpty())

            <table class="table table-bordered table-light table-hover">
                <thead>
                    <tr>
                        <th scope="col">type</th>
                        <th scope="col">description</th>
                        <th scope="col">Note</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($logements as $logement)
                        <tr>
                            <td>{{ $logement->type }}</td>
                            <td>{{ $logement->description }}</td>
                            <td>{{ $logement->note }}</td>

                            <td>
                                <a href="{{ route('logement.edit', ['logement' => $logement]) }}"
                                    class="btn btn-secondary"><i class="fa fa-pencil me-2"></i></a>
                                <a href="{{ route('logement.destroy', ['logement' => $logement]) }}"
                                    class="btn btn-danger"><i class="fa fa-trash me-2"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>

@endsection
