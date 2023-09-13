<ul class="answerss d-flex justify-content-between align-items-center">
    <li>
        <h3>2 Answers</h3>
    </li>
    <li>
        <select id="fillter-answer" class="form-select" aria-label="Default select example">
            <option selected>All answer</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
    </li>
</ul>

<div v-for="item in answer" class="answer-question-details like-dislike">
    <div class="d-flex">
        <div class="link-unlike flex-shrink-0">
            <a href="">
                <img style="max-width: 55px; height:auto;" src="{{asset('pify/assets/images/user/user.jpeg')}}" alt="Image">
            </a>
            <div class="donet-like-list">
                <button v-if="item.load_like === 1" :class="'like-unlink-count '+'answer-link'+item.id+' like active'" name="answer-like" @click="likE(item.id)">
                    <i class="ri-thumb-up-fill"></i>
                    <span>@{{item.likes_count}}</span>
                </button>
                <button v-else :class="'like-unlink-count '+'answer-link'+item.id+' like'" name="answer-like" @click="likE(item.id)">
                    <i class="ri-thumb-up-fill"></i>
                    <span>@{{item.likes_count}}</span>
                </button>
            </div>

            <div class="donet-like-list">
                <button v-if="item.load_dislike === 1" :class="'like-unlink-count '+'answer-link'+item.id+' dislike active'" name="answer-dislike" @click="dislikE(item.id)" >
                    <i class="ri-thumb-down-fill"></i>
                    <span>@{{item.dislikes_count}}</span>
                </button>
                <button v-else :class="'like-unlink-count '+'answer-link'+item.id+' dislike'" name="answer-dislike" @click="dislikE(item.id)" >
                    <i class="ri-thumb-down-fill"></i>
                    <span>@{{item.dislikes_count}}</span>
                </button>
            </div>
        </div>

        <div class="flex-grow-1 ms-3">
            <ul class="latest-answer-list">
                <li>
                    <a href="user.html">@{{item.user.name}}</a>
                </li>
                <li>
                    <span>Latest Answer: 2 hours ago</span>
                </li>
                @auth                    
                    <li class="replays">
                        <p type="button" id="reply" @click="repLy(item.id)" style="color: orange;">
                            <b> Replay </b>
                        </p>
                    </li>
                @endauth
            </ul>

            <p>@{{item.answer}}</p>

         </div>
        </div>
    </div>
    @include('question.detail.reply')
