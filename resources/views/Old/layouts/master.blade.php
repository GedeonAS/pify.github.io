<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

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
    <link rel="stylesheet" href="{{asset('richtexteditor/rte_theme_default.css')}}"/>
    <script type="text/javascript" src="{{asset('richtexteditor/rte.js')}}"></script>
    <script type="text/javascript" src="{{asset('richtexteditor/plugins/all_plugins.js')}}"></script>
    <script src="https://kit.fontawesome.com/7f8292fccf.js" crossorigin="anonymous"></script>  
    {{-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> --}}
    <script src="{{asset('tinymce/js/tinymce/tinymce.min.js')}}"></script>
    <script src="{{asset('tinymce/js/tinymce/tiny.min.js')}}"></script>
    <script src="{{asset('tinymce/js/tinymce/tinymce-jquery.min.js')}}"></script>
    <style>
        .carousel-wrap {
                 width: 1180px;
                 margin: auto;
                 position: relative;
             }
             .owl-carousel .owl-nav{
                 overflow: hidden;
                 height: 0px;
             }
 
             /* .owl-theme .owl-dots .owl-dot.active span, 
             .owl-theme .owl-dots .owl-dot:hover span {
                 background: #2caae1;
             } */
 
 
             .owl-carousel .item {
                 text-align: center;
             }
             .owl-carousel .nav-btn{
                 height: 47px;
                 position: absolute;
                 width: 26px;
                 cursor: pointer;
                 top: 41% !important;
             }
 
             .owl-carousel .owl-prev.disabled,
             .owl-carousel .owl-next.disabled{
                 pointer-events: none;
                 opacity: 0.2;
             }
 
             .owl-carousel .prev-slide{
                 /* background: black no-repeat scroll 0 0; */
                 padding-top: 15px;
                 left: -33px;
             }
             .owl-carousel .next-slide{
                 /* background-image: url(https://assets.pikiran-rakyat.com/crop/0x294:1080x958/x/photo/2021/03/20/1605315083.jpeg); */
                 padding-top: 15px;
                 right: -33px;
             }
             .owl-carousel .prev-slide:hover{
                 background-position: 0px -53px;
             }
             .owl-carousel .next-slide:hover{
                 background-position: -24px -53px;
             }
 
             span.img-text {
                 text-decoration: none;
                 outline: none;
                 transition: all 0.4s ease;
                 -webkit-transition: all 0.4s ease;
                 -moz-transition: all 0.4s ease;
                 -o-transition: all 0.4s ease;
                 cursor: pointer;
                 width: 100%;
                 font-size: 23px;
                 display: block;
                 text-transform: capitalize;
             }
             span.img-text:hover {
                 color: #2caae1;
             }
                 </style>

</head>
<body>

    {{-- Navbar --}}
    @include('layouts.navbar')

    {{-- Content --}}
    <div style="padding-top: 5%;">
        @yield('content')
    </div>

    {{-- Footer --}}
    <div>
        @include('layouts.footer')
    </div>

    <!-- Links of JS File -->
    <script src="{{asset('vue/vue.global.js') }}"></script>
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
    {{-- <script src="{{asset('template/pify/assets/js/font-awesome-5.js')}}"></script> --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


     {{-- bootstarp --}}
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
     {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> --}}

     <script>

        var editor1 = new RichTextEditor("#tiny", { editorResizeMode: "none" });

         $('.owl-carousel').owlCarousel({
         loop:true,
         margin: 10,
         nav: true,
         navText:["<div class='fa-solid fa-caret-left nav-btn prev-slide'></div>","<div class='fa-solid fa-caret-right nav-btn next-slide'></div>"],
         responsive: {
             0: {
                 items: 1
             },
             600: {
                 items: 3
             },
             1000: {
                 items: 5
             }
         }
     });
     </script>

    @stack('scripts')
</body>
</html>
