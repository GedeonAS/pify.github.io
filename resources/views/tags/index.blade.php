@extends('layouts.master')

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
            Tags
        </li>
    </ul>

    <form class="aq-form">
        <i class="ri-search-line"></i>
        <input type="text" class="form-control" placeholder="Have a question? Ask or enter a search">
        <button class="aq-btn">
            Ask Question
        </button>
    </form>

    <div class="tag-content">
        <div class="row justify-content-center">
            <div v-for="tags in tags" class="col-lg-6 col-md-6">
                <div class="single-tags-box">
                    <ul class="tag-mark">
                        <li>
                            <i class="ri-price-tag-3-line"></i>
                            <span>@{{tags.tag}}</span>
                        </li>
                        <li>
                            1984 questions
                        </li>
                    </ul>
                    <p>Sed porttitor lectus nibh. Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada.</p>
                    <ul class="tag-btn d-flex justify-content-between">
                        <li>
                            <button class="default-btn">
                                325 Followers
                            </button>
                        </li>
                        <li>
                    
                        </li>
                    </ul>
                </div>
            </div>
            {{-- pagginate --}}
            <div class="col-12 px-5">
                <div class="pagination-area mt-0 row">
                    <a 
                        href="#"  
                        class="col-2 text-center" 
                        style="border: 1px solid #eeeeee;height:2rem ;padding: 0.25rem!important;"
                        @click="pagginate(first_page_url)"
                    >
                        First
                    </a>

                    <a 
                        href="#" 
                        class="col-1 ms-1 text-center" 
                        style="border: 1px solid #eeeeee;height:2rem ;padding: 0.25rem!important;"
                        @click="pagginate(prev_page_url)"
                        >
                        <i class="ri-arrow-left-line"></i>
                    </a>

                    <div class="col d-flex">
                        <input type="text" id="search-pagginate" class="text-center" :placeholder="current_page +' of '+ last_page" 
                            style="border: 1px solid #eeeeee; height:2rem; width:auto;">
                        <button 
                            @click="searchPagginate(path)"
                            type="text" class="" style="border: 1px solid #eeeeee; height:2rem; width:100%;" >
                            <b>GO</b>
                        </button>
                    </div>

                    <a 
                        href="#"  
                        class="col-1 me-1 text-center"
                        style="border: 1px solid #eeeeee;height:2rem;padding: 0.25rem!important;"
                        @click="pagginate(next_page_url)"
                        >
                        <i class="ri-arrow-right-line"></i>
                    </a>
                    <a 
                        href="#" 
                        class="col-2 text-center"
                        style="border: 1px solid #eeeeee;height:2rem;padding: 0.25rem!important;"
                        @click="pagginate(last_page_url)"
                        >
                        Last
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
        
    function scrollToTop() {
        window.scrollTo(0, 0);
    }

    const vues = Vue.createApp({
        data() {
            return {
                tags :'',
                first_page_url :'',
                last_page_url:'',
                prev_page_url:'',
                next_page_url:'',
                last_page:'',
                current_page:'',
                path:'',
            }
        },mounted() {
            $(document).ready(function () {
                
                $.ajax({
                    type: "GET",
                    contentType: "application/json",
                    dataType: "json",
                    url: "/api/tag/show",
                    success: function (rsp) {
                        console.log(rsp);   
                        vues.tags = rsp.data
                        vues.first_page_url = rsp.first_page_url
                        vues.last_page_url = rsp.last_page_url
                        vues.last_page = rsp.last_page
                        vues.prev_page_url = rsp.prev_page_url
                        vues.next_page_url = rsp.next_page_url
                        vues.current_page = rsp.current_page
                        vues.path = rsp.path
                    }
                });

            });
        },methods: {
            // pagginate button
            pagginate(url){
                console.log(url);
                $.ajax({
                    type: "GET",
                    contentType: "application/json",
                    dataType: "json",
                    url: url,
                    success: function (rsp) {
                        console.log(rsp);   
                        vues.tags = rsp.data
                        vues.first_page_url = rsp.first_page_url
                        vues.last_page_url = rsp.last_page_url
                        vues.last_page = rsp.last_page
                        vues.prev_page_url = rsp.prev_page_url
                        vues.next_page_url = rsp.next_page_url
                        vues.current_page = rsp.current_page
                        vues.path = rsp.path
                    }
                });
            },
            // search-pagginate
            searchPagginate(url){
                var url = url+'?page='
                let num = $("#search-pagginate").val();
                console.log(url);

                if (num == '') {

                    $("#search-pagginate").val(null);
                    alert("please input number of page")

                }else if(num > vues.last_page){

                    $("#search-pagginate").val(null);
                    alert("your input out of range, the last page is " + vues.last_page)

                }else{                    
                    $.ajax({
                        type: "GET",
                        contentType: "application/json",
                        dataType: "json",
                        url: url+num,
                        success: function (rsp) {
                            scrollToTop() 
                            console.log(rsp);   
                            vues.tags = rsp.data
                            vues.first_page_url = rsp.first_page_url
                            vues.last_page_url = rsp.last_page_url
                            vues.last_page = rsp.last_page
                            vues.prev_page_url = rsp.prev_page_url
                            vues.next_page_url = rsp.next_page_url
                            vues.current_page = rsp.current_page
                            vues.path = rsp.path
                            $("#search-pagginate").val(null);
                        }
                    });
                }
            },
        },
    }).mount('#app')
</script>
@endpush