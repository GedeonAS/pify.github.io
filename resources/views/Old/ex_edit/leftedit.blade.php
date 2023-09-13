<div class="col-md-7 accordion accordion-flush" id="accordionFlushExample">
    <div class="accordion-item" style="width: 90%; border-radius: 20px;">
        <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseOne" aria-expanded="true"
            aria-controls="flush-collapseOne">
            Preferensi
        </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse"
    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
    
    {{-- First Acordion --}}
            <div class="accordion-body">
                <h6 class="card-title" style="font-size: 15px; font-weight: 400">
                    Perubahan data dasar
                </h6>
                <hr>
                <form id="form-profile">
                    <div class="row">
                        <label class="col-4" for="gender">Gender</label>
                        <span class="col-1">:</span>
                        <select name="gender" class="col-5" id="gender">
                            <option value="" selected disabled>Pilih Gender</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group row my-4 " >
                        <label for="colFormLabelSm" class="col-4 col-form-label col-form-label-sm"
                            style=" font-size: 15px; font-weight: 400;">Nama</label>
                        <span class="col-1">:</span>
                        <div class="col-5 ps-0">
                            <input name="nama" style="width: 106%;" type="text"
                                class="form-control-sm container-fluid" id="colFormLabelSm"
                                placeholder="{{Auth::user()->name}}">
                        </div>
                    </div>

                    <div class="row">
                        <label class="col-4" for="sekolah">Tingkat pendidikan</label>
                        <span class="col-1">:</span>
                        <select name="kelas" class="col-5" id="sekolah">
                            <option value="" selected disabled >Pilih tingkat pendidikan</option>
                            <option value="Sekolah dasar">Sekolah dasar</option>
                            <option value="Sekolah menengah pertama">Sekolah menengah pertama</option>
                            <option value="Sekolah menengah atas">Sekolah menengah atas </option>
                        </select>
                    </div>
                <hr>

                <div class="container px-0">
                    <div class="" >
                        <button id="btn-profile" class="me-2 btn btn-lg text-white" style="background-color:#FFA51F;border-radius : 10px;" type="submit" >
                            Simpan
                        </button>
                        <button class="ms-2 btn btn-lg text-white float-end" style="background-color: #9e9e9e;border-radius : 10px;" onclick="">
                            Batal
                        </button>
                    </div>
                </div>
                </form>
            </div>
        </div>

    </div>
    {{-- accordion kirim info --}}
    {{-- <div class="accordion-item" style="width: 90%; border-radius: 20px;">
        <h2 class="accordion-header" id="flush-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                aria-controls="flush-collapseTwo">
                Kirim info ke Email
            </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse"
            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                Placeholder content for this accordion, which is intended to
                demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion
                body. Let's imagine this being filled with some actual content.
            </div>
        </div>
    </div> --}}
    {{-- accodion kata sandi --}}
    <div class="accordion-item" style="width: 90%; border-radius: 20px;">
        <h2 class="accordion-header" id="flush-headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseThree" aria-expanded="false"
                aria-controls="flush-collapseThree">
                Kata Sandi
            </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse"
            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                <h6 class="card-title" style="font-size: 15px; font-weight: 400">Ubah kata sandi</h6>
                <hr>
                <form class="form-group">
                    <div class="row ">
                        <label class="col-4 form-label" for="old-password">Kata sandi sebelumnya </label>
                        <span class="col-1">:</span>
                        <input class="col-5 form-control-sm" type="password" id="password-old" placeholder="Past Password">
                    </div>
                
                    <div class="row py-3">
                        <label class="col-4 form-label" for="fname">Kata sandi baru </label>
                        <span class="col-1">:</span>
                        <input class="col-5 form-control-sm" type="password" id="password-new" placeholder="New Password" >
                    </div>
                
                    <div class="row ">
                        <label class="col-4 form-label" for="fname">Ulangi kata sandi </label>
                        <span class="col-1">:</span>
                        <input class="col-5 form-control-sm" type="password" id="password-repeat" placeholder="Repeat New Password" >
                        
                    </div>
                    <hr>
                    <div class="container px-0">
                        <div class="" >
                            <button id="" class="me-2 btn btn-lg text-white" style="background-color: #FFA51F;border-radius : 10px;"
                                type="submit" >Simpan</button>
                            <button class="ms-2 btn btn-lg text-white float-end" style="background-color: #9e9e9e;border-radius : 10px;"
                                onclick="">Batal</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- accordion email --}}
    <div class="accordion-item" style="width: 90%; border-radius: 20px;">
        <h2 class="accordion-header" id="flush-headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseFour" aria-expanded="false"
                aria-controls="flush-collapseThree">
                Email
            </button>
        </h2>
        <div id="flush-collapseFour" class="accordion-collapse collapse"
            aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                <h6 class="card-title" style="font-size: 13px; font-weight: 400">Perubahan alamat
                    email</h6>
                <hr>
                <h6 class="card-title" style="font-size: 13px; font-weight: 300">
                    Alamat yang digunakansaat ini : 
                    <b>{{Auth::user()->email}}</b>
                </h6>
                <div class="form-group">
                    <form>
                        <label for="exampleInputPassword1">Kata sandi saat ini</label>
                        <input type="password" class="form-control" id="exampleInputPassword1"
                            placeholder="Password" style="height: 40px;">
                        
                        <label for="exampleInputEmail1">Email sekarang</label>
                        <input type="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Email"
                            style="height: 40px;">
                        <small id="emailHelp" class="form-text text-muted">
                            Kami tidak akan menampilkan kepada siapapun
                        </small>
                        <hr>
                        <div class="container px-0">
                            <div class="" >
                                <button id="btn-profile " class="me-2 btn btn-lg text-white" style="background-color: #FFA51F;border-radius : 10px;" type="submit" >
                                    Simpan
                                </button>
                                <button class="ms-2 btn btn-lg text-white float-end" style="background-color: #9e9e9e;border-radius : 10px;" onclick="">
                                    Batal
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- accordion profile avatar --}}
    <div class="accordion-item" style="width: 90%; border-radius: 20px;">
        <h2 class="accordion-header" id="flush-headingFive">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseFive" aria-expanded="false"
                aria-controls="flush-collapseThree">
                Gambar Profil
            </button>
        </h2>
        <div id="flush-collapseFive" class="accordion-collapse collapse"
            aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                <div class="container-fluid text-center py-1 fs-5" style="border-radius: 20px; background-color: #fcf8e3;">
                    <i class="" >Gambar profil bisa berupa file jpeg/gif/png<br>Gambar profil harus lebih kecil dari 3 megabyte</i>
                </div>
                <hr>
               
                    <input type="file" name="data[User][Attachment]" label=""
                        value="" id="UserAttachment">
                    <hr>
                    <div class="container px-0">
                        <div class="" >
                            <button id="" class="me-2 btn btn-lg text-white" style="background-color: #FFA51F;border-radius : 10px;"
                                type="submit" >Simpan</button>
                            <button class="ms-2 btn btn-lg text-white float-end" style="background-color: #9e9e9e;border-radius : 10px;"
                                onclick="">Batal</button>
                        </div>
                    </div>
                
            </div>
        </div>
    </div>
</div>