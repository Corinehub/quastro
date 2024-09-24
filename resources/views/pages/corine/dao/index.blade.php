@extends('layouts.masterworker')

@section('content')
    <div class="container-fluid">

        <!-- Page Header -->
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <h1 class="page-title fw-semibold fs-18 mb-0">DAO</h1>
            <div class="ms-md-1 ms-0">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboards</a></li>
                        <li class="breadcrumb-item active" aria-current="page">DAO</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header Close -->

        <!-- Start::row-1 -->
        {{--  --}}
        <!--End::row-1 -->

        <!-- Start::row-2 -->
        {{--  --}}
        <!-- End::row-2 -->
        <div class="row"
            style="
    display: grid;
    grid-template-columns: repeat(auto-fit, 18rem);
    align-items: start;
    justify-content: center;
">
            {{--  --}}
            <?php
            $date = new DateTime();
            $dateString = $date->format('d-M-y');
            
            ?>
            @forelse($daos as $dao)
                @if ($dateString > date('d-M-y', strtotime($dao->end_at)))
                    <div class="tab-content task-tabs-container">
                        <div class="tab-pane show active p-0" id="all-tasks" role="tabpanel">
                            <div class="row" id="tasks-container">
                                <div class="task-card">
                                    <div class="card custom-card task-pending-card">
                                        {{-- <div class="row"> --}}

                                        <div class="card-body">
                                            <div class="d-flex justify-content-between flex-wrap gap-2">
                                                <div>
                                                    <p class="fw-semibold mb-3 d-flex align-items-center"><a
                                                            href="javascript:void(0);"><i
                                                                class="ri-star-s-fill fs-16 op-5 me-1 text-muted"></i></a>{{ $dao->name }}
                                                    </p>
                                                    <p><span>

                                                            {{ $dateString < date('d-M-y', strtotime($dao->end_at)) }}
                                                        </span></p>
                                                    <p class="mb-3">{{ __('Date de debut') }} : <span
                                                            class="fs-12 mb-1 text-muted">{{ date('d-M-y', strtotime($dao->start_at)) }}</span>
                                                    </p>
                                                    <p class="mb-3">{{ __('Date de fin') }} : <span
                                                            class="fs-12 mb-1 text-muted">{{ date('d-M-y', strtotime($dao->end_at)) }}</span>
                                                    </p>
                                                    <p class="mb-3">{{ __('Categorie') }} : <span
                                                            class="fs-12 mb-1 text-muted">{{ $dao->category }}</span>
                                                    </p>
                                                    <p class="mb-3">{{ __('Prix') }} : <span
                                                            class="fs-12 mb-1 text-muted">{{ $dao->prices }}
                                                            fcfa</span>
                                                    </p>

                                                </div>

                                            </div>

                                        </div>
                                        {{-- </div> --}}
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                @endif
            @empty
                <div>
                    <h5>
                        Aucune DAO disponible!!!!
                    </h5>
                </div>
            @endforelse
        </div>

    </div>

    <!-- Start::row-3 -->
    {{-- <div class="row">
            <div class="col-xxl-2" id="leads-discovered">
                <div class="card custom-card">

                    <?php
                    $date = new DateTime();
                    $dateString = $date->format('d-M-y');
                    ?>
                    @forelse($daoResults as $daoResult)
                        @if ($dateString < date('d-M-y', strtotime($daoResult->end_at)))
                            <div class="card-body">

                                <div class="d-flex align-items-center fw-semibold justify-content-between gap-1 flex-wrap">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="lh-1">
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="/assets/images/images/faces/12.jpg" alt="">
                                            </span>
                                        </div>
                                        <div class="fs-14">{{ $daoResult->name }}</div>
                                    </div>
                                    <div>{{ $daoResult->prices }}FCFA</div>
                                </div>
                                <div class="row d-flex align-items-center justify-content-between">
                                    <div class="deal-description">
                                        <div class="my-1">
                                            <a href="javascript:void(0);" class="company-name"> {{ $daoResult->country }}</a>
                                        </div>
                                        <div class="text-muted fs-12"> {{ date('d-M-y', strtotime($daoResult->start_at)) }}</div>
                                        <div class="text-muted fs-12"> {{ date('d-M-y', strtotime($daoResult->end_at)) }}</div>
    
                                    </div>
                                    <div>
                                        <a href={{ route('dao.details', ['id' => $daoResult->id]) }}
                                            class="btn btn-icons-list-item btn-sm btn-success-transparent rounded-pill"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="voir plus"><i class="fe fe-eye"></i></a>
                                        <a class=" active btn btn-primary white" href={{ route('login.dao', $daoResult->id) }}
                                            aria-selected="true">Acheter</a>
                    
                                    </div>
                                </div>
                               
                            </div>
                        @endif
                    @empty
                        <div>
                            <h5>
                                Aucune DAO disponible!!!!
                            </h5>
                        </div>
                    @endforelse
                </div>
            </div>
                         
        </div> --}}
    {{-- <div class="col-xxl-2" id="leads-qualified">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center fw-semibold justify-content-between gap-1 flex-wrap">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="lh-1">
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="/assets/images/images/faces/11.jpg" alt="">
                                            </span>
                                        </div>
                                        <div class="fs-14">Event Sponsorship</div>
                                    </div>
                                    <div>$10,000</div>
                                </div>
                                <div class="deal-description">
                                    <div class="my-1">
                                        <a href="javascript:void(0);" class="company-name">Initech Info</a>
                                    </div>
                                    <div class="text-muted fs-12">21,May 2023 - 10:25AM</div>
                                </div>
                            </div>
                        </div>
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center fw-semibold justify-content-between gap-1 flex-wrap">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="lh-1">
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="/assets/images/images/faces/11.jpg" alt="">
                                            </span>
                                        </div>
                                        <div class="fs-14">Sales Training</div>
                                    </div>
                                    <div>$6,000</div>
                                </div>
                                <div class="deal-description">
                                    <div class="my-1">
                                        <a href="javascript:void(0);" class="company-name">Soylent Corp</a>
                                    </div>
                                    <div class="text-muted fs-12">10,May 2023 - 9:20AM</div>
                                </div>
                            </div>
                        </div>
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center fw-semibold justify-content-between gap-1 flex-wrap">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="lh-1">
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="/assets/images/images/faces/14.jpg" alt="">
                                            </span>
                                        </div>
                                        <div class="fs-14">Content Creation</div>
                                    </div>
                                    <div>$3,000</div>
                                </div>
                                <div class="deal-description">
                                    <div class="my-1">
                                        <a href="javascript:void(0);" class="company-name">Hooli Technologies</a>
                                    </div>
                                    <div class="text-muted fs-12">25,Aug 2023 - 3:38PM</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2" id="contact-initiated">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center fw-semibold justify-content-between gap-1 flex-wrap">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="lh-1">
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="/assets/images/images/faces/3.jpg" alt="">
                                            </span>
                                        </div>
                                        <div class="fs-14">E-commerce Integration</div>
                                    </div>
                                    <div>$12,000</div>
                                </div>
                                <div class="deal-description">
                                    <div class="my-1">
                                        <a href="javascript:void(0);" class="company-name">Spice Infotech</a>
                                    </div>
                                    <div class="text-muted fs-12">15,Sep 2023 - 8:32PM</div>
                                </div>
                            </div>
                        </div>
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center fw-semibold justify-content-between gap-1 flex-wrap">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="lh-1">
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="/assets/images/images/faces/16.jpg" alt="">
                                            </span>
                                        </div>
                                        <div class="fs-14">Ad Campaign</div>
                                    </div>
                                    <div>$5,500</div>
                                </div>
                                <div class="deal-description">
                                    <div class="my-1">
                                        <a href="javascript:void(0);" class="company-name">Umbrella Corp</a>
                                    </div>
                                    <div class="text-muted fs-12">17,Jun 2023 - 10:54AM</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2" id="needs-identified">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center fw-semibold justify-content-between gap-1 flex-wrap">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="lh-1">
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="/assets/images/images/faces/10.jpg" alt="">
                                            </span>
                                        </div>
                                        <div class="fs-14">Webinar Series</div>
                                    </div>
                                    <div>$9,500</div>
                                </div>
                                <div class="deal-description">
                                    <div class="my-1">
                                        <a href="javascript:void(0);" class="company-name">Massive Dynamic</a>
                                    </div>
                                    <div class="text-muted fs-12">16,May 2023 - 11:22AM</div>
                                </div>
                            </div>
                        </div>
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center fw-semibold justify-content-between gap-1 flex-wrap">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="lh-1">
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="/assets/images/images/faces/13.jpg" alt="">
                                            </span>
                                        </div>
                                        <div class="fs-14">SEO Audit</div>
                                    </div>
                                    <div>$3,000</div>
                                </div>
                                <div class="deal-description">
                                    <div class="my-1">
                                        <a href="javascript:void(0);" class="company-name">Logitech ecostics</a>
                                    </div>
                                    <div class="text-muted fs-12">27,Apr 2023 - 5:15PM</div>
                                </div>
                            </div>
                        </div>
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center fw-semibold justify-content-between gap-1 flex-wrap">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="lh-1">
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="/assets/images/images/faces/8.jpg" alt="">
                                            </span>
                                        </div>
                                        <div class="fs-14">Loyalty Program</div>
                                    </div>
                                    <div>$12,000</div>
                                </div>
                                <div class="deal-description">
                                    <div class="my-1">
                                        <a href="javascript:void(0);" class="company-name">Globex Corp</a>
                                    </div>
                                    <div class="text-muted fs-12">26,Jul 2023 - 5:28AM</div>
                                </div>
                            </div>
                        </div>
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center fw-semibold justify-content-between gap-1 flex-wrap">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="lh-1">
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="/assets/images/images/faces/9.jpg" alt="">
                                            </span>
                                        </div>
                                        <div class="fs-14">CRM Integration</div>
                                    </div>
                                    <div>$10,000</div>
                                </div>
                                <div class="deal-description">
                                    <div class="my-1">
                                        <a href="javascript:void(0);" class="company-name">CrystalClear Consulting</a>
                                    </div>
                                    <div class="text-muted fs-12">14,May 2023 - 11:29PM</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2" id="negotiation">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center fw-semibold justify-content-between gap-1 flex-wrap">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="lh-1">
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="/assets/images/images/faces/16.jpg" alt="">
                                            </span>
                                        </div>
                                        <div class="fs-14">Media Analytics</div>
                                    </div>
                                    <div>$9,000</div>
                                </div>
                                <div class="deal-description">
                                    <div class="my-1">
                                        <a href="javascript:void(0);" class="company-name">GlobalConnect</a>
                                    </div>
                                    <div class="text-muted fs-12">18,Mar 2023 - 2:32PM</div>
                                </div>
                            </div>
                        </div>
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center fw-semibold justify-content-between gap-1 flex-wrap">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="lh-1">
                                            <span class="avatar avatar-sm avatar-rounded bg-light">
                                                <img src="/assets/images/images/faces/21.jpg" alt="">
                                            </span>
                                        </div>
                                        <div class="fs-14">Lead Nurturing Strategy</div>
                                    </div>
                                    <div>$4,000</div>
                                </div>
                                <div class="deal-description">
                                    <div class="my-1">
                                        <a href="javascript:void(0);" class="company-name">AlphaTech Solutions</a>
                                    </div>
                                    <div class="text-muted fs-12">16,Jul 2023 - 7:53AM</div>
                                </div>
                            </div>
                        </div>
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center fw-semibold justify-content-between gap-1 flex-wrap">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="lh-1">
                                            <span class="avatar avatar-sm avatar-rounded">
                                                PL
                                            </span>
                                        </div>
                                        <div class="fs-14">Website Maintenance</div>
                                    </div>
                                    <div>$7,500</div>
                                </div>
                                <div class="deal-description">
                                    <div class="my-1">
                                        <a href="javascript:void(0);" class="company-name">RedRock Industries</a>
                                    </div>
                                    <div class="text-muted fs-12">30,Jul 2023 - 6:30AM</div>
                                </div>
                            </div>
                        </div>
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center fw-semibold justify-content-between gap-1 flex-wrap">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="lh-1">
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="/assets/images/images/faces/2.jpg" alt="">
                                            </span>
                                        </div>
                                        <div class="fs-14">Newsletter Campaign</div>
                                    </div>
                                    <div>$2,500</div>
                                </div>
                                <div class="deal-description">
                                    <div class="my-1">
                                        <a href="javascript:void(0);" class="company-name">CoreTech Solutions</a>
                                    </div>
                                    <div class="text-muted fs-12">12,May 2023 - 10:22AM</div>
                                </div>
                            </div>
                        </div>
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center fw-semibold justify-content-between gap-1 flex-wrap">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="lh-1">
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="/assets/images/images/faces/17.jpg" alt="">
                                            </span>
                                        </div>
                                        <div class="fs-14">Graphic Design</div>
                                    </div>
                                    <div>$5,000</div>
                                </div>
                                <div class="deal-description">
                                    <div class="my-1">
                                        <a href="javascript:void(0);" class="company-name">TechPro Services</a>
                                    </div>
                                    <div class="text-muted fs-12">10,Jul 2023 - 10:15PM</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2" id="deal-finalized">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center fw-semibold justify-content-between gap-1 flex-wrap">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="lh-1">
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="/assets/images/images/faces/1.jpg" alt="">
                                            </span>
                                        </div>
                                        <div class="fs-14">CRM Training</div>
                                    </div>
                                    <div>$4,200</div>
                                </div>
                                <div class="deal-description">
                                    <div class="my-1">
                                        <a href="javascript:void(0);" class="company-name">BlueSky Industries</a>
                                    </div>
                                    <div class="text-muted fs-12">15,May 2023 - 8:20AM</div>
                                </div>
                            </div>
                        </div>
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center fw-semibold justify-content-between gap-1 flex-wrap">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="lh-1">
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="/assets/images/images/faces/10.jpg" alt="">
                                            </span>
                                        </div>
                                        <div class="fs-14">Market Research</div>
                                    </div>
                                    <div>$10,500</div>
                                </div>
                                <div class="deal-description">
                                    <div class="my-1">
                                        <a href="javascript:void(0);" class="company-name">BrightStar Solutions</a>
                                    </div>
                                    <div class="text-muted fs-12">28,Jun 2023 - 9:27PM</div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
    </div>
    <!-- End::row-3 -->

    <!-- Start:: New Deal -->
    {{-- <div class="modal fade" id="create-contact" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title">New Deal</h6>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body px-4">
                                <div class="row gy-3">
                                    <div class="col-xl-12">
                                        <div class="mb-0 text-center">
                                            <span class="avatar avatar-xxl avatar-rounded">
                                                <img src="/assets/images/images/faces/9.jpg" alt="" id="profile-img">
                                                <span class="badge rounded-pill bg-primary avatar-badge">
                                                    <input type="file" name="photo" class="position-absolute w-100 h-100 op-0" id="profile-change">
                                                    <i class="fe fe-camera"></i>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <label for="deal-name" class="form-label">Contact Name</label>
                                        <input type="text" class="form-control" id="deal-name" placeholder="Contact Name">
                                    </div>
                                    <div class="col-xl-6">
                                        <label for="deal-lead-score" class="form-label">Deal Value</label>
                                        <input type="number" class="form-control" id="deal-lead-score" placeholder="Deal Value">
                                    </div>
                                    <div class="col-xl-12">
                                        <label for="company-name" class="form-label">Company Name</label>
                                        <input type="text" class="form-control" id="company-name" placeholder="Company Name">
                                    </div>
                                    <div class="col-xl-12">
                                        <label class="form-label">Last Contacted</label>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                                <input type="text" class="form-control" id="targetDate" placeholder="Choose date and time">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light"
                                    data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary">Create Deal</button>
                            </div>
                        </div>
                    </div>
                </div> --}}
    <!-- End:: New Deal -->

    {{-- </div> --}}
@endsection
@push('js')
    <script src="../assets/libs/libs/flatpickr/flatpickr.min.js"></script>
    <script src="../assets/js/date&time_pickers.js"></script>
@endpush
