<div class="col-md-4">
    <div class="container d-flex">
        <div class="d-inline">
            <i class="fa-solid fa-circle-user" style="font-size: 80px;"></i>
        </div>
        <div class="pt-3 ms-4">
            <h5 class="fw-bold">{{Auth::user()->name}}</h5>
            <span class="d-block lencana">Ambisius</span>
        </div>
    </div>
    <div class="container" style="padding-top: 30px;">
        <div class="row row-cols-auto">
            <div class="col" style="border-right: 2px solid black;">
                <div class="text-center">
                    <p class="mb-0">Jawaban</p>
                    <span class="fs-4" style="font-weight: 600; font-size: 10px;">@{{ta}}</span>
                </div>
            </div>
            <div class="col" style="border-right: 2px solid black;">
                <div class="text-center">
                    <p class="mb-0">Pertanyaan</p>
                    <span class="fs-4" style="font-weight: 600; font-size: 10px;">@{{tq}}</span>
                </div>
            </div>
            <div class="col">
                <div class="text-center">
                    <p class="mb-0">Terima kasih</p>
                    <span class="fs-4" style="font-weight: 600; font-size: 10px;">56</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container card-body d-flex" style="padding-top: 40px;">
        <ul class="list-lencana">
        {{-- 
        
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
                <span class="lencana">
                    <i class="fa-solid fa-shield-halved"></i>
                    Answer Master
                </span>
            </li>
            <li>
                <span class="lencana">
                    <i class="fa-solid fa-shield-halved"></i>
                    B. Indonesia Knower
                </span>
            </li>
            <li>
                <span class="lencana">
                    <i class="fa-solid fa-shield-halved"></i>
                    Biologi knower
                </span>
            </li>
            <li>
                <span class="lencana">
                    <i class="fa-solid fa-shield-halved"></i>
                    PPKn Knower
                </span>
            </li>
            <li>
                <span class="lencana">
                    <i class="fa-solid fa-shield-halved"></i>
                    Akuntasnsi Student
                </span>
            </li>
            <li>
                <span class="lencana">
                    <i class="fa-solid fa-shield-halved"></i>
                    B. Arab Student
                </span>
            </li>
            <li>
                <span class="lencana">
                    <i class="fa-solid fa-shield-halved"></i>
                    Bahasa lain Student
                </span>
            </li>
            <li>
                <span class="lencana">
                    <i class="fa-solid fa-shield-halved"></i>
                    Brainliest Student
                </span>
            </li>
            <li>
                <span class="lencana">
                    <i class="fa-solid fa-shield-halved"></i>
                    Challenger
                </span>
            </li>
            <li>
                <span class="lencana">
                    <i class="fa-solid fa-shield-halved"></i>
                    Geography Student
                </span>
                <li>
                    <a href="#" class="lencana">5+ lebih banyak</a>
                </li> 
        --}}
            </li>
            <a href="{{route('edit.profile')}}" class="btn text-white" style="background-color: rgb(105, 105, 105); border-radius: 5px; margin-top: 20px;  width: 120%;">
                <i class="fa fa-pen"></i>
                Edit profile
            </a>
            <h6 style="font-weight: 700; padding-top: 50px;"> Keterangan </h6>
            <hr>
                <div style="font-size: 12px;">
                    <i class="fa-solid fa-graduation-cap"></i>
                        Tingkat sekolah : <b> Sekolah Menengah Atas</b>
                </div>
                {{-- 
                    <div style="font-size: 12px; padding-top: 10px;">
                    <i class="fa-solid fa-calendar-days"></i>
                        Bergabung : <b> 17 November 2021</b>
                    </div>
                    <div style="font-size: 12px; padding-top: 10px;">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                        Peringatan : <b> 1 </b> (hanya kamu yang dapat melihat)
                    </div> 
                --}}
        </ul>
    </div>
</div>