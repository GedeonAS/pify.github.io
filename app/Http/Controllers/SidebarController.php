<?php

namespace App\Http\Controllers;

use App\Answer;
use Illuminate\Http\Request;
use App\Communities;
use App\Question;
use App\User;
use App\Tags;
use App\Answer_Comment;
use Illuminate\Support\Facades\DB;

class SidebarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {   

        // AllCommunity
        $data = Communities::all();
        // TopDiscus
        $top_discus =
                        DB::select('SELECT tbl_questions.title,COUNT(tbl_answers.answer) AS total_answer
                        FROM tbl_questions 
                        JOIN tbl_answers 
                        ON tbl_answers.id_question = tbl_questions.id
                        GROUP BY tbl_questions.title
                        ORDER BY total_answer desc LIMIT 4');
        // Recent Posts
        $recent_post = Question::with('user')->orderBy('created_at','desc')->limit(4)->get();
        // Quest
        $quest = Question::count();
        if ($quest > 999) {
            $num_back = floor(($quest % 1000)/100);
            $num_front = floor($quest / 1000);
            $quest_count = $num_front.'.'.$num_back.'K';
        }else {
            $quest_count = floor($quest);
        }
        // Answer
        $answer = Answer::count();
        if ($answer > 999) {
            $num_back = floor(($answer % 1000)/100);
            $num_front = floor($answer / 1000);
            $answer_count = $num_front.'.'.$num_back.'K';
        }else {
            $answer_count = floor($answer);
        }
        // Users
        $users = User::count();
        if ($users > 999) {
            $num_back = floor(($users % 1000)/100);
            $num_front = floor($users / 1000);
            $user_count = $num_front.'.'.$num_back.'K';
        }else {
            $user_count = floor($users);
        }

        // Top Memeber
        $top_members = DB::select(
        'SELECT 
        users.name ,COUNT(tbl_questions.question) AS total_qs
        FROM users JOIN tbl_questions ON
        tbl_questions.id_user_dil = users.id
        GROUP BY users.name LIMIT 5');

        // Most Popular Tags
        $trending_tags = Tags::withCount('quest_tags')->having('quest_tags_count','>',0)->orderBy('quest_tags_count','desc')->limit(9)->get();
        // Commnet
        $count_comment = Answer_Comment::count();

        
        return response()->json([
            'comuni' => $data,
            'top_discus' => $top_discus,
            'top_members' => $top_members,
            'quest_count' => $quest_count,
            'answer_count' => $answer_count,
            'user_count' => $user_count,
            'trending_tags' => $trending_tags,
            'recent_post' => $recent_post,
            'count_comment' => $count_comment,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
