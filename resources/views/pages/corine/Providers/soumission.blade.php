@extends('layouts.master-backoffice')

@section('content')
    <div class="container-fluid">
        {{-- <form> --}}
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <h1 class="page-title fw-semibold fs-18 mb-0">SOUMISSION</h1>
            <div class="ms-md-1 ms-0">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">SOUMISSION</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Ajouter SOUMISSION</li>
                    </ol>
                </nav>
            </div>
        </div>
        @if (session('message'))
           <div class="alert alert-success">
            {{session('message')}}
           </div>
        @endif
        <div class="row d-md-flex d-block align-items-center justify-content-center">
            {{-- <div class="card-header justify-content-between"> --}}
            <div class="col-xl-8  ">
                <div class="card custom-card ">
                    <div class="card-header">
                        <div class="card-title">
                            Ajouter SOUMISSION
                        </div>
                    </div>
                    {{-- @if (session('message')) --}}
                        <div class="card-body">

                            <form class="row gy-4 mb-4" method="POST"
                                action="{{ route('soumission.store', $daoResult->id) }} " enctype="multipart/form-data">

                                @csrf

                                <div class="col-xl-12">
                                    <label for="job-title" class="form-label">{{ __('Nom') }}:</label>
                                    <input type="text" name="name" class="form-control" id="job-title"
                                        placeholder="Job Title" value={{ $daoResult->name }} @readonly(true)>

                                    <label for="job-title" class="form-label">{{ __('Lien') }}:</label>
                                    <input type="text" name="link" class="form-control" id="job-title"
                                        placeholder="Job Title" {{ $daoResult->link }}>

                                    <label for="job-title" class="form-label">{{ __('Type') }}:</label>
                                    <input type="file" name="type" class="form-control" id="job-title"
                                        placeholder="Job Title" {{ $daoResult->type }} multiple>

                                    <input type="hidden" name="subscribe_id" class="form-control" id="job-title"
                                        value={{ auth()->user()->id }}>
                                </div>

                                <div class="col-xl-12">
                                    <label for="job-description" class="form-label">{{ __('Description') }}:</label>
                                    <textarea class="form-control color-red" name="project_description" id="job-description" rows="4" readonly>
                                 {{ __($daoResult->project_description) }} 
                            
                            </textarea>
                                </div>


                                <div class="col-xl-12 mt-3 d-md-flex align-items-center justify-content-center">
                                    <button type="submit"class="btn btn-primary w-100">
                                        Sousmissionner

                                    </button>

                                </div>
                            </form>
                        </div>
                    {{-- @endif --}}

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
