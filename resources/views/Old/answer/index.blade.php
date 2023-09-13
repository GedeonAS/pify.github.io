@extends('layouts.master')
@section('content')

        <style>
            .single-qa-box {
                border: 1px solid #00000081 !important;
            }

            .Editor-editor {
                height: 270px !important;
            }

            .p-9{
                padding-top: 9%;
                padding-bottom: 9%;
            }

            .img-cmn {
                border-radius: 50px;
                width: 60%;
            }

            .single-qa-box p {
                margin-bottom: 0 !important;
            }

            .foto {
                background-color: grey;

            }

            .tox-notifications-container {
                display: none;
            }
        </style>
		
        <div id="app" class="container pt-1 mt-5 ps-5 p-9">
            <div class="row">
                <div class="col-lg-8">

                    {{-- col question --}}
                    @include('answer.question')
                    {{-- n col question --}}

                    {{-- Answer --}}
                    @include('answer.answer')
                    {{-- N Answer --}}

                </div>

                {{-- R.Sidebar --}}
                @include('answer.right_sidebar')
                {{-- N R.Sidebar --}}

            </div>
        </div>
    {{-- Modal --}}
    @include('answer.modal')
    {{-- N Modal --}}
@endsection

@push('scripts')
<script>

</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="{{asset('tinymce/js/tinymce/tinymce.min.js')}}"></script>
        <script src="{{asset('tinymce/js/tinymce/tiny.min.js')}}"></script>
        <script src="{{asset('tinymce/js/tinymce/tinymce-jquery.min.js')}}"></script>
            <script>
                $('textarea#tiny').tinymce({
                    height: 400,
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

<script>

    
    const { createApp } = Vue

    const vues = createApp({
        data() {
            return {
                answer :'',
                comment_qs:'',
                comment:'',
                btn_id:'',
            }
        },mounted() {
            $(document).ready(function () {

                const id = {{$quest -> id}}
                let ans='';

                $.get("\\api/data/answer",{id:id},
                    function (rsp) {
                        console.log(rsp);
                        ans = rsp.answer
                        vues.answer = rsp.answer
                        // vues.comment = rsp.comment
                        // alert(vues.answer);
                        // for (let answer of ans) {
                        //     console.log(answer.id)
                        // }
                    },
                );
                // SearcbarInAnswer
                $("#searchbar").keypress(function (e) { 
                    if (e.which == 13) {
                        var data = $("#searchbar").val();
                        console.log(data);
                        if (data != "") {
                            var url = "{{ route('answer.search',':data')}}";
                                url = url.replace(':data',data);
                                // console.log(url);
                                location.href = url;       
                        }else{
                            console.log(data);
                        }
                    }
                });
                


                $("#jawab").click(function (e) { 
                    e.preventDefault();
                    var user = {{Auth::id()}};
                    var text = $("#tiny").text(); 
                    // console.log(text,id);
                    $.post("\\api/data/store/answer", {text:text,user:user,id:id},
                        function (data) {
                            console.log(data);
                            if (data === "kosong") {
                                alert("Jawaban Masih Kosong")
                            }else{

                                $("#tiny").html(null);
                                // vues.type.push(data);
                                vues.answer.push(data);
                                // console.log(data.qs);
                                $("#btn-close").trigger("click");
                            
                            }
                        },
                    );
                });
            });
        },
        methods: {
            greet(event) {
                //AnswerController@storeComent
                let id = event;
                let idq = {{$quest -> id}};
                let id_user = {{Auth::id()}};
                var data = $("#komen"+event).val();
                var data_qs = $("#komenquest").val();
                // alert(data_qs)
                console.log(data_qs);
                $.post("\\api/data/store/coment",{id:id,id_quest:idq,id_user:id_user,comment:data,commnet_quest:data_qs},
                function (data) {
                    console.log(data); /* cek */
                    if (data.cek == "qus") {
                        // alert("qus");  /* cek */
                        vues.comment_qs = data.comment
                        $("#komenquest").val(null)
                    } else {   
                        // alert("ans"); /*   cek */                  
                        vues.comment = data
                        // console.log(data);
                        $("#komen" + event).val(null)
                    }
                    },
                );

            },
            showComnt(id){
                let id_user = {{Auth::id()}};
                const idq = {{$quest -> id}}
                // if (id != null) {                    
                    
                    console.log(id,idq);
                    $.ajax({
                        type: "post",
                        url: "\\api/data/show/coment",
                        data: {id_quest:idq,id_answer:id,id_user:id_user},
                        dataType: "json",
                        success: function (rsp) {
                            if (rsp.cek == "one") {
                                // alert("one");
                                vues.comment_qs = rsp.comment
                            } else {                                
                                // alert("two")
                                // console.log(rsp);
                                vues.comment = rsp.comment
                                vues.btn_id = rsp.id_answer
                            }
                        }
                    });
                
            }
        }
    }).mount('#app') 
</script>
@endpush