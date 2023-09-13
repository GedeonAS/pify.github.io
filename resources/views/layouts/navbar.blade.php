
<div class="navbar-area">
    <div class="mobile-responsive-nav">
        <div class="container">
            <div class="mobile-responsive-menu">
                <div class="logo">
                    <a href="index.html">
                        <img src="{{asset('pify/assets/images/logo.png')}}" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="desktop-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index.html">
                    <img src="{{asset('pify/assets/images/logo.png')}}" alt="logo">
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

                            @auth
                                <li>
                                    <a href="faq.html" class="user-noti">
                                        <i class="ri-question-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown">
                                        <button type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" class="user-notif">
                                            <i class="ri-notification-3-fill"></i>
                                            <span>3</span>
                                        </button>
                                        <ul class="dropdown-menu notif" aria-labelledby="dropdownMenuButton1">
                                            <li>
                                                <a href="user-profile.html">
                                                    <i class="ri-mail-line"></i>
                                                    Check your mail
                                                </a>
                                                <p>Lorem, ipsum dolor sit amet</p>
                                            </li>
                                            <li>
                                                <a href="user-profile.html">
                                                    <i class="ri-skype-line"></i>
                                                    Check your skype
                                                </a>
                                                <p>Lorem, ipsum dolor sit amet</p>
                                            </li>
                                            <li>
                                                <a href="user-profile.html">
                                                    <i class="ri-refresh-line"></i>
                                                    Update your profile
                                                </a>
                                                <p>Lorem, ipsum dolor sit amet</p>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown">
                                        <button type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="assets/images/user/user-48.jpg" alt="Image">
                                            <span href="#">{{ Auth::user()->name }}</span>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                            <li>
                                                <a href="user-profile.html">
                                                    <i class="ri-user-line"></i>
                                                    User profile
                                                </a>
                                            </li>
                                            <li>
                                                <a href="edit-profile.html">
                                                    <i class="ri-settings-2-line"></i>
                                                    Setting
                                                </a>
                                            </li>
                                            <li>
                                                <a href="activity.html">
                                                    <i class="ri-lightbulb-line"></i>
                                                    Activity
                                                </a>
                                            </li>
                                            <li>
                                                <a href="user-groups.html">
                                                    <i class="ri-group-line"></i>
                                                    Group
                                                </a>
                                            </li>
                                            <li>
                                                <a href="user-ask-questions.html">
                                                    <i class="ri-questionnaire-line"></i>
                                                    Ask questions
                                                </a>
                                            </li>
                                            <li>
                                                <a href="best-answered.html">
                                                    <i class="ri-question-answer-line"></i>
                                                    Best Answers
                                                </a>
                                            </li>
                                            <li>
                                                <a href="referrals.html">
                                                    <i class="ri-restart-line"></i>
                                                    Referrals
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" onclick="event.preventDefault(); $('#logout').submit();">
                                                    <i class="ri-logout-box-r-line"></i>
                                                    Log out
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            @else                        
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
                            @endauth

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
                        @auth
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
                                    <a href="faq.html" class="user-noti">
                                        <i class="ri-question-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown">
                                        <button type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false" class="user-notif">
                                            <i class="ri-notification-3-fill"></i>
                                            <span>3</span>
                                        </button>
                                        <ul class="dropdown-menu notif" aria-labelledby="dropdownMenuButton3">
                                            <li>
                                                <a href="user-profile.html">
                                                    <i class="ri-mail-line"></i>
                                                    Check your mail
                                                </a>
                                                <p>Lorem, ipsum dolor sit amet</p>
                                            </li>
                                            <li>
                                                <a href="user-profile.html">
                                                    <i class="ri-skype-line"></i>
                                                    Check your skype
                                                </a>
                                                <p>Lorem, ipsum dolor sit amet</p>
                                            </li>
                                            <li>
                                                <a href="user-profile.html">
                                                    <i class="ri-refresh-line"></i>
                                                    Update your profile
                                                </a>
                                                <p>Lorem, ipsum dolor sit amet</p>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown">
                                        <button type="button" id="dropdownMenuButton4" data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="assets/images/user/user-48.jpg" alt="Image">
                                            <span>Rosemary</span>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                                            <li>
                                                <a href="user-profile.html">
                                                    <i class="ri-user-line"></i>
                                                    User profile
                                                </a>
                                            </li>
                                            <li>
                                                <a href="edit-profile.html">
                                                    <i class="ri-settings-2-line"></i>
                                                    Setting
                                                </a>
                                            </li>
                                            <li>
                                                <a href="activity.html">
                                                    <i class="ri-lightbulb-line"></i>
                                                    Activity
                                                </a>
                                            </li>
                                            <li>
                                                <a href="user-groups.html">
                                                    <i class="ri-group-line"></i>
                                                    Group
                                                </a>
                                            </li>
                                            <li>
                                                <a href="user-ask-questions.html">
                                                    <i class="ri-questionnaire-line"></i>
                                                    Ask questions
                                                </a>
                                            </li>
                                            <li>
                                                <a href="best-answered.html">
                                                    <i class="ri-question-answer-line"></i>
                                                    Best Answers
                                                </a>
                                            </li>
                                            <li>
                                                <a href="referrals.html">
                                                    <i class="ri-restart-line"></i>
                                                    Referrals
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" onclick="event.preventDefault(); $('#logout').submit();">
                                                    <i class="ri-logout-box-r-line"></i>
                                                    Log out
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        @else
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
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal-3" class="active">
                                        Log in	
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal-4">
                                        Sign up
                                    </a>
                                </li>
                            </ul>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('auth.login')
@include('auth.register')

<form style="display:none;" id="logout" action="{{route('logout')}}" method="post">
    {{ csrf_field() }}
</form>