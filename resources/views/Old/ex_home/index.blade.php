@extends('layouts.master')


@section('content')


<link rel="stylesheet" href="css/docs.theme.min.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">

<style>
    .blue_bg{
        background-color: #00f7ff;
    }
    .m-my{
        margin-top: 9%;
        margin-bottom: -6%;
    }
    .my-bg{
        background-color: white;
    }
</style>
<!-- Start Banner Area -->
<div class="banner-area blue_bg">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="" style="padding-top:">
                    <h1 style="font-weight: 1000; font-size: 73px; padding-left: 20px;" >Dari bertanya jadi</h1>
                    <h1 style="font-weight: 1000; font-size: 73px; padding-left: 20px; padding-top: 20px;" >bisa</h1>
                    <p style="font-size: 16px; padding-left: 20px; padding-top: 25px;" >Brainly adalah tempat berbagi ilmu 350 juta siswa dan pakar edukasi, belajar bersama untuk menyelesaikan soal-soal yang paling rumit sekalipun.</p>
                    <div class="ms-3 m-my ">
                        <input type="text"  class="my-bg form-control rounded-pill py-5" style="padding-left: 7%;" class="font-size: 125%;"  id="exampleFormControlInput1" placeholder="Apa pertanyaanmu ?" text-size="20psx">
                        <button onclick="location.href = '/login'" style="position:absolute; left:43%; bottom: 0%; font-size: 35px; margin-bottom: 80px; background:none;"><i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i></button>
                        <div class="search--large">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 pe-0">
                <div class="banner-img">
                    <img src="https://ouch-cdn2.icons8.com/KbFaioMDLAFQADTQMG6Ty2ZcXBX3i9pTAmuu7KwbvgM/rs:fit:512:512/czM6Ly9pY29uczgu/b3VjaC1wcm9kLmFz/c2V0cy9wbmcvNDgv/YTBkN2RjMDItNzZl/Mi00YzBiLWJkYTYt/NWFkYWE2ODNhZmJj/LnBuZw.png" alt="Image">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Banner Area -->

{{-- carousel mata pelajaran --}}
<div class="carousel-wrap">
    <div class="owl-carousel" style="font-size: 20px; font-weight: 800; padding-top: 5%;  ">
        
        <div class="item">
            <i class="fa-solid fa-bars-progress text-black"></i>
            <a class="img-text text-black" style="text-decoration: none;" type="button" href="">Semua</a>
        </div>
  
        <div class="item">
            <i class="fa-solid fa-vial text-black"></i>
            <a class="img-text text-black" style="text-decoration: none;" type="button" href="">SBMPTN</a>
        </div>

        <div class="item">
            <i class="fa-solid fa-pencil text-black"></i>
            <a class="img-text text-black"style="text-decoration: none;"  type="button" href="">Ujian</a>
        </div>

        <div class="item">
            <i class="fa-solid fa-book-quran text-black"></i>
            <a class="img-text text-black" style="text-decoration: none;" type="button" href="">Agama Islam</a>
        </div>

        <div class="item">
            <i class="fa-solid fa-square-root-variable text-black"></i>
            <a class="img-text text-black" style="text-decoration: none;" type="button" href="">Matematika</a>
        </div>

        <div class="item">
            <i class="fa-solid fa-book text-black"></i>
            <a class="img-text text-black" style="text-decoration: none;" type="button" href="">B.Indonesia</a>
        </div>

        <div class="item">
            <i class="fa-solid fa-flask text-black"></i>
            <a class="img-text text-black" style="text-decoration: none;" type="button" href="">Kimia</a>
            </a>
        </div>

        <div class="item">
            <i class="fa-solid fa-landmark text-black"></i>
            <a class="img-text text-black" style="text-decoration: none;" type="button" href="">PPKN</a>
        </div>

        <div class="item">
            <i class="fa-solid fa-people-carry-box text-black"></i>
            <a class="img-text text-black" style="text-decoration: none;" type="button" href="">Ips</a>
        </div>

        <div class="item">
            <i class="fa-solid fa-leaf text-black"></i>
            <a class="img-text text-black" style="text-decoration: none;" type="button" href="">Ipa</a>
        </div>

        <div class="item">
            <i class="fa-solid fa-campground text-black"></i>
            <a class="img-text text-black" style="text-decoration: none;" type="button" href="">Sejarah</a>
        </div>

        <div class="item">
            <i class="fa-solid fa-book-journal-whills text-black"></i>
            <a class="img-text text-black" style="text-decoration: none;" type="button" href="">B.Inggris</a>
        </div>

        <div class="item">
            <i class="fa-solid fa-microchip text-black"></i>
            <a class="img-text text-black" style="text-decoration: none;" type="button" href="">IT</a>
        </div>

        <div class="item">
            <i class="fa-solid fa-basketball text-black"></i>
            <a class="img-text text-black" style="text-decoration: none;" type="button" href="">Penjaskes</a>
        </div>

        <div class="item">
            <i class="fa-solid fa-lock text-black"></i>
            <a class="img-text text-black" style="text-decoration: none;" type="button" href="">Wirausaha</a>
        </div>

    </div>
  </div>

{{-- end carousel mapel --}}


<!-- Daftar buku -->


<div class="team-area pt-100 pb-70">    
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="mb-2 text-white text-center" style="border-radius: 5px; width: 11%; font-weight: 700; background-color: #014a82;" height=" 56px;" padding=" 28px;" font-size=" 21px;" line-height=" 21px;" >TERBARU DI PIFY</div>    
            </div>
        </div>
    </div>
</div>

    <div class="container">
        <div class="section-title">
            <h2 style="font-weight: 900; font-size: 40px;">Lanjutkan belajarmu dengan Solusi Buku Sekolah</h2>
            <h6>Dapatkan jawaban lengkap dengan penjelasannya untuk soal-soal di buku sekolahmu, dijawab oleh pakar pendidikan.</h6>
        </div>

        <div class="row justify-content-center" style="font-weight: 700">
            <div class="col-xl-3 col-md-6">
                <div class="single-team-item">
                    <img src="https://bukusekolah.id/wp-content/uploads/2020/03/Kelas7_bahasa_indonesia_buku_siswa_smp_mts_kelas_vii_1938_Page_001-scaled.jpg" alt="Image">
                    <h3>Bahasa indonesia</h3>
                    <h6>Kelas VII</h6>
                    <ul class="d-flex justify-content align-items-center">
                        <li>
                            <a class="default-btn bg-primary" style="text-decoration: none;" href="">Pilih</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="single-team-item">
                    <img src="https://bukusekolah.id/wp-content/uploads/2020/03/Kelas7_buku_siswa_pendidikan_agama_hindu_dan_bp_smp_kelas_vii_1904_Page_001-scaled.jpg" alt="Image">
                    <h3>Sejarah</h3>
                    <h6>Kelas VII</h6>
                    <ul class="d-flex justify-content-between align-items-center">
                        <li>
                            <a class="default-btn bg-primary"style="text-decoration: none;"  href="">Pilih</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="single-team-item">
                    <img src="https://i1.rgstatic.net/publication/322132452_Buku_Siswa_Matematika_SMPMTs_Kelas_VII_Semester_1/links/5a46b4e4a6fdcce1971b74ac/largepreview.png" alt="Image">
                    <h3>Matematika</h3>
                    <h6>Kelas VII</h6>
                    <ul class="d-flex justify-content-between align-items-center">
                        <li>
                            <a class="default-btn bg-primary" style="text-decoration: none;" href="">Pilih</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="single-team-item">
                    <img src="https://a.cdn-myedisi.com/book/cover/bse-a_596f09f7e75d7203700660.jpg" alt="Image">
                    <h3>I.pengetahuan sosial</h3>
                    <h6>Kelas VII<h6>
                    <ul class="d-flex justify-content-between align-items-center">
                        <li>
                            <a class="default-btn bg-primary" style="text-decoration: none;" href="">Pilih</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

<div class="team-area pt-100 pb-70">    
    <div class="container" style="padding-bottom: 20px">
        <div class="d-flex justify-content-center">
                <a type="button" class="p-3 mb-3 bg-dark text-white text-center" 
                    style="border-radius: 40px; font-weight: 500; font-size: 20px; text-decoration: none;" 
                        height=" 56px;" padding=" 28px;" font-size=" 21px;" line-height=" 21px;" 
                            href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Temukan bukumu</a>
            </div>
        </div>
    </div>
</div>
            
<!-- Daftar buku -->

@endsection