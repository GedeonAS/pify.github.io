<div class="col-lg-7">
    <div class="middull-content">
        {{-- ask question --}}
        <div class="card pb-5 pt-4 px-3" style="border: 1px solid #00000081;">
            <div class="card-body">
                <div class="d-flex">
                    <div class="flex-grow-1 ms-3">
                        <ul class="graphic-design">
                            <li>
                                <a>
                                    <img src="template/pify/assets/images/user/user-1.jpg" alt="Image">
                                </a>
                            </li>
                            <li>
                                <span>Mahaguru</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="ms-5">
                    <h1 class="card-title pb-3">
                        Punya Pertanyaan?
                    </h1>
                    <a href="#"  class="btn btn-dark fw-bold" style="border-radius: 20px;" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">TANYA SEKARANG!</a>
                </div>
            </div>
        </div>
        {{-- end ask question --}}
    
        {{-- filter --}}
        <div class="container py-3">
            <div class="row">
                <div class="col-md-8 d-flex">
                    <select class="form-select select-rounded filter me-3" id="class" aria-label="Default select example" style="width: 80%;">
                        <option value="" selected>Semua tingkat pendidikan</option>
                        @foreach ($filc as $class)
                        <option value="{{$class->id}}">{{$class->nama_class}}</option>
                        @endforeach
                    </select>
                    <select class="form-select select-rounded filter" id="type" aria-label="Default select example" style="width: 50%;">
                        <option value="" selected>Semua</option>
                        @foreach ($filt as $type)
                        <option value="{{$type->id}}">{{$type->nama_type}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        {{-- end filter --}}

        {{-- Content Data --}}
        <div class="tab-content" id="myTabContent">
            <table class="tab-pane fade show active" id="matematika-question" role="tabpanel" aria-labelledby="matematika-question-tab">
                <div v-for="qs in quest" class="single-qa-box card">
                    <div class="d-flex">
                        <div class="flex-grow-1 ms-3 container">
                            <ul class="graphic-design">
                                <li>
                                    <a>
                                        <img src="{{ Avatar::create( "X" )->setDimension(55)->setFontSize(15) }}" alt="Image">
                                    </a>
                                </li>
                                <li> 
                                    <a href="#">@{{qs.mapel}}</a>
                                </li>
                                <li>
                                    <span>14 hours ago</span>
                                </li>
                            </ul>
                            <h3>
                                <a href="#" v-on:click="goToanswer(qs.id)">
                                    <pre style="font-family:Arial, Helvetica, sans-serif;">@{{qs.question}}</pre>
                                </a>
                            </h3>
                            <div class="d-flex align-items-end flex-column bd-highlight mb-3">
                                <a href="#" class="default-btn mt-3" v-on:click="goToanswer(qs.id)">
                                    Answer
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </table>
            <div class="tab-pane fade" id="question-data" role="tabpanel" aria-labelledby="question-data-tab" >
                <div v-for="qs in quest" class="single-qa-box card">
                    <div class="d-flex card-body">
                        <div class="flex-grow-1">
                            <ul class="graphic-design">
                                <li>
                                    <a>
                                        <img src="template/pify/assets/images/user/user-1.jpg" alt="Image">
                                    </a>
                                </li>
                                <li> 
                                    <a href="#">@{{qs.mapel}}</a>
                                </li>
                                <li>
                                    <span>14 hours ago</span>
                                </li>
                            </ul>
                            <h3>
                                <a href="#" v-on:click="goToanswer(qs.id)">
                                    @{{qs.question}}
                                </a>
                            </h3>
                            <div class="d-flex align-items-end flex-column bd-highlight mb-3">
                                <a href="#" class="default-btn mt-3" v-on:click="goToanswer(qs.id)">
                                    Answer
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('dashboard.modal')
    </div>
</div>