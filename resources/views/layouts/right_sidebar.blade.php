<div id="aside" class="col-lg-3">
    <div id="aps" class="right-siderbar">
        
        <div class="right-siderbar-common">
            <a href="{{route('ask-questions')}}" class="default-btn">
                Ask a question 
            </a>
        </div>

        <div id="side-community" class="right-siderbar-common">
            <div class="category-communities">
                <h3>
                    <i class="ri-list-unordered"></i>
                    Communities
                </h3>

                <select class="form-select" id="fillter-community" aria-label="Default select example">
                    <option disabled selected  value="">Select Communities</option>
                    <option value="0">All Communities</option>
                    <option v-for="item in data" :value="item.id">@{{item.community}}</option>
                </select>
            </div>
        </div>

        <div class="right-siderbar-common">
            <div class="discussions">
                <h3>
                    <i class="ri-speaker-line"></i>
                    Top Discussions
                </h3>

                <ul v-for="item in top_discus">
                    <li>
                        <a href="most-answered.html">
                            @{{item.title}}
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="right-siderbar-common">
            <div class="answer-count">
                <ul class="d-flex flex-wrap">
                    <li>
                        <span>Questions</span>
                        <span class="count">@{{count_quest}}</span>
                    </li>
                    <li>
                        <span>Answers</span>
                        <span class="count">@{{count_answer}}</span>
                    </li>
                    <li>
                        <span>Best answers</span>
                        <span class="count">324</span>
                    </li>
                    <li>
                        <span>Users</span>
                        <span class="count">@{{count_user}}</span>
                    </li>
                    <li>
                        <span>Posts</span>
                        <span class="count">@{{count_quest + count_answer}}</span>
                    </li>
                    <li>
                        <span>Comments</span>
                        <span class="count">@{{count_comment}}</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="right-siderbar-common">
            <div class="recent-post">
                <h3>
                    <i class="ri-discuss-line"></i>
                    Recent post
                </h3>

                <ul v-for="item in recent_post">
                    <li>
                        <a href="most-answered.html">
                            @{{item.title}}
                        </a>
                        <p>8 hours ago by <a href>@{{item.user.name}}</a></p>
                    </li>
                </ul>
            </div>
        </div>

        <div class="right-siderbar-common">
            <div class="top-members">
                <h3>
                    <i class="ri-discuss-line"></i>
                    Top members
                </h3>

                <ul>
                    <li v-for="item in top_members">
                        <a href="groups.html">
                            <img src="assets/images/user/user-8.jpg" alt="Image">
                            <p>@{{item.name}}</p>
                            <span>@{{item.total_qs}} Questions</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        {{-- <div class="right-siderbar-common">
            <div class="ads">
                <a href="queations-details.html">
                    <img src="assets/images/ad.jpg" alt="Image">
                </a>

                <a href="queations-details.html" class="default-btn">
                    Learn More
                </a>
            </div>
        </div> --}}

        <div class="right-siderbar-common">
            <div class="trending-tags">
                <h3>
                    <i class="ri-price-tag-3-line"></i>
                    Trending Tags
                </h3>

                <ul>
                    <li v-for="item in trending_tags">
                        <a href="tags.html">
                            @{{item.tag}}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
