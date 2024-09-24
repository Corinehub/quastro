@extends('layouts.masterworker')

@section('content')
    <div class="container-fluid">

        <!-- Page Header -->
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <h1 class="page-title fw-semibold fs-18 mb-0">Details DAO</h1>
            <div class="ms-md-1 ms-0">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">DAO</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Details DAO</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header Close -->

        <!-- Start::row-1 -->
        <div class="row">

            <div class="col-xl-6">

                <div class="card custom-card">
                    <div class="card-header ">
                        <div class="card-title">
                            Description DAO
                        </div>

                    </div>
                    <div class="card-body">

                        <label class="form-label"> {{ __('Description du projet') }}</label>

                        <p name="project_description" class="form-control" placeholder="Insérer la description du DAO"
                            cols="30" rows="4">

                            {{ $daoResult->project_description }}

                        </p>


                    </div>

                </div>

                <div class="  flex align-items-center justify-content-between">
                    <div class="card custom-card">
                        <div class="card-header justify-content-between">
                            <div class="card-title">
                                Information DAO
                            </div>

                        </div>
                        <div class="card-body">

                            <div class="col-xl-6">
                                <label for="nft-creator-name" class="form-label">{{ __('Nom') }}</label>
                                <span type="text" name="name" class="form-control" id="nft-creator-name"
                                    placeholder="Enter Name">
                                    {{ $daoResult->name }}
                                </span>
                            </div>

                            <div class="col-xl-6">
                                <label for="nft-creator-name" class="form-label">{{ __('Categorie') }}</label>
                                <span type="text" name="category" class="form-control" placeholder="Enter category">
                                    {{ $daoResult->category }}
                                </span>
                            </div>
                            <div class="col-xl-6">
                                <label for="nft-creator-name" class="form-label">{{ __('Pays') }}</label>
                                <span type="text" name="country" class="form-control" id="nft-creator-name"
                                    placeholder="Enter country">
                                    {{ $daoResult->country }}
                                </span>
                            </div>
                            <div class="col-xl-6">
                                <label for="nft-price" class="form-label">{{ __('Prix') }}</label>
                                <span type="number" name="prices" class="form-control" id="nft-price"
                                    placeholder="Enter Price">
                                    {{ $daoResult->prices }}
                                </span>
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">{{ __('Date de debut') }}</label>
                                <span type="date" name="start_at" class="form-control" placeholder="Enter start_at">
                                    {{ date('d-M-y', strtotime($daoResult->start_at)) }}
                                </span>
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">{{ __('Date de fin') }}</label>
                                <span type="date" name="end_at" class="form-control" placeholder="Enter end_at">
                                    {{ date('d-M-y', strtotime($daoResult->end_at)) }}
                                </span>
                            </div>
                            <div class="col-xl-6">
                                <label class="form-label">{{ __('Ville') }}</label>
                                <span type="text" name="city" class="form-control" placeholder="Enter city">
                                    {{ $daoResult->city }}
                                </span>
                            </div>
                            <div class="col-xl-6">
                                <label for="nft-price" class="form-label">{{ __('Nombre de souscription') }}</label>
                                <span type="number" name="max_number_subscribe" class="form-control"
                                    placeholder="Enter max_number_subscribe">
                                    {{ __($daoResult->max_number_subscribe) }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="row"> --}}
            <div class="col-xl-6">
                <div class="card custom-card overflow-hidden">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                            Documents DAO
                        </div>
                        <div class="prism-toggle">
                            {{-- <a class="btn btn-sm btn-primary" href="{{ route('document.create') }}">Ajouter Document
                                </a> --}}
                            <a class="btn btn-sm btn-primary"
                                href={{ route('document.create', ['id' => $daoResult->id]) }}>Ajouter Document
                            </a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <ul class="list-group list-group-flush">


                            @foreach ($documentResults as $documentResult)
                                <li class="list-group-item">
                                    <div class="d-flex align-items-center flex-wrap gap-2">
                                        <div class="flex-fill">

                                            <a href="javascript:void(0);"><span
                                                    class="d-block fw-semibold">{{ $documentResult->name }} .
                                                    {{ $documentResult->type }}
                                                </span></a>
                                            <a href="javascript:void(0);"><span
                                                    class="d-block text-muted fs-12 fw-normal">{{ $documentResult->link }}</span>
                                            </a>
                                        </div>
                                        <div class="btn-list">
                                            <a href={{ route('document.edit', ['id' => $documentResult->id]) }}
                                                class="btn btn-sm btn-icon btn-info-light btn-wave waves-effect waves-light"><i
                                                    class="ri-edit-line"></i></a>
                                            <a href={{ route('document.delete', ['id' => $documentResult->id]) }}
                                                {{-- <a href={{ route('document.delete', ["documentResult" => $documentResult] )}} --}}
                                                class="btn btn-sm btn-icon btn-danger-light btn-wave waves-effect waves-light"><i
                                                    class="ri-delete-bin-line"></i></a>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                    </div>
                    </ul>
                </div>

                <div class="card custom-card">
                    <div>

                        <div class="card-header ">
                            <div class="card-title">
                                Instruction DAO
                            </div>

                        </div>
                        <div class="card-body">
                            <label class="form-label"> {{ __('Instruction') }}</label>

                            <p name="instruction" class="form-control " placeholder="insérer les instruction  du DAO"
                                cols="30" rows="4">

                                {{ $daoResult->instruction }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-xl-6"> --}}

            {{-- </div> --}}



        </div>
        {{-- </div> --}}




    </div>
    </div>



    <div class="card-footer d-none border-top-0">
        <!-- Prism Code -->

        <!-- Prism Code -->
    </div>

    <!--End::row-1 -->

    </div>
@endsection

@push('js')
    <script src="../assets/libs/libs/flatpickr/flatpickr.min.js"></script>
    <script src="../assets/js/date&time_pickers.js"></script>
@endpush
