@extends('layouts.master')

@section('content')

    @include('most_visited.content')

@endsection
@push('scripts')
    <script>
        function scrollToTop() {
             window.scrollTo(0, 0);
        }
        const vues = Vue.createApp({
            data() {
                return {
                    quest:'',
                    first_page_url:'',
                    last_page_url:'',
                    prev_page_url:'',
                    next_page_url:'',
                    last_page:'',
                    current_page:'',
                    path:'',
                }
            },
            mounted() {
                $(document).ready(function () {
                    $.ajax({
                        type: "get",
                        url: "api/most-visited/show",
                        success: function (rsp) {
                            console.log(rsp.quest)
                            vues.quest = rsp.quest.data
                            vues.first_page_url = rsp.quest.first_page_url
                            vues.last_page_url = rsp.quest.last_page_url
                            vues.last_page = rsp.quest.last_page
                            vues.prev_page_url = rsp.quest.prev_page_url
                            vues.next_page_url = rsp.quest.next_page_url
                            vues.current_page = rsp.quest.current_page
                            vues.path = rsp.quest.path
                        }
                    });
                });

                // SearchBar
				$("#searchbar").keypress(function (e) { 
                    
                    if (e.which == 13) {
						e.preventDefault(); 
                        
                        var input = $("#searchbar").val();
                        $.get("/api/most-visited/search", {data:input},
                            function (rsp) {           
                                console.log(rsp);
                                vues.quest = rsp.quest.data
                                vues.first_page_url = rsp.quest.first_page_url
                                vues.last_page_url = rsp.quest.last_page_url
                                vues.last_page = rsp.quest.last_page
                                vues.prev_page_url = rsp.quest.prev_page_url
                                vues.next_page_url = rsp.quest.next_page_url
                                vues.current_page = rsp.quest.current_page
                                vues.path = rsp.quest.path
                                $("#searchbar").val(null);

                            },

                        );
                    }
                });
                // search button
                $("#search-button").click(function (e) { 
                    e.preventDefault();

                    var input = $("#searchbar").val();
                        $.get("/api/most-visited/search", {data:input},
                            function (rsp) {           

                                vues.quest = rsp.quest.data
                                vues.first_page_url = rsp.quest.first_page_url
                                vues.last_page_url = rsp.quest.last_page_url
                                vues.last_page = rsp.quest.last_page
                                vues.prev_page_url = rsp.quest.prev_page_url
                                vues.next_page_url = rsp.quest.next_page_url
                                vues.current_page = rsp.quest.current_page
                                vues.path = rsp.quest.path
                                $("#searchbar").val(null);

                            },

                        );
                    
                });
                // Fillter Community
                $("#fillter-community").change(function (e) { 
                    e.preventDefault();
                    let id_community = $(this).val();
                    $.get("api/most-visited/fillter-community", {id_community:id_community},
                        function (rsp) {
                            console.log(rsp);
                            vues.quest = rsp.quest.data
                            vues.first_page_url = rsp.quest.first_page_url
                            vues.last_page_url = rsp.quest.last_page_url
                            vues.last_page = rsp.quest.last_page
                            vues.prev_page_url = rsp.quest.prev_page_url
                            vues.next_page_url = rsp.quest.next_page_url
                            vues.current_page = rsp.quest.current_page
                            vues.path = rsp.quest.path
                        },
                    );
                });
            },
            methods: {
                // sharelink
                copyPath(id){
                alert(id)
                    let Url = "{{route('questions-details',':id')}}"
                    urI = Url.replace(':id',id)
                    alert(urI)
                    setTimeout(async()=>console.log(
                        await window.navigator.clipboard.writeText(urI)), 1000)
            },
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
                            vues.quest = rsp.quest.data
                            vues.first_page_url = rsp.quest.first_page_url
                            vues.last_page_url = rsp.quest.last_page_url
                            vues.last_page = rsp.quest.last_page
                            vues.prev_page_url = rsp.quest.prev_page_url
                            vues.next_page_url = rsp.quest.next_page_url
                            vues.current_page = rsp.quest.current_page
                            vues.path = rsp.quest.path
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
                                vues.quest = rsp.quest.data
                                vues.first_page_url = rsp.quest.first_page_url
                                vues.last_page_url = rsp.quest.last_page_url
                                vues.last_page = rsp.quest.last_page
                                vues.prev_page_url = rsp.quest.prev_page_url
                                vues.next_page_url = rsp.quest.next_page_url
                                vues.current_page = rsp.quest.current_page
                                vues.path = rsp.quest.path
                                $("#search-pagginate").val(null);
                            }
                        });
                    }
                },
            },
            directives : {
                dateshow : function (value){
                    var date=moment(value).fromNow(); // here u modify data 
                    this.el.innerText=date; // and set to the view

                }
            }
        }).mount('#app')
    </script>    
@endpush