<div class="col-lg-3">
    <div class="sidebar-menu-wrap">
        <div class="sidemenu-wrap d-flex justify-content-between align-items-center">
            <h3>Pify Sidebar Menu</h3>
            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                <i class="ri-menu-line"></i>
            </button>
        </div>
          
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menu</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="left-sidebar">
                    <nav class="sidebar-nav" data-simplebar>
                        <ul id="sidebar-menu" class="sidebar-menu">
                            <li>
                                <a href="{{route('menu')}}" class="box-style aside">
                                    <span class="menu-title">
                                        <i class="ri-home-8-line"></i>
                                        Home
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="has-arrow box-style aside">
                                    <i class="ri-question-line"></i>
                                    <span class="menu-title">
                                        Questions
                                    </span>
                                </a>
                                <ul class="sidemenu-nav-second-level">
                                    <li>
                                        <a href="{{route('questions')}}">
                                            <span class="menu-title">All questions</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('questions-details',['id'=>'QD'])}}">
                                            <span class="menu-title">Questions details</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="has-arrow box-style aside">
                                    <span class="menu-title">
                                        <i class="ri-links-line"></i>
                                        Communities
                                    </span>
                                </a>
                                <ul class="sidemenu-nav-second-level">
                                    <li>
                                        <a href="{{route('communities-follow')}}">
                                            <span class="menu-title">Communities Followed</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('communities')}}">
                                            <span class="menu-title">Communities Unfollowed</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            {{-- <li>
                                <a href="{{route('communities')}}" class="box-style aside">
                                    <span class="menu-title">
                                        <i class="ri-links-line"></i>
                                        Communities
                                    </span>
                                </a>
                            </li> --}}
                            <li>
                                <a href="#" class="has-arrow box-style aside">
                                    <i class="ri-question-answer-fill"></i>
                                    <span class="menu-title">
                                        Most answered
                                    </span>
                                </a>
                                <ul class="sidemenu-nav-second-level">
                                    <li>
                                        <a href="{{route('most-answered')}}">
                                            <span class="menu-title">Most answered</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('questions-details',['id'=>'MAD'])}}">
                                            <span class="menu-title">Most answered details</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{route('unanswered')}}" class="box-style aside">
                                    <span class="menu-title">
                                        <i class="ri-checkbox-circle-line"></i>
                                        Unanswered
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('most-visited')}}" class="box-style aside">
                                    <span class="menu-title">
                                        <i class="ri-eye-line"></i>
                                        Most visited 
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('polls')}}" class="box-style aside">
                                    <span class="menu-title">
                                        <i class="ri-bar-chart-fill"></i>
                                        Polls
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('faq')}}" class="box-style aside">
                                    <span class="menu-title">
                                        <i class="ri-hq-line"></i>
                                        FAQs
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="has-arrow box-style aside">
                                    <span class="menu-title">
                                        <i class="ri-group-2-line"></i>
                                        Groups
                                    </span>
                                </a>
                                <ul class="sidemenu-nav-second-level">
                                    <li>
                                        <a href="{{route('groups-join')}}">
                                            <span class="menu-title">Groups Followed</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('groups')}}">
                                            <span class="menu-title">Groups Unfollowed</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            {{-- <li>
                                <a href="education" class="box-style aside">
                                    <span class="menu-title">
                                        <i class="ri-book-line"></i>
                                        Education
                                    </span>
                                </a>
                            </li> --}}
                            {{-- <li>
                                <a href="technology.html" class="box-style aside">
                                    <span class="menu-title">
                                        <i class="ri-file-shield-2-line"></i>
                                        Technology
                                    </span>
                                </a>
                            </li> --}}
                            <li>
                                <a href="{{route('tags')}}" class="box-style aside">
                                    <span class="menu-title">
                                        <i class="ri-price-tag-line"></i>
                                        Tags
                                    </span>
                                </a>
                            </li>
                            {{-- <li>
                                <a href="{{route('badges')}}" class="box-style aside">
                                    <span class="menu-title">
                                        <i class="ri-award-line"></i>
                                        Badges
                                    </span>
                                </a>
                            </li> --}}

                            <li>
                                <a href="#" class="has-arrow box-style aside">
                                    <i class="ri-user-line"></i>
                                    <span class="menu-title">
                                        User
                                    </span>
                                </a>
                                <ul class="sidemenu-nav-second-level">
                                    <li>
                                        <a href="user.html">
                                            <span class="menu-title">User</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="user-profile.html">
                                            <span class="menu-title">User profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ask-questions.html">
                                            <span class="menu-title">Ask a questions</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>