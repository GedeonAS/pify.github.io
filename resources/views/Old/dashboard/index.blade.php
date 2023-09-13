
@if (Auth::user()->level == 1 )

@extends('layouts.master')   

@section('content')


<style>
	.nav-link{
		color: #0c0d0e;
	}

	.nav-link:hover {
		color: #0c0d0e;
	}

	.nav-pills .nav-link.active,.nav-pills .show>.nav-link{
		background-color: #ebf2f7 !important;
		color: #0c0d0e;
		border-radius: 10px;
	}

	.font-bold{
		font-weight: 700;
	}

    .card {
        position: static !important;
    }

    .Editor-editor {
        height: 145px !important;
        /* border:0.5px solid rgba(255, 0, 0, 0.235) */
    }

    .tox-notifications-container {
        display: none;
    }
    .single-qa-box:last-child {
    border-bottom: inherit;
    }


</style>

	<div id="app">
		<!-- Start Mail Content Area -->
		<div class="main-content-area py-5">
			<div class="container">
				<div class="row">
                    {{-- @php
                        echo dd($id);
                    @endphp --}}
                    {{-- @foreach ($data as $item)
                        {{$item}}
                    @endforeach --}}
                    {{-- {{$data}} --}}
                    {{-- <div v-for="qs in quest.data">
                        <div>
                            @{{qs.question}}
                        </div>
                    </div> --}}
                    {{-- {{ Auth::user()->name }} --}}
					{{-- left sidebar --}}
					@include('dashboard.left_sidebar')
					{{-- end --}}
					{{-- Start middle content --}}
					@include('dashboard.content')
					{{-- End--}}

					{{-- Sidebar Right --}}
					@include('dashboard.right_sidebar')
					{{-- End sidebar right --}}

                    {{-- Modal --}}
                    @include('dashboard.modal')
                    {{-- N Modal --}}
				</div>
			</div>
		</div>
		<!-- End Mail Content Area -->


	</div>

@endsection

@push('scripts')

<script>

    const { createApp } = Vue

    const vues = createApp({
        data() {
            return {
                quest :[],
                // classe :'',
                type  : [],
            }
        },mounted() {

            var classe ='';
            var type ='';
            var dt ='';
            
            $(document).ready(function (e) {
            
                ajax = $.ajax({
                    url: "{{route('menu.show')}}",
                    success: function(rsp){
                        vues.quest = rsp ;
                        
                    }
                });

                var input_new = "{{session()->get('data')}}";
                console.log(input_new);
                
                if (input_new != "") {
                    $.get("api/data/search", {data:input_new},
                        function (data) {
                            console.log(data);           
                            vues.quest = data;
                            $("#searchbar").val(null);
                        },
                    );
                }
                
                // SearchBar
                $("#searchbar").keypress(function (e) { 
                    if (e.which == 13) {
                        var input = $("#searchbar").val();
                        console.log(input);
                        $.get("api/data/search", {data:input},
                            function (data) {
                                console.log(data);           
                                vues.quest = data;
                                $("#searchbar").val(null);
                            },

                        );
                    }
                });

                $(".clasall").click(function (e) {
                    e.preventDefault(); 
                        dt = $(this).val();
                        // alert();
                        $.get("api/data/question",{mapel:dt,clas:classe,type:type},
                            function (data) {
                                vues.quest = data 
                                
                            },
                        );
                });

                $(".filter").change(function (e) { 
                    e.preventDefault();
                        classe = $("#class").val();
                        type = $("#type").val();

                        $.get("api/data/question",{mapel:dt,clas:classe,type:type},
                        function (data) {
                            vues.quest = data 
                            
                        },
                    );
                });

                $("#tanya").click(function (e) { 
                    e.preventDefault();
                    var user = {{Auth::id()}};
                    var text = $("#tiny").text();
                    var cls = $("#sClas").val();    
                    var typ = $("#sMpel").val();    
                    console.log(typ,text,cls,user);
                    $.post("api/data/store", {text:text,clas:cls,typ:typ,user:user},
                        function (data) {
                            console.log(data);
                            if (data === "kosong") {
                                alert("Pertanyaan Masih Kosong")
                            }else if(data === "kopong"){
                                alert("Pilih Kelas")
                            }else if(data === "kopsong"){
                                alert("Pilih Mata Pelajaran")
                            }else{
                                var url = "{{ route('answer',':id')}}";
                                url = url.replace(':id',null);

                                $("#tiny").html(null);
                                $("#sClas").val(null);    
                                $("#sMpel").val(null);
                                // vues.type.push(data);
                                vues.quest.unshift(data);
                                // console.log(data.qs);
                                $("#btn-close").trigger("click");
                            
                                location.href = url;
                            }
                        },
                    );
                });

            });
            
        },methods: {
            goToanswer(p){
                
                var url = "{{ route('answer',':id')}}";
                url = url.replace(':id',p);

                location.href = url;

            }
        },
    }).mount('#app') 
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{asset('tinymce/js/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('tinymce/js/tinymce/tiny.min.js')}}"></script>
<script src="{{asset('tinymce/js/tinymce/tinymce-jquery.min.js')}}"></script>
    <script>
        $('textarea#tiny').tinymce({
            height: 290,
            menubar: false,
            plugins: [
            'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
            'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
            'insertdatetime', 'media', 'table', 'help', 'wordcount'
            ],
            toolbar: 'undo redo | blocks | ' +
            'bold italic backcolor | alignleft aligncenter ' +
            'alignright alignjustify | bullist numlist outdent indent | ' +
            'removeformat | help',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
        });
    </script>

@endpush
    
@else

<div style="display: none;" class="main-content-area py-5">
    <div class="container">
    <form action="{{route('home')}}" method="get">
        <button type="submit" style="display:" id="op" >TRigger</button>
    </form>
    </div>
</div>
    
    @push('scripts')
    <script src="{{asset('template/pify/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('template/pify/assets/js/jquery.js')}}"></script>
    <script>
        $(document).ready(function () {
            $("#op").trigger("click");
        });
    </script>

@endif