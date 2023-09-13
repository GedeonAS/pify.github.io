
<div class="middull-content">
    {{-- search bar --}}
    <form class="aq-form">
        <i class="ri-search-line"></i>
        <input id="searchbar" type="text" class="form-control" placeholder="Have a question? Ask or enter a search">
        <button id="search-button" class="aq-btn">
            Ask Question
        </button>       
    </form>

    <ul class="nav nav-tabs questions-tabs d-flex justify-content-between" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" @click="filterQuest(1)" id="recent-questions-tab" data-bs-toggle="tab" data-bs-target="#recent-questions" type="button" role="tab" aria-controls="recent-questions" aria-selected="true">
                Recent Questions
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" @click="filterQuest(2)" id="most-answered-tab" data-bs-toggle="tab" data-bs-target="#most-answered" type="button" role="tab" aria-controls="most-answered" aria-selected="false">
                Most Answered 
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" @click="filterQuest(3)" id="unanswered-question-tab" data-bs-toggle="tab" data-bs-target="#unanswered-question" type="button" role="tab" aria-controls="unanswered-question" aria-selected="false">
                Unanswered Question
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" @click="filterQuest(4)" id="featured-question-tab" data-bs-toggle="tab" data-bs-target="#featured-question" type="button" role="tab" aria-controls="featured-question" aria-selected="false">
                Featured Question
            </button>
        </li>
    </ul>

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="recent-questions" role="tabpanel" aria-labelledby="recent-questions-tab">
            <div v-for="quest in quest" class="single-qa-box like-dislike">
                <div class="d-flex">
                    <div class="link-unlike flex-shrink-0">
                        <a href="user.html">
                            <img src="{{asset('pify/assets/images/user/user-1.jpg')}}" alt="Image">
                        </a>

                        <div class="donet-like-list">
                            <button class="like-unlink-count like">
                                <i class="ri-thumb-up-fill"></i>
                                <span>@{{quest.like}}</span>
                            </button>
                        </div>

                        <div class="donet-like-list">
                            <button class="like-unlink-count dislike">
                            <i class="ri-thumb-down-fill"></i>
                                <span>@{{quest.dislike}}</span>
                            </button>
                        </div>
                    </div>

                    <div class="flex-grow-1 ms-4 text-md-left " style="max-width: 100%">
                        <ul class="graphic-design">
                            <li>
                                <a href="user.html">Teresa Klein</a>
                            </li>
                            <li>
                                <span>Latest Answer: 14 hours ago</span>
                            </li>
                            <li>
                                <span>In:</span>
                                <a href="tags.html" class="graphic">
                                    Graphic design
                                </a>
                            </li>
                        </ul>
                        
                        <div>
                            <h3 style="word-wrap:break-word">
                                <a href @click="toAnswer(quest.id)">
                                    @{{quest.title}}
                                </a>
                            </h3>

                            <p style="word-wrap:break-word" v-html="quest.question.length < 100 ? quest.question : quest.question.substring(0,250)+'...'">{{-- @{{quest.question.length < 100 ? quest.question : quest.question.substring(0,250)+"..." }} --}}</p>
                        </div>

                        <div class="row mb-4 px-3" style="max-width: 100%;">
                                <a href="" v-for="tag in quest.tag" style="font-size: 90%; width: 50%;"  class="text-center border col mt-2 me-1  p-2">
                                    <i class="">#@{{tag.tag}}</i>
                                </a>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <ul class="anser-list">
                                <li>
                                    <a href="polls.html">
                                        50 Vote
                                    </a>
                                </li>
                                <li>
                                    <a href="most-answered.html">
                                        2 Answer
                                    </a>
                                </li>
                                <li>
                                    <a href="most-visited.html">
                                        658 Views
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
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                            <a href="most-answered.html" class="default-btn">
                                Answer
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pagination-area">
                <a href="all-queations.html" class="next page-numbers">
                    <i class="ri-arrow-left-line"></i>
                </a>
                <span class="page-numbers current" aria-current="page">1</span>
                <a href="all-queations.html" class="page-numbers">2</a>
                <a href="all-queations.html" class="page-numbers">3</a>
                
                <a href="all-queations.html" class="next page-numbers">
                    <i class="ri-arrow-right-line"></i>
                </a>
            </div>
        </div>

        <div class="tab-pane fade" id="most-answered" role="tabpanel" aria-labelledby="most-answered-tab">
            <div v-for="questmo in quest_most" class="single-qa-box like-dislike">
                <div class="d-flex">
                    <div class="link-unlike flex-shrink-0">
                        <a href="user.html">
                            <img src="{{asset('pify/assets/images/user/user-1.jpg')}}" alt="Image">
                        </a>
                    </div>

                    <div class="flex-grow-1 ms-3" style="max-width: 100%">
                        <ul class="graphic-design">
                            <li>
                                <a href="user.html">Teresa Klein</a>
                            </li>
                            <li>
                                <span>Latest Answer: 14 hours ago</span>
                            </li>
                            <li>
                                <span>In:</span>
                                <a href="tags.html" class="graphic">
                                    Graphic design
                                </a>
                            </li>
                        </ul>

                        <div style="max-width: 100%">
                            <h3 style="word-wrap:break-word">
                                <a href @click="toAnswer(questmo.id)">
                                    @{{questmo.title}}
                                </a>
                            </h3>

                            <p style="word-wrap:break-word" v-html="questmo.question.length < 100 ? questmo.question : questmo.question.substring(0,250)+'...'">{{-- @{{quest.question.length < 100 ? quest.question : quest.question.substring(0,250)+"..." }} --}}</p>
                        </div>
                        <ul class="tag-list">
                            <li>
                                <a href="tags.html">Discussion</a>
                            </li>
                            <li>
                                <a href="tags.html">Photoshop</a>
                            </li>
                            <li>
                                <a href="tags.html">Analytics</a>
                            </li>
                        </ul>

                        <div class="d-flex justify-content-between align-items-center">
                            <ul class="anser-list">
                                <li>
                                    <a href="polls.html">
                                        24 Vote
                                    </a>
                                </li>
                                <li>
                                    <a href="most-answered.html">
                                        2 Answer
                                    </a>
                                </li>
                                <li>
                                    <a href="most-visited.html">
                                        658 Views
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
                                                </li>
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

            <div class="pagination-area">
                <a href="all-queations.html" class="next page-numbers">
                    <i class="ri-arrow-left-line"></i>
                </a>
                <span class="page-numbers current" aria-current="page">1</span>
                <a href="all-queations.html" class="page-numbers">2</a>
                <a href="all-queations.html" class="page-numbers">3</a>
                
                <a href="all-queations.html" class="next page-numbers">
                    <i class="ri-arrow-right-line"></i>
                </a>
            </div>
        </div>

        <div class="tab-pane fade" id="unanswered-question" role="tabpanel" aria-labelledby="unanswered-question-tab">
            <div v-for="questun in quest_unans" class="single-qa-box like-dislike">
                <div class="d-flex">
                    <div class="link-unlike flex-shrink-0">
                        <a href="user.html">
                            <img src="{{asset('pify/assets/images/user/user-1.jpg')}}" alt="Image">
                        </a>

                        <div class="donet-like-list">
                            <button class="like-unlink-count like">
                                <i class="ri-thumb-up-fill"></i>
                                <span>20</span>
                            </button>
                        </div>

                        <div class="donet-like-list">
                            <button class="like-unlink-count dislike">
                            <i class="ri-thumb-down-fill"></i>
                                <span>25</span>
                            </button>
                        </div>
                    </div>

                    <div class="flex-grow-1 ms-3" style="max-width: 100%">
                        <ul class="graphic-design">
                            <li>
                                <a href="user.html">Teresa Klein</a>
                            </li>
                            <li>
                                <span>Latest Answer: 14 hours ago</span>
                            </li>
                            <li>
                                <span>In:</span>
                                <a href="tags.html" class="graphic">
                                    Graphic design
                                </a>
                            </li>
                        </ul>

                        <div style="max-width: 100%">
                            <h3 style="word-wrap:break-word">
                                <a href="" @click="toAnswer(questun.id)">
                                    @{{questun.title}}
                                </a>
                            </h3>
                        </div>

                        <ul class="tag-list">
                            <li>
                                <a href="tags.html">Discussion</a>
                            </li>
                            <li>
                                <a href="tags.html">Photoshop</a>
                            </li>
                            <li>
                                <a href="tags.html">Analytics</a>
                            </li>
                        </ul>

                        <div class="d-flex justify-content-between align-items-center">
                            <ul class="anser-list">
                                <li>
                                    <a href="polls.html">
                                        20 Vote
                                    </a>
                                </li>
                                <li>
                                    <a href="most-visited.html">
                                        658 Views
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
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                            <a href="most-answered.html" class="default-btn">
                                Answer
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pagination-area">
                <a href="all-queations.html" class="next page-numbers">
                    <i class="ri-arrow-left-line"></i>
                </a>
                <span class="page-numbers current" aria-current="page">1</span>
                <a href="all-queations.html" class="page-numbers">2</a>
                <a href="all-queations.html" class="page-numbers">3</a>
                
                <a href="all-queations.html" class="next page-numbers">
                    <i class="ri-arrow-right-line"></i>
                </a>
            </div>
        </div>

        <div class="tab-pane fade" id="featured-question" role="tabpanel" aria-labelledby="featured-question-tab">
            <div v-for="questfe in quest_featur" class="single-qa-box like-dislike">
                <div class="d-flex">
                    <div class="link-unlike flex-shrink-0">
                        <a href="user.html">
                            <img src="{{asset('pify/assets/images/user/user-1.jpg')}}" alt="Image">
                        </a>

                        <div class="donet-like-list">
                            <button class="like-unlink-count like">
                                <i class="ri-thumb-up-fill"></i>
                                <span>22</span>
                            </button>
                        </div>

                        <div class="donet-like-list">
                            <button class="like-unlink-count dislike">
                            <i class="ri-thumb-down-fill"></i>
                                <span>25</span>
                            </button>
                        </div>
                    </div>

                    <div class="flex-grow-1 ms-3" style="max-width: 100%">
                        <ul class="graphic-design">
                            <li>
                                <a href="user.html">Teresa Klein</a>
                            </li>
                            <li>
                                <span>Latest Answer: 14 hours ago</span>
                            </li>
                            <li>
                                <span>In:</span>
                                <a href="tags.html" class="graphic">
                                    Graphic design
                                </a>
                            </li>
                        </ul>

                        <div style="max-width: 100%">
                            <h3 style="word-wrap:break-word">
                                <a href @click="toAnswer(questfe.id)">
                                    @{{questfe.title}}
                                </a>
                            </h3>

                            <p style="word-wrap:break-word" v-html="questfe.question.length < 100 ? questfe.question : questfe.question.substring(0,250)+'...'">{{-- @{{quest.question.length < 100 ? quest.question : quest.question.substring(0,250)+"..." }} --}}</p>
                        </div>
                        
                        <ul class="tag-list">
                            <li>
                                <a href="tags.html">Discussion</a>
                            </li>
                            <li>
                                <a href="tags.html">Photoshop</a>
                            </li>
                            <li>
                                <a href="tags.html">Analytics</a>
                            </li>
                        </ul>

                        <div class="d-flex justify-content-between align-items-center">
                            <ul class="anser-list">
                                <li>
                                    <a href="polls.html">
                                        22 Vote
                                    </a>
                                </li>
                                <li>
                                    <a href="most-answered.html">
                                        2 Answer
                                    </a>
                                </li>
                                <li>
                                    <a href="most-visited.html">
                                        658 Views
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
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                            <a href="most-answered.html" class="default-btn">
                                Answer
                            </a>
                        </div>
                    </div>
                </div>
                <span class="featured">Featured</span>
            </div>

            <div class="pagination-area">
                <a href="all-queations.html" class="next page-numbers">
                    <i class="ri-arrow-left-line"></i>
                </a>
                <span class="page-numbers current" aria-current="page">1</span>
                <a href="all-queations.html" class="page-numbers">2</a>
                <a href="all-queations.html" class="page-numbers">3</a>
                
                <a href="all-queations.html" class="next page-numbers">
                    <i class="ri-arrow-right-line"></i>
                </a>
            </div>
        </div>
    </div>
</div>
