        {{-- Start Modal Answer --}}
        <div class="modal fade py-3" id="answerModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-fullscreen">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title fw-bold" id="exampleModalToggleLabel">Ajukan Pertanyaan</h5>
                  <button type="button" class="btn-close" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal" aria-label="Close"></button>
                            {{--hidden close button trigger --}}
                            <button id="btn-close" data-bs-dismiss="modal" style="display: none;"></button>
                            {{-- end --}}
                </div>
                <div class="modal-body row">
                    <div class="col-md-5">
                        <div class="container">
                            <h4 class="fw-bold">Pertanyaan :</h4>
                            <h6>
                                {{$quest -> question}}
                            </h6>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group" style="height:50%;">
                            <textarea id="tiny"></textarea>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                  <button id="jawab" class="btn btn-dark fw-bold" style="border-radius: 20px;">TAMBAHKAN JAWABAN</button>
                </div>
              </div>
            </div>
          </div>
          {{-- sc modal 2 --}}
          <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-lg" style="width:45%">
            <div class="modal-content container py-4">
                <div class="modal-body row ">
                    <div class="col-sm-12 mb-3 align-items-center">
                        <h6 class="fw-bold">Kamu yakin tidak jadi menjawab?</h6>
                        <p>Jika kamu keluar, jawabanmu tidak akan kami tambahkan</p>
                    </div>
                    <div class="col-sm-6">
                        <button class="btn btn-dark" style="border-radius: 20px; width: 105%;" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">LANJUT MENJAWAB</button>
                    </div>
                    <div class="col-sm-6">
                        <button class="btn btn-light" style="border-radius: 20px; width: 105%;" data-bs-dismiss="modal" aria-label="Close">JAWAB NANTI</button> 
                    </div>
                </div>
            </div>
            </div>
        </div>
        {{-- End Modal Answer --}}