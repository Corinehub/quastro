<!-- Start::app-content -->
@extends('layouts.masterworker')

@section('content')
    <div class="container-fluid">

        <!-- Start::row-1 -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card mt-4">
                    <div class="card-body">
                        <div class="contact-header">
                            <div class="d-sm-flex d-block align-items-center justify-content-between">
                                <div class="h5 fw-semibold mb-0">Souscription</div>
                                {{-- <div class="d-flex mt-sm-0 mt-2 align-items-center">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0" placeholder="Search Contact" aria-describedby="search-contact-member">
                                        <button class="btn btn-light" type="button" id="search-contact-member"><i class="ri-search-line text-muted"></i></button>
                                    </div>
                                    <div class="dropdown ms-2">
                                        <button class="btn btn-icon btn-primary-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ti ti-dots-vertical"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);">Delete All</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Copy All</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Move To</a></li>
                                        </ul>
                                    </div>
                                    <button class="btn btn-icon btn-secondary-light ms-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add Contact"><i class="ri-add-line"></i></button>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @foreach ($subscribeResults as $subscribeResult)
                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="card custom-card">

                        <div class="card-body contact-action">
                            <div class="contact-overlay"></div>
                            <div class="d-flex align-items-top ">
                                <div class="d-flex flex-fill flex-wrap gap-3">
                                    <div class="avatar avatar-xl avatar-rounded">
                                        <img src="/assets/images/images/faces/4.jpg" alt="">
                                    </div>
                                    <div>
                                        <h6 class="mb-1 fw-semibold">
                                            {{-- {{ auth()->user()->provider-> }} --}}
                                            {{ $subscribeResult->username }}
                                        </h6>
                                        <p class="mb-1 text-muted contact-mail text-truncate">{{ $subscribeResult->email }}
                                        </p>
                                        <p class="fw-semibold fs-11 mb-0 text-primary">
                                            {{ $subscribeResult->phone }}
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <i class="ri-heart-3-fill fs-16 text-danger"></i>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-center gap-2 contact-hover-buttons">
                                <button type="button" class="btn btn-sm btn-light contact-hover-btn">
                                    View Contact
                                </button>
                                <div class="dropdown contact-hover-dropdown">
                                    <button class="btn btn-sm btn-icon btn-light btn-wave" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-2-fill"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a>
                                        </li>
                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a>
                                        </li>
                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video
                                                Call</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a>
                                        </li>
                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                    class="ri ri-heart-3-line me-2 align-middle d-inline-block"></i>Favourite</a>
                                        </li>
                                    </ul>
                                </div>
                                <button aria-label="button" class="btn btn-sm btn-icon btn-light contact-hover-dropdown1"
                                    type="button">
                                    <i class="ri-heart-3-fill text-danger"></i>
                                </button>
                            </div>
                        </div>


                    </div>
                </div>
            @endforeach
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-end">
                    <li class="page-item disabled"><a class="page-link" href="javascript:void(0);">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
                </ul>
            </nav>
        </div>
        <!--End::row-1 -->

    </div>
    </div>
    <!-- End::app-content -->
@endsection
@push('js')
    <script src="/assets/images/libs/libs/flatpickr/flatpickr.min.js"></script>
    <script src="/assets/images/js/date&time_pickers.js"></script>
@endpush
