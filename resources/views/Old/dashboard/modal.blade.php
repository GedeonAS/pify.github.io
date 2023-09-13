        {{-- modal start --}}
        <div class="modal fade py-3" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                <h6 class="modal-title fw-bold" id="exampleModalToggleLabel">Ajukan Pertanyaan</h6>
                
                        {{-- close  button --}}
                        <button type="button" class="btn-close" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal" aria-label="Close"></button>
                        {{-- n close  button --}}
                            {{-- close button trigger --}}
                            <button id="btn-close" data-bs-dismiss="modal" style="display: none;"></button>
                            {{-- end --}}

                </div>
                <div class="modal-body">
                    <div id="mdl-body" class="form-group" style="height:50%;">
                        <textarea id="tiny"></textarea>
                        <div class="container py-3">
                            <div class="row">
                                <div class="col-sm-4">
                                    <select class="form-select fw-bold select-rounded" id="sMpel" aria-label="Default select example" style="width: 100%">
                                        <option selected disabled value="">Pilih mata pelajaran</option>
                                        @foreach ($film as $mapel)              
                                        <option value="{{$mapel->id}}">{{$mapel->nama_mapel}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <select class="form-select fw-bold select-rounded" id="sClas" aria-label="Default select example" style="width: 55%;">
                                        <option selected disabled value="">Kelas</option>
                                        @foreach ($filc as $class)
                                        <option value="{{$class->id}}">{{$class->nama_class}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-dark fw-bold col-sm-4" {{-- data-bs-dismiss="modal" --}} id="tanya" style="border-radius: 20px;">TANYAKAN PERTANYAANMU</button>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
            </div>
        </div>
        {{-- sc modal --}}
        <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-lg" style="width:45%">
            <div class="modal-content container py-4">
                <div class="modal-body row ">
                    <div class="col-sm-12 mb-3 align-items-center">
                        <h6 class="fw-bold">Kamu yakin tidak jadi bertanya?</h6>
                        <p>Jika kamu keluar, pertanyaanmu tidak akan kami tambahkan</p>
                    </div>
                    <div class="col-sm-6">
                        <button class="btn btn-dark" style="border-radius: 20px; width: 105%;" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">LANJUT BERTANYA</button>
                    </div>
                    <div class="col-sm-6">
                        <button class="btn btn-light" style="border-radius: 20px; width: 105%;" data-bs-dismiss="modal" aria-label="Close">TANYAKAN NANTI</button> 
                    </div>
                </div>
            </div>
            </div>
        </div>
        {{-- end modal --}}
