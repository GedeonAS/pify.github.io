@extends('layouts.master')

@section('content')

    <div class="middull-content">
        <form id="ask" class="your-answer-form">
            <div class="form-group">
                <h3>Create a questions</h3>
            </div>
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control global-radius" name="title">
            </div>
            <div class="form-group">
                <label>Communities</label>

                <div class="input-group mb-3">
                    <select class="form-select form-select-md" name="community" aria-label="Default select example">
                        <option selected disabled>Select Communities</option>
                        <option value="0">Public</option>
                        @foreach ($communities as $item) 
                            <option value="{{$item->id}}">{{$item->community}}</option>
                        @endforeach
                    </select>
                    <a href="{{route('communities')}}" class="input-group-text" id="basic-addon2">Add More Comunities</a>
                </div>
            </div>

            <div class="form-group accordions">
                <label>Tags (Add up to 5 tags to describe what your question is about)</label>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Chose tags
                        </button>
                    </h2>
                </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body d-flex  row mx-0">
                            @foreach ($tags as $item) 
                                <input class="single-checkbox col-1 my-1" id="ip{{$item->id}}" type="checkbox" name="tag[]" value="{{$item->id}}"> <label onclick="nameTagclick({{$item->id}})" id="var{{$item->id}}" class="col-2 px-0 my-1">{{$item->tag}}</label>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Description</label>
                <div id="txtEditor"></div>
            </div>

            <div class="form-group">
                <div class="file-upload-account-info">
                    <input type="file" name="image" id="file-2" class="inputfile">
                    <label class="upload">
                        <i class="ri-link"></i>
                        Upload Photo
                    </label>
                </div>
                <img class="pt-2"  id="imgPreview" style="
                    width: 100%;
                    height: 300px;
                    object-fit: contain;"   
                src="https://www.asiantelegraphqatar.com/wp-content/uploads/2016/10/default-placeholder-1024x1024-400x280.png" />
            </div>

            <div class="form-group">
                <button type="submit" class="default-btn global-radius">Ask your question</button>
            </div>
        </form>
    </div>

@endsection

@push('scripts')
{{-- img preview --}}
    <script>
        $(document).ready(() => {
            $("#file-2").change(function () {
                const file = this.files[0];
                if (file) {
                    let reader = new FileReader();
                    reader.onload = function (event) {
                        $("#imgPreview")
                        .attr("src", event.target.result);
                    };
                    reader.readAsDataURL(file);
                }
            });
        });
    </script>
{{-- vue --}}
    <script>
        const { createApp } = Vue
        const vues = createApp({
            data() {
                return {
                    tags :[],
                }
            }
        }).mount("#app")
    </script>
{{-- other --}}
    <script>
        $(document).ready(function () {
            // upload image
            $(".upload").click(function (e) { 
                e.preventDefault();
                $("#file-2").trigger('click');
            });

            // limit tag
            var limit = 5;
                $('input.single-checkbox').on('change', function(evt) {
                if($(this).siblings(':checked').length >= limit) {
                    this.checked = false;
                    alert("Maximum 5 tags")
                }
                });
            // post data
            $("#ask").submit(function (e) { 
                e.preventDefault();
                let text = $("#txtEditor").Editor("getText"); 
                let data = new FormData(this)
                data.append('text', text);
                $.ajax({
                    type: "POST",
                    url: "api/quest/store",
                    data: data,
                    contentType: false,
                    cache: false,
                    processData:false,
                    success: function (rsp) {
                        alert(rsp)
                        
                        let url = "{{route('questions')}}"
                        location.href = url
                    }
                });
            });
        });
    </script>
{{-- jq function --}}
    <script>
        // tag name click func
        function nameTagclick(id){
            id_tag = id;
            $("#ip"+id).trigger('click');
        }
    </script>
@endpush