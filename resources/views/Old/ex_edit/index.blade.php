@extends('layouts.master')


@section('content')
    <!-- Accordion Start -->


    {{-- accordion preferensi --}}
    <div class="container my-5" style="padding-bottom: 5%;">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 90%; border-radius: 20px;">
                <div class="card-body row">
                    <h5 class="card-title">Edit profilmu</h5>
                    <hr>
                    {{-- left content --}}
                    @include('ex_edit.leftedit')
                    {{-- Accordion end --}}

                    {{-- ID Card --}}
                    {{-- right content --}}
                    @include('ex_edit.rightedit')
            
              </div>
        
          </div>
    
      </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function () {
            $(".search-box").css("visibility", "hidden");

            $("#form-profile").submit(function (e) { 
                e.preventDefault();
                let id = {{Auth::id()}}     
                let profile = $( this ).serialize()
                console.log( profile );

                $.post("\\api/data/profile/store",profile + "&id="+id,
                    function (data) {
                        console.log(data);
                    },
                );

            });
        });
    </script>
@endpush