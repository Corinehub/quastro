<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-vertical-style="overlay" data-theme-mode="light"
    data-header-styles="light" data-menu-styles="light" data-toggled="close">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ 'QUASTROM DAO - ' }} @yield('page_title') </title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- Favicon -->
    <link rel="icon" href="../assets/images/images/brand-logos/favicon.ico" type="image/x-icon">

    <!-- Main Theme Js -->
    <script src="../assets/js/authentication-main.js"></script>

    <!-- Bootstrap Css -->
    <link id="style" href="../assets/libs/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Style Css -->
    <link href="../assets/css/styles.min.css" rel="stylesheet">

    <!-- Icons Css -->


    <link href="../assets/css/icons.css" rel="stylesheet">

    <link rel="stylesheet" href="../assets/libs/libs/swiper/swiper-bundle.min.css">
</head>

<body class="bg-white">


    <div class="row authentication mx-0">

        {{-- <div class="col-xxl-7 col-xl-7 col-lg-12"> --}}
        <div>
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-xxl-6 col-xl-7 col-lg-7 col-md-7 col-sm-8 col-12">
                    <div class="p-5">
                        <div class="mb-3">
                            <a href="index.html">
                                <img src="/assets/images/images/LOGO_QUASTROM/PNG/Fichier_1.png" alt="logo"
                                    class="desktop-logo">
                                {{-- <img src="/assets/images/images/LOGO_QUASTROM/PNG/Fichier_1.png" alt="logo"
                                    class="desktop-white"> --}}
                            </a>
                        </div>
                        <p class="h5 fw-semibold mb-2">Enregistrement</p>
                        <p class="mb-3 text-muted op-7 fw-normal">Welcome & Join us by creating a free account !</p>


                        <form class="row" method="POST" action="{{ route('auth.store', $daoResult->id) }}">

                            @csrf

                            <div class="row gy-3">

                                <div class="col-xl-6">
                                    <label class="form-label text-default "> {{ __('Nom du Prestataire') }}</label>
                                    <input type="text" name="name"
                                        class="form-control   @error('name') is-invalid @enderror"
                                        value="{{ old('name') }}" placeholder="nom du prestataire">

                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>


                                <div class="col-xl-6">
                                    <label class="form-label text-default "> {{ __('Adresse') }}</label>
                                    <input type="text" name="address"
                                        class="form-control   @error('address') is-invalid @enderror"
                                        value="{{ old('address') }}" placeholder="adresse du prestataire">

                                    @error('address')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>

                                <div class="col-xl-12">
                                    <label class="form-label text-default "> {{ __('Téléphone') }}</label>
                                    <input type="tel" name="phone"
                                        class="form-control   @error('phone') is-invalid @enderror"
                                        value="{{ old('phone') }}" placeholder="Numero de telephone du prestataire">

                                    @error('phone')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>
                            </div>

                            <hr class="my-3">

                            <div class="row gy-3">

                                <div class="col-xl-12">
                                    <label class="form-label text-default "> {{ __('Nom d\'utilisateur') }}</label>
                                    <input type="text" name="username"
                                        class="form-control   @error('username') is-invalid @enderror"
                                        value="{{ old('username') }}" placeholder="user name">

                                    @error('username')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>


                                <div class="col-xl-12 mt-0">
                                    <label class="form-label text-default">{{ __('Email') }}</label>
                                    <input type="text" name="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        value="{{ old('email') }}" placeholder="email">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-xl-12">
                                    <label for="signup-password"
                                        class="form-label text-default">{{ __('Mot de passe') }}</label>
                                    <div class="input-group">
                                        <input type="password" name="password" id="sign"
                                            class="form-control @error('password') is-invalid @enderror"
                                            value="{{ old('password') }}" placeholder="password">
                                        <button class="btn btn-light" onclick="createpassword('sign',this)"
                                            type="button" id="button-addon2"><i
                                                class="ri-eye-off-line align-middle"></i></button>
                                        @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-12 mb-3">
                                    <label for="signup-confirmpassword" class="form-label text-default"> Confirmer
                                        votre
                                        mot de pase
                                    </label>
                                    <div class="input-group">
                                        <input type="password" name="password_confirmation" id="signjj"
                                            class="form-control @error('password_confirmation') is-invalid @enderror"
                                            value="{{ old('password_confirmation') }}"
                                            placeholder="confirmer votre mot de passe">
                                        <button class="btn btn-light"onclick="createpassword('signjj',this)"
                                            type="button" id="button-addon21"><i
                                                class="ri-eye-off-line align-middle"></i></button>
                                        @error('password_confirmation')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-check mt-3">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="defaultCheck1">
                                        <label class="form-check-label text-muted fw-normal" for="defaultCheck1">
                                            By creating a account you agree to our <a href="terms_conditions.html"
                                                class="text-success"><u>Terms & Conditions</u></a> and <a
                                                class="text-success"><u>Privacy Policy</u></a>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xl-12 d-grid mt-2">
                                    <button type="submit" class="btn btn-lg btn-primary">Créer un compte</button>
                                </div>
                            </div>
                            <div class="text-center">
                                <p class="fs-12 text-muted mt-4">Vous avez déja un compte? <a
                                        href="{{ route('login.dao', $daoResult->id) }}"
                                        class="text-primary">Connexion</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="col-xxl-5 col-xl-5 col-lg-5 d-xl-block d-none px-0">
            <div class="authentication-cover">
                <div class="aunthentication-cover-content rounded">
                    <div class="swiper keyboard-control">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="text-fixed-white text-center p-5 d-flex align-items-center justify-content-center">
                                    <div>
                                        <div class="mb-5">
                                            <img src="../assets/images/authentication/2.png" class="authentication-image" alt="">
                                        </div>
                                        <h6 class="fw-semibold text-fixed-white">Sign Up</h6>
                                        <p class="fw-normal fs-14 op-7"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa eligendi expedita aliquam quaerat nulla voluptas facilis. Porro rem voluptates possimus, ad, autem quae culpa architecto, quam labore blanditiis at ratione.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="text-fixed-white text-center p-5 d-flex align-items-center justify-content-center">
                                    <div>
                                        <div class="mb-5">
                                            <img src="../assets/images/authentication/3.png" class="authentication-image" alt="">
                                        </div>
                                        <h6 class="fw-semibold text-fixed-white">Sign Up</h6>
                                        <p class="fw-normal fs-14 op-7"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa eligendi expedita aliquam quaerat nulla voluptas facilis. Porro rem voluptates possimus, ad, autem quae culpa architecto, quam labore blanditiis at ratione.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="text-fixed-white text-center p-5 d-flex align-items-center justify-content-center">
                                    <div>
                                        <div class="mb-5">
                                            <img src="../assets/images/authentication/2.png" class="authentication-image" alt="">
                                        </div>
                                        <h6 class="fw-semibold text-fixed-white">Sign Up</h6>
                                        <p class="fw-normal fs-14 op-7"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa eligendi expedita aliquam quaerat nulla voluptas facilis. Porro rem voluptates possimus, ad, autem quae culpa architecto, quam labore blanditiis at ratione.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div> --}}



        <!-- Bootstrap JS -->
        <script src="../assets/libs/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Swiper JS -->
        <script src="../assets/libs/libs/swiper/swiper-bundle.min.js"></script>

        <!-- Internal Sing-Up JS -->
        <script src="../assets/js/authentication.js"></script>

        <!-- Show Password JS -->
        <script src="../assets/js/show-password.js"></script>
    </div>
</body>

</html>
{{-- </div>
   @endsection --}}
