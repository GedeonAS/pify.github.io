<div class="col-lg-4">
    <div class="right-siderbar">
        <div class="right-sidebar-common">
            <div class="card me-auto" style="width: 70%;">
                <div class="container card-body d-flex">
                    <div class="d-inline" >
                        <img src="{{ Avatar::create(Auth::user()->name)->setDimension(55)->setFontSize(15) }}"  alt="Image" class="me-3">
                    </div>
                    <div class="text-center py-2">
                        <h6 class="card-title fw-bold mb-0">{{Auth::user()->name}}</h6>
                        <span class="d-block lencana">{{Auth::user()->email}}</span>
                    </div>
                </div>
                <div class="container card-body d-flex" style="padding-top: 10px;">
                    <ul class="list-lencana">
                        <li>
                            <span class="lencana">
                                <i class="fa-solid fa-shield-halved"></i>
                                Bintang Briliant
                            </span>
                        </li>
                        <li>
                            <span class="lencana">
                                <i class="fa-solid fa-shield-halved"></i>
                                Gratitude Attitude
                            </span>
                        </li>
                        <li>
                            <a href="#" class="lencana">5+ lebih banyak</a>
                        </li>
                    </ul>
                </div>
                <div class="card-footer card-button">
                    <a href="{{route('profile')}}" class="d-flex align-items-center">
                        <p class="d-inline mb-0">Lihat Selengkapnya</p>
                        <i class="fa-solid fa-chevron-right d-inline" style="padding-left: 40%;"></i>
                    </a>
                </div>
            </div>
        </div>
    

        {{-- <div class="right-siderbar-common">
            <div class="answer-count">
                <ul class="d-flex flex-wrap">
                    <li>
                        <span>Questions</span>
                        <span class="count">435</span>
                    </li>
                    <li>
                        <span>Answers</span>
                        <span class="count">435</span>
                    </li>
                    <li>
                        <span>Best answers</span>
                        <span class="count">324</span>
                    </li>
                    <li>
                        <span>Users</span>
                        <span class="count">2K</span>
                    </li>
                    <li>
                        <span>Posts</span>
                        <span class="count">852</span>
                    </li>
                    <li>
                        <span>Comments</span>
                        <span class="count">57</span>
                    </li>
                </ul>
            </div>
        </div> --}}

        {{-- <div class="right-siderbar-common">
            <div id="top-user">
                <h3>
                    <i class="ri-discuss-line"></i>
                    Top members
                </h3>
                <div class="list-group list-group-flush">
                    <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="template/pify/assets/images/user/user-9.jpg" alt="Image">
                        <span>Yong Spears</span>
                        <span class="badge bg-primary rounded-pill">293</span>
                    </a>
                    <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="template/pify/assets/images/user/user-9.jpg" alt="Image">
                        <span>Denise Jones</span>
                        <span class="badge bg-primary rounded-pill">280</span>
                    </a>
                    <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="template/pify/assets/images/user/user-9.jpg" alt="Image">
                        <span>Dennis Rogers</span>
                        <span class="badge bg-primary rounded-pill">279</span>
                    </a>
                    <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="template/pify/assets/images/user/user-9.jpg" alt="Image">
                        <span>Naomi Barnett</span>
                        <span class="badge bg-primary rounded-pill">275</span>
                    </a>
                    <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="template/pify/assets/images/user/user-9.jpg" alt="Image">
                        <span>Mary Wenger</span>
                        <span class="badge bg-primary rounded-pill">270</span>
                    </a>
                    <div class="extra-top-user list-group list-group-flush collapse">
                        <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                            <img src="template/pify/assets/images/user/user-9.jpg" alt="Image">
                            <span>Asep</span>
                            <span class="badge bg-primary rounded-pill">261</span>
                        </a>
                        <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                            <img src="template/pify/assets/images/user/user-9.jpg" alt="Image">
                            <span>Doeng</span>
                            <span class="badge bg-primary rounded-pill">258</span>
                        </a>
                        <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                            <img src="template/pify/assets/images/user/user-9.jpg" alt="Image">
                            <span>Mega</span>
                            <span class="badge bg-primary rounded-pill">253</span>
                        </a>
                        <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                            <img src="template/pify/assets/images/user/user-9.jpg" alt="Image">
                            <span>Wati</span>
                            <span class="badge bg-primary rounded-pill">240</span>
                        </a>
                        <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                            <img src="template/pify/assets/images/user/user-9.jpg" alt="Image">
                            <span>Luhut</span>
                            <span class="badge bg-primary rounded-pill">231</span>
                        </a>
                    </div>
                </div>
                <div class="container py-3">
                    <button type="button" class="btn btn-sm d-flex justify-content-center" data-bs-toggle="collapse" data-bs-target="#top-user .extra-top-user, #top-user .toggle-btn">
                        <span class="toggle-btn collapse show">Tampilkan</span>
                        <span class="toggle-btn collapse">Sembunyikan</span>
                    </button>
                </div>
            </div>
        </div> --}}
    </div>
</div>