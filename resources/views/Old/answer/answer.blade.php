<div>
    <div id="sJawaban" class="pt-5">
        <div class=" ms-auto" style="width: 85%; margin-top: 30px;">
            <h4 class="mb-0">JAWABAN :</h4>
            <hr>
        </div>
        <div v-for="ans in answer" class="single-qa-box card mt-3 ms-auto" style="width: 85%;">
            <div class="d-flex">
                <div  class="flex-grow-1 ms-3 container">
                    <ul class="graphic-design">
                        <li>
                            <a>
                                <img src="{{asset('template/pify/assets/images/user/user-1.jpg')}}" alt="Image">
                            </a>
                        </li>
                        <li> 
                            <a href="#">Mtk</a>
                        </li>
                        <li>
                            <span>14 hours ago</span>
                        </li>
                    </ul>
                    <h3>
                        <pre style="font-family:Arial, Helvetica, sans-serif;">@{{ans.answer}}</pre>
                    </h3>
                    <div class="d-flex bd-highlight align-items-center py-4">
                        <a href="#" class="bd-highlight">
                            <span><i class="fa-solid fa-thumbs-up fs-4"></i> 10 </span>
                        </a>
                        <a href="#" class="bd-highlight ms-5">
                            <span><i class="fa-solid fa-thumbs-down fs-4"></i> 10 </span>
                        </a>
                    </div>
                </div>
            </div>
            <hr>

              
                <button style="border-radius:0px ;" class="btn btn-outline-warning mb-3" type="button" @click="showComnt(ans.id)" >
                  Komentar
                </button>
                <div  v-for="c in comment">
                
                    <div class="container" v-if="ans.id == c.id_answer">
                        <div :id="'comment' + ans.id"  class="d-flex align-items-center mb-2">
                            <a href="#">
                                <img src="{{asset('template/pify/assets/images/user/user-1.jpg')}}" alt="Image" class="img-cmn">
                            </a>
                            <p>@{{c.comment}}</p>
                        </div>
                    </div>
                    
                    <div v-else class="d-none">
                        
                    </div>
                    
                </div>
              
            <input :id="'komen'+ans.id" name="comment" @keyup.enter="greet(ans.id)" type="text" class="form-control comment mt-3" placeholder="Komentar">
        </div>
    </div>
</div>