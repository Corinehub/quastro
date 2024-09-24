@extends('layouts.master-backoffice')

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

    </div>
    <!-- Prism Code -->
    </div>

    <!--End::row-1 -->

    </div>
@endsection

@push('js')
    <script src="../assets/libs/libs/flatpickr/flatpickr.min.js"></script>
    <script src="../assets/js/date&time_pickers.js"></script>
@endpush
