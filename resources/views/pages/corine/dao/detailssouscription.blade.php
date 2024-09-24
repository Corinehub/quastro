@extends('layouts.masterworker')

@section('content')
    <div class="container-fluid">

        <!-- Page Header -->
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <h1 class="page-title fw-semibold fs-18 mb-0"> Informations Souscriptions</h1>
            <div class="ms-md-1 ms-0">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Souscription</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Informations Souscriptions</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header Close -->

        <!-- Start::row-1 -->
        <div class="row">
            {{-- <div class="col-xxl-9 col-xl-8">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                            Informations Souscription
                        </div>
                       
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table text-nowrap table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Prestataire ID</th>
                                        <th scope="col">Nom Prestataire</th>
                                        <th scope="col">Nom DAO</th>
                                        <th scope="col">DAO ID</th>
                                        <th scope="col">Numero Telephone</th>
                                        <th scope="col">Adresse</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subscribes as $subscribe)
                                        <tr>
                                            <td>
                                                <span class="fw-semibold">{{ $subscribe->provider_id }}</span>
                                            </td>
                                            <td>
                                                <span class="badge bg-secondary-transparent">Medium</span>
                                            </td>
                                            <td>
                                                <span class="fw-semibold">{{ $subscribe->name }}</span>
                                            </td>
                                            <td>
                                                <span class="fw-semibold">{{ $subscribe->dao_id }}</span>
                                            </td>
                                            <td>
                                                {{ $subscribe->phone }}
                                            </td>
                                            <td>
                                                <span class="fw-semibold text-primary">{{ $subscribe->address }}</span>
                                            </td>

                                            <td>
                                                <button class="btn btn-primary-light btn-icon btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    data-bs-title="Edit"><i class="ri-edit-line"></i></button>
                                                <button
                                                    class="btn btn-danger-light btn-icon ms-1 btn-sm task-delete-btn"><i
                                                        class="ri-delete-bin-5-line"></i></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">

                    </div>
                </div>
            </div> --}}

            {{-- @forelse ( $subscribes as $id) --}}
                
            @foreach($subscribes as $subscribes)
            <div class="col-xxl-9 col-xl-8">
                <div class="card custom-card">
                    <div class="card-header d-md-flex d-block">
                        <div class="h5 mb-0 d-sm-flex d-bllock align-items-center">
                            <div class="avatar avatar-sm">
                                <img src="/assets/images/images/brand-logos/toggle-logo.png" alt="">
                            </div>
                            <div class="ms-sm-2 ms-0 mt-sm-0 mt-2">
                                <div class="h6 fw-semibold mb-0"> {{ $subscribes->daos->name }} : 
                                       </div>
                            </div>
                        </div>
                        <div class="ms-auto mt-md-0 mt-2">
                            <form action="{{ route('souscription.valider', $subscribes->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-sm btn-secondary bg-success me-1">
                                    Valider <i class="ri-thumb-up-line"></i>
                                </button>
                            </form>
                            <form action="{{ route('souscription.reject', $subscribes->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-sm btn-primary bg-danger">
                                    Rejeter <i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row gy-3">
                            <div class="col-xl-12">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                       
                                        <p class="fw-bold mb-1">
                                            {{  $subscribes->providers->name }}
                                        </p>
                                        <p class="mb-1 text-muted">
                                            {{ $subscribes->providers->address }}
                                        </p>
                                        {{-- <p class="mb-1 text-muted">
                                            Georgetown,Washington D.C,USA,200071
                                        </p> --}}
                                        <p class="mb-1 text-muted">
                                            {{  $subscribes->providers->email }}
                                        </p>
                                        <p class="mb-1 text-muted">
                                            {{  $subscribes->providers->phone }}
                                        </p>
                                        <p class="text-muted">For more information check for <a
                                                href="{{route('profile.provider')}}"
                                                class="text-primary fw-semibold"><u>Profile</u></a> Details.</p>
                                    </div>

                                </div>
                            </div>
                            {{-- <div class="col-xl-3">
                                <p class="fw-semibold text-muted mb-1">Prestataire ID :</p>
                                <p class="fs-15 mb-1"># {{  $subscribes->provider_id }}</p>
                            </div> --}}
                            <div class="col-xl-3">
                                <p class="fw-semibold text-muted mb-1">Date Debut :</p>
                                <p class="fs-15 mb-1"> {{  $subscribes->daos->start_at }} 
                                     <span class="text-muted fs-12">12:42PM</span>
                                    </p>
                            </div>
                            <div class="col-xl-3">
                                <p class="fw-semibold text-muted mb-1">Date fin :</p>
                                <p class="fs-15 mb-1"> {{  $subscribes->daos->end_at }}</p>
                            </div>
                            <div class="col-xl-3">
                                <p class="fw-semibold text-muted mb-1">Montant :</p>
                                <p class="fs-16 mb-1 fw-semibold"> {{  $subscribes->daos->prices }}</p>
                            </div>
                            
                            <div class="col-xl-12">
                                <div>
                                    <label for="invoice-note" class="form-label">Description:</label>
                                    <textarea class="form-control form-control-light" id="invoice-note" rows="3">{{  $subscribes->daos->project_description }}
                                        </textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4">
                <div class="card custom-card">
                    <div class="card-body p-0">


                        <div class="p-4 border-bottom border-block-end-dashed d-flex align-items-top">
                            <div class="svg-icon-background bg-success-transparent me-4">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="svg-success">
                                    <path
                                        d="M11.5,20h-6a1,1,0,0,1-1-1V5a1,1,0,0,1,1-1h5V7a3,3,0,0,0,3,3h3v5a1,1,0,0,0,2,0V9s0,0,0-.06a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19.29.29,0,0,0-.1,0A1.1,1.1,0,0,0,11.56,2H5.5a3,3,0,0,0-3,3V19a3,3,0,0,0,3,3h6a1,1,0,0,0,0-2Zm1-14.59L15.09,8H13.5a1,1,0,0,1-1-1ZM7.5,14h6a1,1,0,0,0,0-2h-6a1,1,0,0,0,0,2Zm4,2h-4a1,1,0,0,0,0,2h4a1,1,0,0,0,0-2Zm-4-6h1a1,1,0,0,0,0-2h-1a1,1,0,0,0,0,2Zm13.71,6.29a1,1,0,0,0-1.42,0l-3.29,3.3-1.29-1.3a1,1,0,0,0-1.42,1.42l2,2a1,1,0,0,0,1.42,0l4-4A1,1,0,0,0,21.21,16.29Z">
                                    </path>
                                </svg>
                            </div>
                            <div class="flex-fill">
                                <h6 class="mb-2 fs-12">
                                    @foreach($subscribes->subscription_dao_documents as $subscribeDoc)
                                    <span class="count-up"
                                    data-count="319">{{ $subscribeDoc->type }}</span>
                                    @endforeach
                                    <span class="badge  fw-semibold float-end">
                                        <a href={{route('download.document',$subscribeDoc->id) }}
                                            class="avatar avatar-rounded avatar-sm bg-primary text-fixed-white"
                                            data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Download Resume"
                                            data-bs-original-title="Download Resume"><span><i
                                                    class="bi bi-download"></i></span></a>
                                    </span>
                                   
                                </h6>
                                <div>
                                    <h4 class="fs-18 fw-semibold mb-2">
                                        @foreach($subscribes->subscription_dao_documents as $subscribeDoc)
                                        <span class="count-up"
                                        data-count="319">{{ $subscribeDoc->link }}</span>
                                        @endforeach
                                            
                                        </h4>
                                    <p class="text-muted fs-11 mb-0 lh-1">
                                        <span class="text-danger me-1 fw-semibold">
                                            <i class="ri-arrow-down-s-line me-1 align-middle"></i>1.16%
                                        </span>
                                        <span>this month</span>
                                    </p>
                                   
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            @endforeach
           
        </div>
        <!--End::row-1 -->

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
