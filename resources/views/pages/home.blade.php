@extends('layouts.master-1')

@section('content')
    {{-- <div class="container-fluid"> --}}

    <div class="main-content landing-main px-0">

        <!-- Start:: Section-1 --> 
    
        <div class="landing-banner" id="home">
            <section class="section">
                <div class="container main-banner-container pb-lg-0">
                    <div class="row">
                        <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-8">
                            <div class="py-lg-5">
                                <div class="mb-3">
                                    <h5 class="fw-semibold text-fixed-white op-9">BRILLIANCE IN EXECUTION</h5>
                                </div>
                                <p class="landing-banner-heading mb-3">Your sure stop place for best theme ends here with
                                    <span class="text-secondary">YNEX !</span></p>
                                <div class="fs-16 mb-5 text-fixed-white op-7">ynex - Now you can use this admin template to
                                    design stunning dashboards that will wow your target viewers or users to no end.</div>
                                {{-- <a href="home" class="m-1 btn btn-primary">
                                View Demos
                                <i class="ri-eye-line ms-2 align-middle"></i>
                            </a> --}}
                            </div>
                        </div>
                        <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-4">
                            <div class="text-end landing-main-image landing-heading-img">
                                <img src="/assets/images/images/media/landing/1.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- End:: Section-1 -->



        <!-- Start:: Section-4 -->
        <section class="section section-bg " id="our-mission">
            <div class="container text-center">
                <p class="fs-12 fw-semibold text-success mb-1"><span class="landing-section-heading">Liste DAO</span></p>
                <h2 class="fw-semibold mb-2">Our mission consists of 8 major steps.</h2>
                <div class="row justify-content-center mb-5">
                    <div class="col-xl-7">
                        <p class="text-muted fs-15mb-0 fw-normal">Our mission is to make web design easy, so you can focus
                            on building your brand.</p>
                    </div>
                </div>
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
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between flex-wrap gap-2">
                                                        <div>
                                                            <p class="fw-semibold mb-3 d-flex align-items-center"><a
                                                                    href="javascript:void(0);"><i
                                                                        class="ri-star-s-fill fs-16 op-5 me-1 text-muted"></i></a>{{ $dao->name }}
                                                            </p>
                                                            <p><span>
                                                                    date
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
                                                    <div>

                                                        <a class=" active btn btn-primary white"
                                                            href={{ route('login.dao', $dao->id) }}
                                                            aria-selected="true">Acheter</a>

                                                    </div>
                                                    {{-- <div >

                                                    <a class="nav-link  btn btn-success white"
                                                        href={{ route('soumission.dao', $dao->id) }}
                                                        aria-selected="true">Soumissioner</a>

                                                </div> --}}
                                                </div>
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
        </section>
        <!-- End:: Section-4 -->


        <!-- Start:: Section-7 -->
        <section class="section  section-bg" id="team">
            <div class="container text-center">
                <p class="fs-12 fw-semibold text-success mb-1"><span class="landing-section-heading">Equipe</span></p>
                <h3 class="fw-semibold mb-2">Great things in business are done by a team.</h3>
                <div class="row justify-content-center">
                    <div class="col-xl-7">
                        <p class="text-muted fs-15 mb-5 fw-normal">Our team consists of highly qulified employees that works
                            hard to raise company standards.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="card custom-card text-center team-card ">
                            <div class="card-body p-5">
                                <span class="avatar avatar-xxl avatar-rounded mb-3 team-avatar">
                                    <img src="/assets/images/images/faces/15.jpg" alt="">
                                </span>
                                <p class="fw-semibold fs-17 mb-0 text-default">MOUKOUDI M. Thierry</p>
                                <span class="text-muted fs-14 text-primary fw-semibold">Directeur General</span>
                                {{-- <p class="text-muted mt-2 fs-13"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> --}}
                                {{-- <div class="mt-2">
                                <a href="profile.html" class="btn btn-light" target="_blank">View profile</a>
                            </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="card custom-card text-center team-card ">
                            <div class="card-body p-5">
                                <span class="avatar avatar-xxl avatar-rounded mb-3 team-avatar">
                                    <img src="/assets/images/images/faces/12.jpg" alt="">
                                </span>
                                <p class="fw-semibold fs-17 mb-0 text-default">NKONDO Daniel</p>
                                <span class="text-muted fs-14 text-primary fw-semibold">Manager</span>
                                {{-- <p class="text-muted mt-2 fs-13"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> --}}
                                {{-- <div class="mt-2">
                                <a href="profile.html" class="btn btn-light" target="_blank">View profile</a>
                            </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="card custom-card text-center team-card ">
                            <div class="card-body p-5">
                                <span class="avatar avatar-xxl avatar-rounded mb-3 team-avatar">
                                    <img src="/assets/images/images/faces/5.jpg" alt="">
                                </span>
                                <p class="fw-semibold fs-17 mb-0 text-default">SIMON Ulrich</p>
                                <span class="text-muted fs-14 text-primary fw-semibold">Develloppeur FULL-STACK</span>
                                {{-- <p class="text-muted mt-2 fs-13"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> --}}
                                {{-- <div class="mt-2">
                                <a href="profile.html" class="btn btn-light" target="_blank">View profile</a>
                            </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="card custom-card text-center team-card ">
                            <div class="card-body p-5">
                                <span class="avatar avatar-xxl avatar-rounded mb-3 team-avatar">
                                    <img src="/assets/images/images/faces/1.jpg" alt="">
                                </span>
                                <p class="fw-semibold fs-17 mb-0 text-default">BAKAM R. Corine</p>
                                <span class="text-muted fs-14 text-primary fw-semibold">Devellopeur WEB</span>
                                {{-- <p class="text-muted mt-2 fs-13"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> --}}
                                {{-- <div class="mt-2">
                                <a href="profile.html" class="btn btn-light" target="_blank">View profile</a>
                            </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="mt-5">
                <button class="btn btn-primary">View All</button>
            </div> --}}
            </div>
        </section>
        <!-- End:: Section-7 -->



        <!-- Start:: Section-10 -->
        <section class="section" id="contact">
            <div class="container text-center">
                <p class="fs-12 fw-semibold text-success mb-1"><span class="landing-section-heading">CONTACTEZ-NOUS</span>
                </p>
                <h3 class="fw-semibold mb-2">Have any questions ? We would love to hear from you.</h3>
                <div class="row justify-content-center">
                    <div class="col-xl-9">
                        <p class="text-muted fs-15 mb-5 fw-normal">You can contact us anytime regarding any queries or
                            deals,dont hesitate to clear your doubts before trying our product.</p>
                    </div>
                </div>
                <div class="row text-start">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="card custom-card border shadow-none">
                            <div class="card-body p-0">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d30444.274596168965!2d78.54114692513858!3d17.48198883339408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d17.4886524!2d78.5495041!4m5!1s0x3bcb9c7ec139a15d%3A0x326d1c90786b2ab6!2sspruko%20technologies!3m2!1d17.474805099999998!2d78.570258!5e0!3m2!1sen!2sin!4v1670225507254!5m2!1sen!2sin"
                                    height="365" style="border:0;width:100%" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="card custom-card  overflow-hidden section-bg border overflow-hidden shadow-none">
                            <div class="card-body">
                                <div class="row gy-3 mt-2 px-3">
                                    <div class="col-xl-6">
                                        <div class="row gy-3">
                                            <div class="col-xl-12">
                                                <label for="contact-address-name" class="form-label ">Nom & Prenom
                                                    :</label>
                                                <input type="text" class="form-control " id="contact-address-name"
                                                    placeholder="Entrer votre nom et prenom">
                                            </div>
                                            <div class="col-xl-12">
                                                <label for="contact-address-phone" class="form-label "> No de Telephone
                                                    :</label>
                                                <input type="text" class="form-control " id="contact-address-phone"
                                                    placeholder="Enter votre No de telephone">
                                            </div>
                                            <div class="col-xl-12">
                                                <label for="contact-address-address" class="form-label ">Addresse
                                                    :</label>
                                                <textarea class="form-control " id="contact-address-address" rows="1"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <label for="contact-address-message" class="form-label ">Message :</label>
                                        <textarea class="form-control " id="contact-address-message" rows="8"></textarea>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="d-flex  mt-4 ">
                                            <div class="">
                                                <div class="btn-list">
                                                    <button class="btn btn-icon btn-primary-light btn-wave">
                                                        <i class="ri-facebook-line fw-bold"></i>
                                                    </button>
                                                    <button class="btn btn-icon btn-primary-light btn-wave">
                                                        <i class="ri-twitter-x-line fw-bold"></i>
                                                    </button>
                                                    <button class="btn btn-icon btn-primary-light btn-wave">
                                                        <i class="ri-instagram-line fw-bold"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="ms-auto">
                                                <button class="btn btn-primary  btn-wave">Envoyer votre Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-lg-flex d-none">
                    <div class="btn-list d-lg-flex d-none mt-lg-2 mt-xl-0 mt-0"> 
                         <a href={{route('loginworker')}} class="btn btn-wave btn-primary">
                            Espace WORKER
                        </a>
                        {{-- <button class="btn btn-wave btn-icon btn-light switcher-icon" data-bs-toggle="offcanvas" data-bs-target="#switcher-canvas">
                            <i class="ri-settings-3-line"></i>
                        </button> --}}
                    </div> 
                </div>
            </div>
        </section>
        <!-- End:: Section-10 -->


        {{-- <div class="text-center landing-main-footer py-3">
        <span class="text-muted fs-15"> Copyright © <span id="year"></span> <a
            href="javascript:void(0);" class="text-primary fw-semibold"><u>ynex</u></a>.
        Designed with <span class="fa fa-heart text-danger"></span> by <a href="javascript:void(0);" class="text-primary fw-semibold"><u>
        Spruko</u>
        </a> All
        rights
        reserved
        </span>
    </div> --}}
        {{-- </div> --}}
        <!-- End::app-content -->
    </div>
@endsection
