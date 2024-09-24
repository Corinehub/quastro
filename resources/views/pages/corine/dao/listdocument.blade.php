@extends('layouts.masterworker')

@section('content')
    <div class="container-fluid">
        <!-- Page Header -->
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <h1 class="page-title fw-semibold fs-18 mb-0">DAO</h1>
            <div class="ms-md-1 ms-0">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">DAO</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Documents</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header Close -->
        <!-- Start:: row-1 -->
        <div class="row">
            @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
            <div class="card custom-card overflow-hidden">
                <div class="card-header justify-content-between">
                    <div class="card-title">
                        Documents DAO
                    </div>

                </div>
                <div class="card-body p-0">
                    <ul class="list-group list-group-flush g-5">


                        @forelse($documentResults as $documentResult)
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
                                        <a href={{route('download.document',$documentResult->id) }}
                                            class="avatar avatar-rounded avatar-sm bg-primary text-fixed-white"
                                            data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Download Resume"
                                            data-bs-original-title="Download Resume"><span><i
                                                    class="bi bi-download"></i></span></a>

                                    </div>
                                </div>
                            </li>
                        @empty
                            <div>
                                Aucun Documents Disponibles!!
                            </div>
                        @endforelse

                </div>
                </ul>
            </div>

        </div>
    </div>
@endsection
