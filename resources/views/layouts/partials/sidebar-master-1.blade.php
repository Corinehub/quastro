<aside class="app-sidebar sticky" id="sidebar">

    <div class="container-xl">
        <!-- Start::main-sidebar -->
        <div class="main-sidebar">

            <!-- Start::nav -->
            <nav class="main-menu-container nav nav-pills sub-open">
                <div class="landing-logo-container">
                    <div class="horizontal-logo">
                        <a href="home" class="header-logo">
                            <img src="/assets/images/images/LOGO_QUASTROM/PNG/Fichier_1.png" alt="logo" class="desktop-logo">
                            <img src="/assets/images/images/LOGO_QUASTROM/PNG/Fichier_1.png" alt="logo" class="desktop-white">
                        </a>
                    </div>
                </div>
                <div class="slide-left" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path> </svg></div>
                <ul class="main-menu">
                    <!-- Start::slide -->
                    <li class="slide">
                        <a class="side-menu__item" href="#home">
                            <span class="side-menu__label">Acceuil</span>
                        </a>
                    </li>
                    <!-- End::slide -->
                    <!-- Start::slide -->
                    {{-- <li class="slide">
                        <a href="#about" class="side-menu__item">
                            <span class="side-menu__label">About</span>
                        </a>
                    </li> --}}
                    <!-- End::slide -->
                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <span class="side-menu__label me-2">DAO</span>
                            <i class="fe fe-chevron-right side-menu__angle op-8"></i>
                        </a>
                        <ul class="slide-menu child1">
                           
                            <li class="slide">
                                <a href="#our-mission" class="side-menu__item">Liste DAO</a>
                            </li>
                            
                        </ul>
                    </li>
                    <!-- End::slide -->
                    
                    <!-- Start::slide -->
                    <li class="slide">
                        <a href="#team" class="side-menu__item">
                            <span class="side-menu__label">Equipe</span>
                        </a>
                    </li>
                    <!-- End::slide -->
                    
                   
                    <!-- Start::slide -->
                    <li class="slide">
                        <a href="#contact" class="side-menu__item">
                            <span class="side-menu__label">Contact</span>
                        </a>
                    </li>
                    <!-- End::slide -->

                </ul>
                <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path> </svg></div>
                
            <div></div>
                
                <!-- Start::header-element -->
            {{-- <div class="header-element header-search"> --}}
                <!-- Start::header-link -->
                {{-- <a href="javascript:void(0);" class="header-link" data-bs-toggle="modal" data-bs-target="#searchModal">
                    <i class="bx bx-search-alt-2 header-link-icon"></i>
                </a> --}}
                <!-- End::header-link -->
            {{-- </div> --}}
            <!-- End::header-element -->
           

            <!-- Start::header-element -->
            <div class="header-element country-selector">
                <!-- Start::header-link -->
                <a href="javascript:void(0);" class="header-link" data-bs-toggle="modal" data-bs-target="#countryModal">
                    <img src="/assets/images/images/flags/us_flag.jpg" alt="img" class="rounded-circle header-link-icon">
                   <span class="fw-semibold mb-0 lh-1">EN</span>
                </a>
            </div>
            <!-- End::header-element -->

            <!-- Start::header-element -->
            <div class="header-element header-theme-mode">
                <!-- Start::header-link|layout-setting -->
                <a href="javascript:void(0);" class="header-link layout-setting">
                    <span class="light-layout">
                        <!-- Start::header-link-icon -->
                    <i class="bx bx-moon header-link-icon"></i>
                        <!-- End::header-link-icon -->
                    </span>
                    <span class="dark-layout">
                        <!-- Start::header-link-icon -->
                    <i class="bx bx-sun header-link-icon"></i>
                        <!-- End::header-link-icon -->
                    </span>
                </a>
                <!-- End::header-link|layout-setting -->
            </div>

            <div class="d-lg-flex d-none">
                <div class="btn-list d-lg-flex d-none mt-lg-2 mt-xl-0 mt-0"> 
                     <a href={{route('login.provider')}} class="btn btn-wave btn-primary">
                        CONNEXION
                    </a>
                    {{-- <button class="btn btn-wave btn-icon btn-light switcher-icon" data-bs-toggle="offcanvas" data-bs-target="#switcher-canvas">
                        <i class="ri-settings-3-line"></i>
                    </button> --}}
                </div> 
            </div>
            <!-- End::header-element -->
            </nav>
            <!-- End::nav -->

        </div>
        <!-- End::main-sidebar -->
    </div>

</aside>