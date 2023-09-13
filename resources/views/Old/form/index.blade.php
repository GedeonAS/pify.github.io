<!doctype html>
<html lang="zxx">
    <head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Links Of CSS File -->
        {{-- <link rel="stylesheet" href="{{asset('template/pify/assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('template/pify/assets/css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{asset('template/pify/assets/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('template/pify/assets/css/flaticon.css')}}">
        <link rel="stylesheet" href="{{asset('template/pify/assets/css/remixicon.css')}}">
        <link rel="stylesheet" href="{{asset('template/pify/assets/css/meanmenu.min.css')}}">
        <link rel="stylesheet" href="{{asset('template/pify/assets/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('template/pify/assets/css/metismenu.min.css')}}">
        <link rel="stylesheet" href="{{asset('template/pify/assets/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('template/pify/assets/css/editor.css')}}">
        <link rel="stylesheet" href="{{asset('template/pify/assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('template/pify/assets/css/responsive.css')}}">
        <link rel="stylesheet" href="{{asset('template/pify/assets/css/responsive.css.map')}}">
        <link rel="stylesheet" href="{{asset('template/pify/assets/css/responsive.scss')}}">
        <link rel="stylesheet" href="{{asset('template/pify/assets/css/jquerysctipttop.css')}}">
        <link rel="stylesheet" href="{{asset('template/pify/assets/css/style.css.map')}}">
        <link rel="stylesheet" href="{{asset('template/pify/assets/css/style.scss')}}">   --}}
        {{-- <script src="https://kit.fontawesome.com/7f8292fccf.js" crossorigin="anonymous"></script> --}}
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="{{asset('tinymce/js/tinymce/tinymce.min.js')}}"></script>
        <script src="{{asset('tinymce/js/tinymce/tiny.min.js')}}"></script>
        <script src="{{asset('tinymce/js/tinymce/tinymce-jquery.min.js')}}"></script>
		
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="assets/images/favicon.png">
		<!-- Title -->
		<title>Pify - Social Questions & Answers HTML Template</title>
    </head>

    <body>
        <div class="container mt-5">
            <div>
                <textarea id="tiny">&lt;p&gt;Encoded HTML content&lt;/p&gt;</textarea>
            </div>
        </div>

        

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
        <script>
            $('textarea#tiny').tinymce({
              height: 500,
              menubar: false,
              plugins: [
                'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
                'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
                'insertdatetime', 'media', 'table', 'help', 'wordcount'
                ],
                toolbar: 'undo redo | blocks | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
                content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
            });
          </script>

        <!-- Links of JS File -->
        {{-- <script src="{{asset('template/pify/assets/js/jquery.min.js')}}"></script>
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
        <script src="{{asset('template/pify/assets/js/custom.js')}}"></script> --}}
    </body>
</html>