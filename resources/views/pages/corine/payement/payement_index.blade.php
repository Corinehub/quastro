@extends('layouts.master-backoffice')

@section('content')
    <div class="container-fluid">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Liste des Paiements</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        </head>

        <body>
            <div class="container mt-5">
                <h2>Liste des Paiements</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>NOM DAO</th>
                            <th>Montant</th>
                            <th>Date</th>
                            {{-- <th>Utilisateur</th> --}}
                            <th>Statut</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($mesPaiements as $mesPaiement)
                        <tr>
                            @foreach($mesPaiement->dao_payments as $payment)
                            <td>{{ $payment->name }}</td>
                            <td>{{ $payment->cost }} FCFA</td>
                            <td>{{ $payment->created_at->format('d/m/Y') }}</td>
                            {{-- <td>{{ $payment->user->username }}</td> <!-- Assurez-vous d'avoir la relation user --> --}}
                            <td>
                                <span class="badge bg-success-transparent px-4 py-2">
                                    {{ $payment->state }}
                                </span>
                            </td>
                            @endforeach
                            
                        </tr>
                        @empty
                            <tr>
                               <td> Aucun Paiements jusqu'à présent!!!</td>
                            </div>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </body>
    </div>
@endsection
@push('js')
    <script src="../assets/libs/libs/flatpickr/flatpickr.min.js"></script>
    <script src="../assets/js/date&time_pickers.js"></script>
@endpush
