<div class="col-md-8 mb-5">
    <ul class="nav nav-tabs justify-content-center" style="border-bottom: 0px" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#jawaban" type="button" role="tab" aria-controls="home" aria-selected="true">Jawaban</button>
        </li>
        <li class="nav-item" role="presentation">
        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#pertanyaan" type="button" role="tab" aria-controls="profile" aria-selected="false">Pertanyaan</button>
        </li>
        <li class="nav-item" role="presentation">
        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#pencapaian" type="button" role="tab" aria-controls="contact" aria-selected="false">Pencapaian</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#teman" type="button" role="tab" aria-controls="contact" aria-selected="false">Teman</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="jawaban" role="tabpanel" aria-labelledby="home-tab">
            <button class="btn btn-white" style="position: absolute;bottom: -54%;
            left: 93%; z-index:1;">NEXT</button>
            <div v-for="qs in answer.data" class=" card container">
                <div class="d-flex single-qa-box">
                    <div class="flex-grow-1 ms-3">
                        <ul class="graphic-design">
                            <li>
                                <a>
                                    <img src="template/pify/assets/images/user/user-1.jpg" alt="Image">
                                </a>
                            </li>
                            <li>
                                <p style="color:black;"><b>MTK</b></p>
                            </li>
                            <li>
                                <span>14 hours ago</span>
                            </li>
                        </ul>
                        <h3>
                            <a  style="text-decoration: none;" href="queations-details.html">
                                @{{qs.answer}}
                            </a>
                        </h3>
                        <a style="text-decoration: none;" href="#" class="ms-auto bd-highlight lapor-btn">
                            <i class="fa-solid fa-heart fs-5"></i>
                        </a>
                        <a style="text-decoration: none;" href="#" class="ms-auto bd-highlight lapor-btn" style="padding-left: 40px;">
                            <i class="fa-solid fa-star fs-5"></i>
                        </a>
                        
                    </div>                                    
                </div>
            </div>
            <div class="container row pt-4">
                <button class="btn btn-primary col-3" style="z-index:1;">BACK</button>
                <div class="col-6"></div>
                <button class="btn btn-primary col-3" style="z-index:1;">NEXT</button>
            </div>
        </div>
        <div class="tab-pane fade" id="pertanyaan" role="tabpanel" aria-labelledby="profile-tab">
            <div v-for="qs in quest.data" class=" card container">
                <div  class="single-qa-box d-flex">
                    <div class="flex-grow-1 ms-3">
                        <ul class="graphic-design">
                            <li>
                                <a>
                                    <img src="template/pify/assets/images/user/user-1.jpg" alt="Image">
                                </a>
                            </li>
                            <li>
                                <a style="text-decoration: none;" href="#">B.inggris</a>
                            </li>
                            <li>
                                <span>14 hours ago</span>
                            </li>
                        </ul>
                        <h3>
                            <a style="text-decoration: none;" href="queations-details.html">
                                @{{qs.question}}
                            </a>
                        </h3>
                        <a style="text-decoration: none;" href="#" class="ms-auto bd-highlight lapor-btn">
                            <i class="fa-solid fa-circle-exclamation fs-5"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="container row pt-4">
                <button class="btn btn-primary col-3" style="z-index:1;">BACK</button>
                <div class="col-6"></div>
                <button class="btn btn-primary col-3" style="z-index:1;">NEXT</button>
            </div>
        </div>
        <div class="tab-pane fade" id="pencapaian" role="tabpanel" aria-labelledby="contact-tab">
                <div class="card">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 p-3">
                                <h4><b>Pencapaian</b></h4> 
                                <p style="font-size: 15px; line-height: 20px;">Mau dapat lebih banyak poin? Tingkatkan level-mu! Ayo, jawab lebih banyak pertanyaan, raih lencananya, dan dapatkan poin ekstra!</p>
                            </div>
                            <div class="col-sm-4" style="position: relative; overflow: hidden;">
                                <img src="https://brainly.co.id/app/img/achievements/achievements-banner.svg">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-warning" style="font-size: 35px; position: absolute; padding-top: 50px;">
                    <i class="fa-solid fa-trophy"></i>
                </div>
                <p style="font-size: 15px; font-weight: 1000; position: absolute; padding-top: 65px; padding-left: 50px;">buka pencapaian</p>
                <p style="font-size: 15px; font-weight: 500; position: absolute; padding-top: 160px; padding-left: 50px;">Sedang Berjalan</p>
            </div>
            
            
        <div class="tab-pane fade" id="teman" role="tabpanel" aria-labelledby="contact-tab">
            <div class="card">
                <div class="single-qa-box d-flex">
                    <div class="flex-grow-1 ms-3">
                        <ul class="graphic-design">
                            <li>
                                <a>
                                    <img src="template/pify/assets/images/user/user-1.jpg" alt="Image">
                                </a>
                            </li>
                            
                        </ul>
                        <h3>
                            <a class="text-center" style="text-decoration: none;" href="queations-details.html">
                                Ora nduwe konco euy :(
                            </a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>