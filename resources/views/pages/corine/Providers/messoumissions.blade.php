@extends('layouts.master-backoffice')

@section('content')
    <div class="container-fluid">
        {{-- <form> --}}
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <h1 class="page-title fw-semibold fs-18 mb-0">Mes Soumissions</h1>
            <div class="ms-md-1 ms-0">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Soumission</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Mes Soumissions</li>
                    </ol>
                </nav>
            </div>
        </div>
        @forelse($mesSoumissions as $mesSoumission)
            {{-- <div>hello</div> --}}
            <div class="row justify-content-center">
                <div class="col-xxl-8 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <ul class="list-unstyled mb-0 notification-container">
                        @foreach ($mesSoumission->subscription_dao_documents as $soumissions)
                            <li>
                                <div class="card custom-card un-read">
                                    <div class="card-body p-3">
                                        <a href="javascript:void(0);">
                                            <div class="d-flex align-items-top mt-0 flex-wrap">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-md online me-3 avatar-rounded">
                                                        <img alt="avatar" src="/assets/images/images/faces/4.jpg">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <div class="d-flex align-items-center">
                                                        <div class="mt-sm-0 mt-2">
                                                            <p class="mb-0 fs-14 fw-semibold">{{ $soumissions->name }}</p>
                                                            <p class="mb-0 text-muted">Project assigned by the manager
                                                                all<span
                                                                    class="badge bg-primary-transparent fw-semibold mx-1">files</span>and<span
                                                                    class="badge bg-primary-transparent fw-semibold mx-1">folders</span>were
                                                                included</p>
                                                            <span class="mb-0 d-block text-muted fs-12">12 mins ago</span>
                                                        </div>
                                                        <div class="ms-auto">
                                                            @if ($mesSoumission->validated == 'En Attente')
                                                                <span class="float-end badge bg-light text-muted">
                                                                    {{ $mesSoumission->validated }}
                                                                </span>
                                                            @elseif($mesSoumission->validated == 'Validée')
                                                                <span class="float-end badge bg-success text-white">
                                                                    {{ $mesSoumission->validated }}
                                                                </span>
                                                            @elseif($mesSoumission->validated == 'Rejetée')
                                                                <span class="float-end badge bg-danger text-white">
                                                                    {{ $mesSoumission->validated }}
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>

                </div>
            </div>
        @empty
            <div>
                Aucune Soumission!!!
            </div>
        @endforelse
    </div>
@endsection

@push('js')
    <script src="../assets/libs/libs/flatpickr/flatpickr.min.js"></script>
    <script src="../assets/js/date&time_pickers.js"></script>
@endpush
