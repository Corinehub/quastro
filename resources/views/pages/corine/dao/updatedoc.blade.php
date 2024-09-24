@extends('layouts.masterworker')

@section('content')
    <div class="container-fluid">
        {{-- <form> --}}
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <h1 class="page-title fw-semibold fs-18 mb-0">Document</h1>
            <div class="ms-md-1 ms-0">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">DAO</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Modifier Document</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            {{-- <div class="card-header justify-content-between"> --}}
            <div class="col-xl-9  ">
                <div class="card custom-card ">
                    <div class="card-header">
                        <div class="card-title">
                            Modifier Document
                        </div>
                    </div>
                    <div class="card-body">

                         <form class="row" method="POST" action="{{ route('document.update',$documentResult ) }}"> 
                            {{-- <form class="row"  action="{{ route('document.update',$dao_id ) }}"> --}}
                                
                            @csrf
                            @method('put')
                            <div class="col-md-6 mb-3">
                                <label class="form-label"> {{ __('Nom') }}</label>
                                <input type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $documentResult->name) }}"
                                    placeholder=" {{ __('Insérer le nom du Document') }}" aria-label="">

                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label"> {{ __('Lien') }}</label>
                                <input type="text" name="link"
                                    class="form-control @error('link') is-invalid @enderror" value="{{ old('link',$documentResult->link) }}"
                                    placeholder=" {{ __('Insérer le lien du Document') }}" aria-label="">

                                @error('lien')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label"> {{ __('Type') }}</label>
                                <input type="text" name="type"
                                    class="form-control @error('type') is-invalid @enderror" value="{{ old('type',$documentResult->type) }}"
                                    placeholder=" {{ __('Insérer le type du Document') }}" aria-label="">

                                @error('type')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3"> 
                                <input type="hidden" name="dao_id"
                                    class="form-control " value="{{$documentResult->dao_id }}"
                                    placeholder=" {{ __('Insérer le type du Document') }}" aria-label="">
                            </div>
                            <button type="submit"class="btn btn-primary">
                                Modifier
    
                            </button>


                        </form>
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
