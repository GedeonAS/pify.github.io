{{-- Mid Content --}}
@extends('layouts.master')
@section('style')
    <style>
        #com-follow:hover{
            color: blue;
        }
    </style>
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
                Communities
            </li>
        </ul>

        <form class="aq-form">
            <i class="ri-search-line"></i>
            <input type="text" id="searchbar" class="form-control" placeholder="Type to search ">
        </form>

        <div class="row justify-content-center">


                <div v-for="item in unfollow" :id="'follow'+item.id" class="col-xl-4 col-sm-6">
                    <div class="single-communities-box">
                        <img src="assets/images/communities/programing.png" alt="Image">
                        <h3>
                            <a href="communities.html">@{{item.community}}</a>
                        </h3>
                        <ul class="d-flex justify-content-between">
                            <li>@{{item.followers}} Followers</li>
                            <li>
                                <button id="com-follow" @click="folloW(item.id)" class="active" :value="item.id">Follow</button>
                            </li>
                        </ul>
                    </div>
                </div>

        </div>
    </div>


{{-- Mid Content End --}}
@endsection

@push('scripts')
    <script>
        const vues = Vue.createApp({
            data() {
                return {
                    unfollow:'',
                }
            },
            mounted() {
                let id_user = {{Auth::id()}}
                $(document).ready(function () {
                    $.ajax({
                        type: "get",
                        url: "api/community/show/unfollow",
                        data: {id:id_user},
                        dataType: "json",
                        success: function (rsp) {
                            vues.unfollow = rsp.unfollow
                        }
                    });

                //  SearchBar
				$("#searchbar").keyup(function (e) { 
                    
                        let type = 'unfollow'
                        var input = $("#searchbar").val();
                        $.get("api/community/show/search", {data:input,type:type,id:id_user},
                            function (rsp) {           

                                vues.unfollow = rsp.unfollow

                            },

                        );
                });
                });
            },
            methods: {
                folloW(id){
                    let type = "follow"
                    let id_user = {{Auth::id()}}
                    $.post("api/community/un_follow", {id:id,id_user:id_user,type:type},
                        function (rsp) {
                            alert(rsp.alert)
                            $("#follow"+rsp.id).remove();
                        },
                    );
                    
                }
            },
        }).mount('#app')
    </script>
@endpush
 