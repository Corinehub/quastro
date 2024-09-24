@extends('layouts.masterworker')

@section('content')
    <div class="container-fluid">

        <div class="row mt-1">

            <div class="col-xl-12">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-body p-0">
                                <div class="d-flex p-3 align-items-center justify-content-between">
                                    <div>
                                        <h6 class="fw-semibold mb-0">Liste de Souscriptions</h6>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $date = new DateTime();
                    $dateString = $date->format('d-M-y');
                    ?>

                    {{-- <div class="tab-content task-tabs-container">
                                <div class="tab-pane show active p-0" id="all-tasks" role="tabpanel">
                                    <div class="row" id="tasks-container">
                                        <div class="col-xl-3 task-card"> --}}
                    <div class="card custom-card ">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>

                                        <th scope="col"> {{ __('Nom Prestataire') }}</th>
                                        <th scope="col"> {{ __('Adresse') }}</th>
                                        <th scope="col"> {{ __('Numero Telephone') }}</th>
                                        <th scope="col"> {{ __('Nom DAO') }}</th>
                                        {{-- <th scope="col"> {{ __('ID DAO') }}</th> --}}
                                        <th scope="col">{{ __('Actions') }}</th>


                                    </thead>
                                    <tbody>

                                        @forelse($subscribes as $subscribe)
                                            @if ($dateString > date('d-M-y', strtotime($subscribe->end_at)))
                                                {{-- @foreach ($subscribes as $subscribe) --}}
                                                <tr>
                                                    <td> {{ $subscribe->providers->name }}</td>
                                                    <td> {{ $subscribe->providers->address }}</td>
                                                    <td> {{ $subscribe->providers->phone }}</td>
                                                    @foreach ($subscribe->subscription_dao_documents as $subscribe->subscription_dao_document)
                                                        <td> {{ $subscribe->subscription_dao_document->name }}</td>
                                                    @endforeach
                                                    {{-- <td> {{ $subscribe->dao_id }}</td> --}}
                                                    <td>
                                                        <a href={{ route('details.souscription', $subscribe->id) }}
                                                            class="btn btn-icons-list-item btn-sm btn-success-transparent rounded-pill"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-title="voir plus"><i class="fe fe-eye"></i>
                                                        </a>

                                                    </td>
                                                </tr>
                                                {{-- @endforeach --}}
                                            @endif
                                        @empty
                                            <div>
                                                <h5>
                                                    Aucune SOUSCRIPTION disponible!!!!
                                                </h5>
                                            </div>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                    {{-- 
                                        </div>

                                    </div>
                                </div>

                            </div> --}}

                </div>

            </div>
            <div class="card-footer d-none border-top-0">
                <!-- Prism Code -->

                <!-- Prism Code -->
            </div>
        </div>

    </div>
@endsection
@push('js')
    <script src="../assets/libs/libs/flatpickr/flatpickr.min.js"></script>
    <script src="../assets/js/date&time_pickers.js"></script>
@endpush
