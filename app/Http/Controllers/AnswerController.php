<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Answer;
use App\Question;
use App\Answer_Comment;
use App\Dislikes_Answer;
use App\Likes_Answer;
use App\Question_Comment;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        if ($id == "null") {
            # code...
            $quest = DB::table('tbl_questions')->latest()->first();
        }else{
            $quest = Question::find($id);
        }
        // dd($quest);
        return view('answer.index',compact('quest','id'));
    }

    public function show_answer(Request $request)
    {

            $id_user = $request->id_user;
            $id = $request->id_quest;
            $jumlah = $request->jumlah;

            if ($jumlah > 0) {
                $answer = Answer::with('user')->withCount(['dislikes','likes',

                'likes as load_like' => function ($query) use ($id_user) {
                    $query->where('id_user',$id_user);
                },

                'dislikes as load_dislike' => function ($query) use ($id_user) {
                    $query->where('id_user',$id_user);
                },

                ])->where('id_question',$id)->limit($jumlah)->get();
            }else{
                $answer = Answer::with('user')->withCount(['dislikes','likes',

                'likes as load_like' => function ($query) use ($id_user) {
                    $query->where('id_user',$id_user);
                },

                'dislikes as load_dislike' => function ($query) use ($id_user) {
                    $query->where('id_user',$id_user);
                },

                ])->where('id_question',$id)->get();
            }
            return response()->json(['answer' => $answer]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $id = $request->id_quest;
        $answer = new Answer();
        $quest = Question::find($id);
        $input_answer = $request->text;

        if ( $input_answer === null ) {
            return "kosong";
        };

        $answer->id_question = $request->id_quest;
        $answer->id_user_dil = $request->id_user;
        $answer->answer = $input_answer;

        $answer->save();

        $quest->id_type = 2;

        $quest->save();        
        return response()->json(['answer'=> $input_answer]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function likedislike(Request $request)
    {
        $id = $request->id;
        $id_user = $request->id_user;
        $id_quest = $request->id_quest;

        $like = DB::table('tbl_likes')
            ->where('id_quest',$id_quest)->where('id_user',$id_user)->count();
            
        $dislike = DB::table('tbl_dislikes')
            ->where('id_quest',$id_quest)->where('id_user',$id_user)->count();
            
        if ($like > 0) {
            $disorlike = 'like';
        }
        if ($dislike > 0) {
            $disorlike = 'dislike';
        }
        
        return response()->json($disorlike);
    }

    public function likedislikestore(Request $request)
    {
        $id_answer = $request->id_answer;
        $id_user = $request->id_user;
        $id_quest = $request->id_quest;
        $type = $request->type;

        if ($type === 'like') {
            // rmdislike
            DB::table('tbl_answer_dislikes')
            ->where('id_quest',$id_quest)->where('id_user',$id_user)->where('id_answer',$id_answer)->delete();
            // like
            $like = new Likes_Answer();

            $like->id_answer = $id_answer;
            $like->id_quest = $id_quest;
            $like->id_user = $id_user;
            $like->save();
        }
        if ($type === 'dislike') {
            // rmlike
            DB::table('tbl_answer_likes')
            ->where('id_quest',$id_quest)->where('id_user',$id_user)->where('id_answer',$id_answer)->delete();
            // dislike
            $dislike = new Dislikes_Answer();

            $dislike->id_answer = $id_answer;
            $dislike->id_quest = $id_quest;
            $dislike->id_user = $id_user;
            $dislike->save();
        }
        if ($type === 'likeremove') {
            // rmlike
            DB::table('tbl_answer_likes')
            ->where('id_quest',$id_quest)->where('id_user',$id_user)->where('id_answer',$id_answer)->delete();
        }
        if ($type === 'dislikeremove') {
            // rmdislike
            DB::table('tbl_answer_dislikes')
            ->where('id_quest',$id_quest)->where('id_user',$id_user)->where('id_answer',$id_answer)->delete();
        }
        
        return response()->json("success");
    }
    public function storeComent(Request $request)
    {

        // $commnet_quest = $request->commnet_quest;
        $id_user = $request->id;
        $id_quest = $request->id_quest;
        $id_answer = $request->id_answer;
        $comment = $request->comment;

        // if ($commnet_quest != null) {
            
        //     $qus_comment = new Question_Comment();

        //     $qus_comment->id_user = $request->id_user;
        //     $qus_comment->comment = $commnet_quest;
        //     $qus_comment->id_question = $id_quest;
        //     $qus_comment->save();

        //     $cek = "qus";
        //     $comment = Question_Comment::where('id_question',$id_quest)->get();

        //     return compact('comment','cek');
        //     // return ;

        // }else{
            $ans_comment = new Answer_Comment();
    
            $ans_comment->id_user = $id_user;
            $ans_comment->id_question = $id_quest;
            $ans_comment->id_answer = $id_answer;
            $ans_comment->comment = $comment;
    
            $ans_comment->save();
    
            $comment = Answer_Comment::with('user')->where('id_answer',$id_answer)->where('id_question',$id_quest)->get();
            
            
            return $comment ;

        // }
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
    public function showComment(Request $request)
    {
        // $id_user = $request->id_user;
        $id_answer = $request->id_answer;
        $id_quest = $request->id_quest;
        // if ($id_answer == null) {
        //     # code...
        //     $comment = Question_Comment::where('id_user',$id_user)->where('id_question',$id_quest)->get();
        //     $cek = "one";
        //     return  compact('cek','comment');
        // } else {
            # code...
            $comment = Answer_Comment::with('user')->where('id_answer',$id_answer)->where('id_question',$id_quest)->get();
            // $cek = "two";
            return $comment;
        // }
        
    }
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
    public function goToquest($data)
    {
        $input = $data;
        // dd($dnew);
        return redirect('/dashboard')->with([ 'data' => $input ]);
    }
}
