<!doctype html>
<html lang="zxx">
    <head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Links Of CSS File -->
        <link rel="stylesheet" href="{{asset('template/pify/assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('template/pify/assets/css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{asset('template/pify/assets/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('template/pify/assets/css/flaticon.css')}}">
        <link rel="stylesheet" href="{{asset('template/pify/assets/css/remixicon.css')}}">
        <link rel="stylesheet" href="{{asset('template/pify/assets/css/meanmenu.min.css')}}">
        <link rel="stylesheet" href="{{asset('template/pify/assets/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('template/pify/assets/css/metismenu.min.css')}}">
        {{-- <link rel="stylesheet" href="{{asset('template/pify/assets/css/font-awesome.min.css')}}"> --}}
        <link rel="stylesheet" href="{{asset('template/pify/assets/css/editor.css')}}">
        <link rel="stylesheet" href="{{asset('template/pify/assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('template/pify/assets/css/responsive.css')}}">
        <link rel="stylesheet" href="{{asset('template/pify/assets/css/responsive.css.map')}}">
        <link rel="stylesheet" href="{{asset('template/pify/assets/css/responsive.scss')}}">
        <link rel="stylesheet" href="{{asset('template/pify/assets/css/jquerysctipttop.css')}}">
        <link rel="stylesheet" href="{{asset('template/pify/assets/css/style.css.map')}}">
        <link rel="stylesheet" href="{{asset('template/pify/assets/css/style.scss')}}">  
        <script src="https://kit.fontawesome.com/7f8292fccf.js" crossorigin="anonymous"></script>
		
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="assets/images/favicon.png">
		<!-- Title -->
		<title>Pify - Social Questions & Answers HTML Template</title>
    </head>

    <body>

		<!-- Start Navbar Area --> 
		<div class="navbar-area w-100">
			<div class="mobile-responsive-nav">
				<div class="container">
					<div class="mobile-responsive-menu">
						<div class="logo">
							<a href="index.html">
								<img src="{{asset('assets/images/logo.png')}}" alt="logo">
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="desktop-nav">
				<div class="container">
					<nav class="navbar navbar-expand-md navbar-light">
						<a class="navbar-brand" href="index.html">
							<img src="{{asset('template/pify/assets/images/logo.png')}}" alt="logo">
						</a>

                        <div class="others-options d-flex w-100 justify-content-between">
                            <ul>
                                <li>
                                    <form class="search-box">
                                        <input type="text" name="Search" placeholder="Search for..." class="form-control container-fluid" width="100%">
                                
                                        <button type="submit" class="search-btn">
                                            <i class="ri-search-line"></i>
                                        </button>
                                    </form>
                                </li>
                            </ul>
                            <ul class="me-3">
                                <li>
                                    <a href="#" class="ask-btn" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
                                        Ajukan Pertanyaan
                                    </a>
                                </li>
                                <li class="mx-4">
                                    <a href="#">
                                        <i class="fa-solid fa-bell fs-5"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{asset('template/pify/assets/images/user/user-1.jpg')}}" alt="Image" class="rounded-circle">
                                    </a>
                                </li>
                            </ul>
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
		</div>
		<!-- End Navbar Area -->
        

        {{-- Modal Ajukan Pertanyaan --}}

        <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalToggleLabel">Modal 1</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    Show a second modal and hide this one with the button below.
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Open second modal</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalToggleLabel2">Modal 2</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    Hide this modal and show the first with the button below.
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Back to first</button>
                    </div>
                </div>
            </div>
        </div> --}}

        {{-- End Modal Ajukan Pertanyaan --}}

        <!-- Links of JS File -->
        <script src="{{asset('template/pify/assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('template/pify/assets/js/jquery.js')}}"></script>
        <script src="{{asset('template/pify/assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('template/pify/assets/js/meanmenu.min.js')}}"></script>
        <script src="{{asset('template/pify/assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('template/pify/assets/js/form-validator.min.js')}}"></script>
        <script src="{{asset('template/pify/assets/js/contact-form-script.js')}}"></script>
        <script src="{{asset('template/pify/assets/js/ajaxchimp.min.js')}}"></script>
        <script src="{{asset('template/pify/assets/js/metismenu.js')}}"></script>
        <script src="{{asset('template/pify/assets/js/editor.js')}}"></script>
        <script src="{{asset('template/pify/assets/js/like-dislike.min.js')}}"></script>
        <script src="{{asset('template/pify/assets/js/custom.js')}}"></script>
    </body>
</html>