

<script>
	const { createApp } = Vue

    const vues = createApp({
        data() {
            return {
                quest :'',
                quest_most :'',
                quest_unans :'',
                quest_featur :'',
                id  : '',
            }
        },mounted() {
            
            $(document).ready(function (e) {
				// load all question   
                if (page = 1) {                    
                    ajax = $.ajax({
                        url: "/api/quest/show",
                        data: 'id='+1,
                        success: function(rsp){
                            
                            vues.quest = rsp.question_all ;
                            vues.quest_most = rsp.question_most ;
                            vues.quest_unans = rsp.question_unans ;
                            vues.quest_featur = rsp.question_feature ;
                            vues.id = rsp.id ;
                            
                        }
                     }); 
                } 
                 // SearchBar
				$("#searchbar").keypress(function (e) { 
                    
                    if (e.which == 13) {
						e.preventDefault(); 
                        
                        var input = $("#searchbar").val();
                        var id = vues.id;
                        $.get("/api/quest/search", {data:input,id:id},
                            function (data) {           

                                vues.quest = data.question_all ;
                                vues.quest_most = data.question_most ;
                                vues.quest_unans = data.question_unans ;
                                vues.quest_featur = data.question_feature ;
                                $("#searchbar").val(null);

                            },

                        );
                    }
                });
                // search button
                $("#search-button").click(function (e) { 
                    e.preventDefault();

                    var input = $("#searchbar").val();
                        var id = vues.id;
                        $.get("/api/quest/search", {data:input,id:id},
                            function (data) {           

                                vues.quest = data.question_all ;
                                vues.quest_most = data.question_most ;
                                vues.quest_unans = data.question_unans ;
                                vues.quest_featur = data.question_feature ;
                                $("#searchbar").val(null);

                            },

                        );
                    
                });
                // Fillter Community
                $("#fillter-community").change(function (e) { 
                    e.preventDefault();
                    let id_community = $(this).val();
                    let type = vues.id
                    $.get("api/quest/fillter-community", {id_community:id_community,type:type},
                        function (rsp) {
                            vues.quest = rsp.question_all ;
                            vues.quest_most = rsp.question_most ;
                            vues.quest_unans = rsp.question_unans ;
                            vues.quest_featur = rsp.question_feature ;
                            vues.id = rsp.id ;

                        },
                    );
                });
            });
            
        },methods: {
			filterQuest(id){
                
				$.ajax({
                    url: "/api/quest/show",
					data:{id:id},
                    success: function(rsp){

                        $('#fillter-community').prop('selectedIndex',0);

                        vues.quest = rsp.question_all ;
                        vues.quest_most = rsp.question_most ;
                        vues.quest_unans = rsp.question_unans ;
                        vues.quest_featur = rsp.question_feature ;
                        vues.id = rsp.id ;
                        
                    }
                 }); 
			},
            toAnswer(id){
                $(document).ready(function () {
                    
                    let url = "{{route('questions-details',':id')}}"
                    url = url.replace(':id',id)
                    alert(url)
                    location.href = url;
                });
            },
            copyPath(id){
                alert(id)
                    let Url = "{{route('questions-details',':id')}}"
                    urI = Url.replace(':id',id)
                    alert(urI)
                    setTimeout(async()=>console.log(
                        await window.navigator.clipboard.writeText(urI)), 1000)
            }
        },
    }).mount('#app') 
</script>

