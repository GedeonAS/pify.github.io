<!-- Start Navbar Area --> 
<style>
    .llp{
        padding: 10px 1px !important;
        margin-right: -10px; 
    }
    .pee{
        margin-right: 8px !important;
        /* margin-right: -10px;  */
    }
    .fs_my{
        font-size: 92%;
    }
    .p_nav{
        padding-top: 8px;
        padding-bottom: 8px;
    }
    .ask_ks{
        color: #0d6efd;
        border-color: #0d6efd;
    }
</style>
<nav class="navbar-area w-100 p_nav" style="z-index: 1000">
    <div class="mobile-responsive-nav">
        <div class="container">
            <div class="mobile-responsive-menu">
                <div class="logo">
                    <a href="{{route('dashboard')}}">
                        <img src="{{asset('assets/images/logo.png')}}" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="desktop-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand ms-2" href="{{route('dashboard')}}">
                    <img width="80%" height="auto" src="{{asset('template/pify/assets/images/logo.png')}}" alt="logo">
                </a>

                <div class="others-options d-flex w-100 justify-content-between align-items-center">
                    @auth
                    <ul>
                        <li>
                            <div class="search-box">
                                <input id="searchbar" type="text" name="Search" placeholder="Search for..." class="form-control container-fluid" width="100%">
                        
                                <button type="button" class="search-btn">
                                    <i class="ri-search-line"></i>
                                </button>
                            </div>
                        </li>
                    </ul>
                    <ul class="me-3">
                        <li class="me-4">
                            <a href="#" class="ask-btn" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
                                Ajukan Pertanyaan
                            </a>
                        </li>
                        {{-- <li class="mx-3">
                            <a href="#">
                                <i class="fa-solid fa-bell fs-5"></i>
                            </a>
                                </li> --}}
                        <li>
                            <div class="dropdown">
                                <a href="#" class="btn btn-light btn-sm dropdown-toggle dropdown-toggle-split" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span style="font-size: 110%">{{Auth::user()->name}}</span>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li>
                                        <a class="dropdown-item" href="{{route('dashboard')}}">
                                            <i class="fa-solid fa-home fs-5 me-2"></i>
                                            Dashboard
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{route('profile')}}">
                                            <i class="fa-solid fa-user fs-5 me-2"></i>
                                            Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#" onclick="event.preventDefault(); $('#logout').submit();">
                                            <i class="fa-solid fa-right-from-bracket fs-5 me-2"></i>
                                            Logout
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    @else
                    <div class="ms-6 others-options d-flex w-100 justify-content-end">
                        {{-- <ul class="me-3">
                            <li class="mx-3">
                                <a href="#" class="masuk-btn">
                                    MASUK
                                </a>
                            </li>
                            <li>
                                <a href="#" class="daftar-btn">
                                    DAFTAR
                                </a>
                                <li>
                                    <a href="#" class="ask-btn">
                                        AJUKAN PERTANYAAN
                                    </a>
                                </li>
                            </li>
                                </ul> --}}
                        <ul class="d-flex justify-content-center">
                            <div class="mx-3 d-flex ">
                                <a href="{{route('login')}}" class="ask-btn fs_my px-3">
                                    MASUK
                                </a>
                                <a href="{{route('register')}}" class="ask-btn fs_my pee">
                                    DAFTAR
                                </a>
                                <a href="{{route('login')}}" class="masuk-btn ask_ks py-2 fs_my px-3">
                                    AJUKAN PERTANYAAN
                                </a>
                            </div>
                            <div>
                            </div>
                        </ul>
                    </div>
                    @endauth
                </div>
                {{-- <div class="others-options">
                    <ul>
                        <li>
                            <a href="#" class="ask-btn">
                                Ajukan Pertanyaan
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa-solid fa-bell"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="template/pify/assets/images/user/user-1.jpg" alt="Image">
                            </a>
                        </li>
                    </ul>
                            </div> --}}
            </nav>
        </div>
    </div>

    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>
            
            <div class="container">
                <div class="option-inner">
                    <div class="others-options justify-content-center d-flex align-items-center">
                        <ul>
                            <li>
                                <form class="search-box">
                                    <input type="text" name="Search" placeholder="Search for..." class="form-control">
                            
                                    <button type="submit" class="search-btn">
                                        <i class="ri-search-line"></i>
                                    </button>
                                </form>
                            </li>
                            <li>
                                <a href="log-in.html" data-bs-toggle="modal" data-bs-target="#exampleModal-3" class="active">
                                    Log in	
                                </a>
                            </li>
                            <li>
                                <a href="sign-up.html" data-bs-toggle="modal" data-bs-target="#exampleModal-4">
                                    Sign up
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<form style="display:none;" id="logout" action="{{route('logout')}}" method="post">
    {{ csrf_field() }}
</form>
{{-- <nav class="navbar-area">
    <div class="mobile-responsive-nav">
        <div class="container">
            <div class="mobile-responsive-menu">
                <div class="logo">
                    <a href="index.html">
                        <img src="assets/images/logo.png" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="desktop-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index.html">
                    <img src="assets/images/logo.png" alt="logo">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a href="index.html" class="nav-link active">
                                Home 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="about.html" class="nav-link">
                                About Us
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">
                                Blog            
                            </a>

                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="blog.html" class="nav-link">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a href="blog-details.html" class="nav-link">Blog Details</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="contact-us.html" class="nav-link">Contact Us</a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">
                                Pages 
                            </a>

                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="activity.html" class="nav-link">Activity</a>
                                </li>
                                <li class="nav-item">
                                    <a href="referrals.html" class="nav-link">Referrals</a>
                                </li>
                                <li class="nav-item">
                                    <a href="privacy-policy.html" class="nav-link">Privacy Policy</a>
                                </li>
                                <li class="nav-item">
                                    <a href="terms-conditions.html" class="nav-link">Terms & Conditions</a>
                                </li>
                                <li class="nav-item">
                                    <a href="coming-soon.html" class="nav-link">Coming Soon</a>
                                </li>
                                <li class="nav-item">
                                    <a href="404.html" class="nav-link">404 Page</a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <div class="others-options">
                        <ul>
                            <li>
                                <form class="search-box">
                                    <input type="text" name="Search" placeholder="Search for..." class="form-control">
                            
                                    <button type="submit" class="search-btn">
                                        <i class="ri-search-line"></i>
                                    </button>
                                </form>
                            </li>
                            <li>
                                <a href="log-in.html" data-bs-toggle="modal" data-bs-target="#exampleModal" class="active">
                                    Log in	
                                </a>
                            </li>
                            <li>
                                <a href="sign-up.html" data-bs-toggle="modal" data-bs-target="#exampleModal-2">
                                    Sign up
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>
            
            <div class="container">
                <div class="option-inner">
                    <div class="others-options justify-content-center d-flex align-items-center">
                        <ul>
                            <li>
                                <form class="search-box">
                                    <input type="text" name="Search" placeholder="Search for..." class="form-control">
                            
                                    <button type="submit" class="search-btn">
                                        <i class="ri-search-line"></i>
                                    </button>
                                </form>
                            </li>
                            <li>
                                <a href="log-in.html" data-bs-toggle="modal" data-bs-target="#exampleModal-3" class="active">
                                    Log in	
                                </a>
                            </li>
                            <li>
                                <a href="sign-up.html" data-bs-toggle="modal" data-bs-target="#exampleModal-4">
                                    Sign up
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav> --}}
<!-- End Navbar Area -->
