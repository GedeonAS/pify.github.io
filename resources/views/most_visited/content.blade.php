<div class="middull-content">
    <ul class="page-nish">
        <li>
            <a href="index.html">
                <i class="ri-home-8-line"></i>
                Home
            </a>
        </li>
        <li class="active">
            Most visited
        </li>
    </ul>

    <form class="aq-form">
        <i class="ri-search-line"></i>
        <input id="searchbar" type="text" class="form-control" placeholder="Have a question? Ask or enter a search">
        <button id="search-button" class="aq-btn">
            Ask Question
        </button>
    </form>

    <div class="most-visited-content">
        <div v-for="item in quest" class="single-qa-box like-dislike">
            <div class="d-flex mid-content-quest-mv">
                <div class="link-unlike flex-shrink-0">
                    <a href="user.html">
                        <img src="assets/images/user/user-1.jpg" alt="Image">
                    </a>
                </div>

                <div class="flex-grow-1 ms-3" style="max-width: 100%">
                    <ul class="graphic-design">
                        <li>
                            <a href="user.html">@{{item.user.name}}</a>
                        </li>
                        <li>
                            <span>Latest Answer: 14 hours ago</span>
                        </li>
                        <li>
                            <span>In : </span>
                            <a v-if="item.community === null" href="tags.html" class="graphic">
                                Public
                            </a>
                            <a v-else href class="graphic">
                                @{{item.community.community}}
                            </a>
                        </li>
                    </ul>

                    <div>

                        <h3>
                            <a style="word-wrap:break-word"  href="queations-details.html">
                                @{{item.title}}
                            </a>
                        </h3>
                        
                        <p style="word-wrap:break-word" style="word-wrap:break-word" v-html="item.question.length < 100 ? item.question : item.question.substring(0,250)+'...'"></p>
                    </div>

                    <div class="row mb-4 px-3" style="max-width: 100%;">
                        <a href="" v-for="tag in item.tag" style="font-size: 90%; width: 50%;"  class="text-center border col mt-2 me-1  p-2">
                            <i class="">#@{{tag.tag}}</i>
                        </a>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <ul class="anser-list">
                            <li>
                                <a href="polls.html">
                                    24 Vote
                                </a>
                            </li>
                            <li>
                                <a href="most-answered.html">
                                    @{{item.answers_count}} Answer
                                </a>
                            </li>
                            <li>
                                <a href="most-visited.html">
                                    @{{item.views}} Views
                                </a>
                            </li>
                            <li>
                                <ul class="qa-share">
                                    <li class="share-option">
                                        <span>
                                            <i class="ri-share-fill"></i>
                                        </span>
                                        
                                        <ul class="social-icon">
                                            <li>
                                                <a @click="copyPath(item.id)">
                                                    <i class="ri-file-copy-line"></i>
                                                </a>
                                            </li>
                                            {{-- <li>
                                                <a href="https://www.facebook.com/" target="_blank">
                                                    <i class="ri-facebook-fill"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.twitter.com/" target="_blank">
                                                    <i class="ri-twitter-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.linkedin.com/" target="_blank">
                                                    <i class="ri-linkedin-fill"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.instagram.com/" target="_blank">
                                                    <i class="ri-instagram-line"></i>
                                                </a>
                                            </li> --}}
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                        <a href="most-answered.html" class="default-btn bg-ea4335">
                            Question
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- pagginate --}}
        <div class="col-12 px-5 pt-5">
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