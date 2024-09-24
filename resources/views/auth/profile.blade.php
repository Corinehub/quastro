@extends('layouts.masterworker')

@section('content')
    <div class="container-fluid">
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <h1 class="page-title fw-semibold fs-18 mb-0">Profile</h1>
            <div class="ms-md-1 ms-0">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Profil</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
                    </ol>
                </nav>
            </div>
        </div>


        <div class="card custom-card overflow-hidden">
            {{-- <div class="card-header">
                <div class="card-title">
                    Profile
                </div>
            </div> --}}
            <div class="card-body p-0 ">
                <div class="d-sm-flex align-items-top p-4 border-bottom-0 main-profile-cover">
                    <div>
                        <span class="avatar avatar-xxl avatar-rounded online me-3">
                            <img src="../assets/images/images/faces/9.jpg" alt="">
                        </span>
                    </div>
                    <div class="flex-fill main-profile-info">
                        <div class="d-flex align-items-center justify-content-between">
                            <h6 class="fw-semibold mb-1 text-fixed-white">{{ auth()->user()->username }}</h6>
                            <button class="btn btn-light btn-wave"><i
                                    class="ri-add-line me-1 align-middle d-inline-block"></i>S'abonner</button>
                        </div>

                        
                        <p class="mb-1 text-muted text-fixed-white op-7">Chief Executive Officer (C.E.O)</p>
                        <p class="fs-12 text-fixed-white mb-4 op-5">
                            <span class="me-3"><i
                                    class="ri-building-line me-1 align-middle"></i>{{ auth()->user()->address }}</span>
                            <span><i class="ri-map-pin-line me-1 align-middle"></i>{{ auth()->user()->phone }}</span>
                        </p>
                        {{-- <div class="d-flex mb-0">
                            <div class="me-4">
                                <p class="fw-bold fs-20 text-fixed-white text-shadow mb-0">113</p>
                                <p class="mb-0 fs-11 op-5 text-fixed-white">Projets</p>
                            </div>
                            <div class="me-4">
                                <p class="fw-bold fs-20 text-fixed-white text-shadow mb-0">12.2k</p>
                                <p class="mb-0 fs-11 op-5 text-fixed-white">Abonnés</p>
                            </div>
                            <div class="me-4">
                                <p class="fw-bold fs-20 text-fixed-white text-shadow mb-0">128</p>
                                <p class="mb-0 fs-11 op-5 text-fixed-white">Abonnement</p>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="p-4 border-bottom border-block-end-dashed">
                    <div class="mb-4">
                        <p class="fs-15 mb-2 fw-semibold"> Biographie Professionelle:</p>
                        <p class="fs-12 text-muted op-7 mb-0">
                            I am <b class="text-default">{{ auth()->user()->username }},</b> here by conclude that,i am the founder
                            and managing director of the prestigeous company name laugh at all and acts as the cheif
                            executieve officer of the company.
                        </p>
                    </div>

                </div>
                <div class="p-4 border-bottom border-block-end-dashed">
                    <p class="fs-15 mb-2 me-4 fw-semibold"> Contact :</p>
                    <div class="text-muted">
                        <p class="mb-2">
                            <span class="avatar avatar-sm avatar-rounded me-2 bg-light text-muted">
                                <i class="ri-mail-line align-middle fs-14"></i>
                            </span>
                            {{ auth()->user()->email }}
                        </p>
                        {{-- <p class="mb-2">
                            <span class="avatar avatar-sm avatar-rounded me-2 bg-light text-muted">
                                <i class="ri-phone-line align-middle fs-14"></i>
                            </span>
                            {{ auth()->user()->phone }}
                        </p> --}}
                        {{-- <p class="mb-0">
                            <span class="avatar avatar-sm avatar-rounded me-2 bg-light text-muted">
                                <i class="ri-map-pin-line align-middle fs-14"></i>
                            </span>
                            {{ auth()->user()->address }}
                        </p> --}}
                    </div>
                </div>

                <div class="p-4 border-bottom border-block-end-dashed">
                    <p class="fs-15 mb-2 me-4 fw-semibold">Skills :</p>
                    <div>
                        <a href="javascript:void(0);">
                            <span class="badge bg-light text-muted m-1">Cloud computing</span>
                        </a>
                        <a href="javascript:void(0);">
                            <span class="badge bg-light text-muted m-1">Data analysis</span>
                        </a>
                        <a href="javascript:void(0);">
                            <span class="badge bg-light text-muted m-1">DevOps</span>
                        </a>
                        <a href="javascript:void(0);">
                            <span class="badge bg-light text-muted m-1">Machine learning</span>
                        </a>
                        <a href="javascript:void(0);">
                            <span class="badge bg-light text-muted m-1">Programming</span>
                        </a>
                        <a href="javascript:void(0);">
                            <span class="badge bg-light text-muted m-1">Security</span>
                        </a>
                        <a href="javascript:void(0);">
                            <span class="badge bg-light text-muted m-1">Python</span>
                        </a>
                        <a href="javascript:void(0);">
                            <span class="badge bg-light text-muted m-1">JavaScript</span>
                        </a>
                        <a href="javascript:void(0);">
                            <span class="badge bg-light text-muted m-1">Ruby</span>
                        </a>
                        <a href="javascript:void(0);">
                            <span class="badge bg-light text-muted m-1">PowerShell</span>
                        </a>
                        <a href="javascript:void(0);">
                            <span class="badge bg-light text-muted m-1">Statistics</span>
                        </a>
                        <a href="javascript:void(0);">
                            <span class="badge bg-light text-muted m-1">SQL</span>
                        </a>
                    </div>
                </div>
                <div class="col-xl 12">
                    <div class="card custom-card">
                        <div class="card-header">
                            <p class="fs-15 mb-2 me-4 fw-semibold">Informations Personnelles:
                            </p>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="d-flex flex-wrap align-items-center">
                                        <div class="me-2 fw-semibold">
                                            Name :
                                        </div>
                                        <span class="fs-12 text-muted">{{ auth()->user()->username }}</span>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-flex flex-wrap align-items-center">
                                        <div class="me-2 fw-semibold">
                                            Email :
                                        </div>
                                        <span class="fs-12 text-muted">{{ auth()->user()->email }}</span>
                                    </div>
                                </li>
                                {{-- <li class="list-group-item">
                                    <div class="d-flex flex-wrap align-items-center">
                                        <div class="me-2 fw-semibold">
                                            Phone :
                                        </div>
                                        <span class="fs-12 text-muted">{{ auth()->user()->phone }}</span>
                                    </div>
                                </li> --}}
                                {{-- <li class="list-group-item">
                                    <div class="d-flex flex-wrap align-items-center">
                                        <div class="me-2 fw-semibold">
                                            Designation :
                                        </div>
                                        <span class="fs-12 text-muted">{{ auth()->user()->username }}</span>
                                    </div>
                                </li> --}}
                                {{-- <li class="list-group-item">
                                            <div class="d-flex flex-wrap align-items-center">
                                                <div class="me-2 fw-semibold">
                                                    Age :
                                                </div>
                                                <span class="fs-12 text-muted">28</span>
                                            </div>
                                        </li> --}}
                                {{-- <li class="list-group-item">
                                            <div class="d-flex flex-wrap align-items-center">
                                                <div class="me-2 fw-semibold">
                                                    Experience :
                                                </div>
                                                <span class="fs-12 text-muted">10 Years</span>
                                            </div>
                                        </li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
