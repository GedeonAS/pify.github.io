@extends('layouts.master')
@push('TOPSC') 
    {{-- <script src="{{asset('pify/assets/js/jquery.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $("#aside").remove();
        });
    </script> --}}
@endpush

@section('content')

    <div class="middull-content">
        <ul class="page-nish">
            <li>
                <a href="index.html">
                    <i class="ri-home-8-line"></i>
                    Home
                </a>
            </li>
            <li class="active">
                Groups
            </li>
        </ul>

        <form class="aq-form">
            <i class="ri-search-line"></i>
            <input id="searchbar"  type="text" class="form-control" placeholder="Have a question? Ask or enter a search">        
        </form>

        <div class="group-content">
            <div class="row justify-content-center">
                <div :id="'join'+item.id"  v-for="item in group" type="button"  class="col-xl-6 col-md-6">
                    <div class="single-group-box">
                        <div class="group-img">
                            <img src="{{asset('pify/assets/images/group/group-1.jpg')}}" alt="Image">
                            <span>8 hours ago</span>
                        </div>

                        <div class="group-content">
                            <div class="group-sub-img">
                                <img src="{{asset('pify/assets/images/group/sub-1.jpg')}}" alt="Image">
                                <h3>@{{item.group}}</h3>
                                <span>Public group</span>
                            </div>

                            <ul class="d-flex justify-content-between">
                                <li>
                                    <h4>10</h4>
                                    <span>Post</span>
                                </li>
                                <li>
                                    <h4>5</h4>
                                    <span>User</span>
                                </li>
                            </ul>

                            <button @click="joiN(item.id)"  class="group-btn">
                                Leave group
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        let id_user = {{Auth::id()}}
    </script>
    <script>
        const vues = Vue.createApp({
            data() {
                return {
                    group:'',
                }
            },
            mounted() {
                
                $(document).ready(function () {
                    $.ajax({
                        type: "get",
                        url: "\\api/group/show/joined",
                        data: {id:id_user},
                        dataType: "json",
                        success: function (rsp) {
                            console.log(rsp);
                            vues.group = rsp.join

                        }
                    });
                });

                //  SearchBar
				$("#searchbar").keyup(function (e) { 
                    
                    let type = 'join'
                    var input = $("#searchbar").val();
                    $.get("\\api/group/show/search", {data:input,type:type,id:id_user},
                        function (rsp) {           

                            vues.group = rsp.join

                        },

                    );
            });
            },
            methods: {
                joiN(id){
                    let type = "unjoin"
                    let id_user = {{Auth::id()}}
                    $.post("\\api/group/un_join", {id:id,id_user:id_user,type:type},
                        function (rsp) {
                            alert(rsp.alert)
                            $("#join"+rsp.id).remove();
                        },
                    );
                    
                }
            },
        }).mount('#app')
    </script>
@endpush