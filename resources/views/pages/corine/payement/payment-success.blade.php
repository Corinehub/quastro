@extends('layouts.master-backoffice')

@section('content')
    <div class="container-fluid">
        {{-- <form> --}}
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <h1 class="page-title fw-semibold fs-18 mb-0">DAO</h1>
            <div class="ms-md-1 ms-0">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">DAO</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Payement DAO</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            {{-- <div class="card-header justify-content-between"> --}}
            <div class="col-xl-12  ">
                <div class="card custom-card ">
                    <div class="card-header">
                        <div class="card-title">
                            Payement DAO
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="col-md-12 mt-3">
                            <h1> Paiement réussi </h1>
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <p> Votre paiement a été traité avec succès. </p>
                            <!-- Vous pouvez personnaliser davantage cette vue avec des informations supplémentaires ou un message de remerciement. -->
                        </div>
                    </div>

                </div>
            </div>
            {{-- </form> --}}

        </div>
    </div>
@endsection

@push('js')
    <script src="../assets/libs/libs/flatpickr/flatpickr.min.js"></script>
    <script src="../assets/js/date&time_pickers.js"></script>
@endpush
