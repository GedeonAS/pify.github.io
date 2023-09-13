<div class="col-lg-2">
    <div class="align-items-center">
        <h5 class="d-inline ms-4">Mapel</h5>
        <a class="d-inline ms-5">
            <i class="fa-solid fa-gear fs-5"></i>
        </a>
    </div>
    <hr>
    <div>
        <div class="nav flex-column questions-tab nav-pills" id="myTab" role="tablist" aria-orientation="vertical">
            
            <button class="nav-link active font-bold clasall" id="matematika-question-tab" data-bs-toggle="tab" data-bs-target="#matematika-question" type="button" role="tab" aria-controls="matematika-question" aria-selected="true" value="">
                {{-- <i class="fa-solid fa-calculator pe-2"></i> --}}
                Semua
            </button>
            @foreach ($film as $mapel)              
                <button class="nav-link clasall" id="question-tab" data-bs-toggle="tab" data-bs-target="#question-data" type="button" role="tab" aria-controls="question-data" aria-selected="false" value="{{$mapel->id}}">
                    {{$mapel->nama_mapel}}
                </button>
            @endforeach
        </div>
    </div>
</div>

