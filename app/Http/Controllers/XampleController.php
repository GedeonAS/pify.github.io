<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Classe;
use App\Mapel;
use App\Question;
use App\Type;
use App\User_Detail;
use App\Tags;
use App\User;
use App\Answer_Comment;
use App\Question_Comment;
use App\Question_Tags;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Communities;
use Illuminate\Database\Eloquent\Builder;

use Illuminate\Http\Request;

class XampleController extends Controller
{
    public function my()
    {    
    // $like = DB::table('tbl_likes')
        // ->where('id_quest',7)->where('id_user',1)->count();
        // $dislike = DB::table('tbl_dislikes')
        // ->where('id_quest',7)->where('id_user',1)->count();
        // $l = DB::table('tbl_likes')->whereRaw('id_user','=',1,'and','id_quest','=',7)->count();
        // Storage::disk('public')->delete('photos/qGp7Q0rMgnfuA0pNSGsFaBJF4HgplHh4qgUnZTUS.png');
        // return Storage::files('photos');
        // $id = 1;
        // $kelas = "s";
        // $getid = DB::table('tbl_user_details')->where('id_user',$i)->get();
        // $id = User_Detail::where('id_user',$i)->pluck('id');

        // $id = DB::table('users')->orderBy('level', 'desc')->limit(1)->pluck('level');

        // foreach ($id as $all ) {
        //     # code...
        // }
        
        // $all = User::find($id);
                
        // if ($gender != null) {
        //     # code...
            
        //     $all = $gender;
            
        // }
        // if ($kelas != null) {
        //     # code...
            
        //     $all = $kelas;
            
        // }
        // $a = Question::pluck('tags');
    //     $a = Question::join('tbl_tags', function ($join) {
    //     $join->on(DB::raw('find_in_set(json_decode(tbl_questions.tags), tbl_tags.id)'), DB::raw(''), DB::raw(''));
    // })
    // ->get(); 
    // foreach ($a as $a) {
        //     $all =  json_decode($a);
        //     // $all1 = $al[0];
        //     // $all2 = $al[1];
        //     // $all3 = $al[2];
        //     // $all4 = $al[3];
        //     // $all5 = $al[4];
        // }
        // $all = Answer_Comment::where('id_answer',18)->where('id_question',44)->get();
        // return $all;
        // $name_mapel = Question::find(1)->mapel;
        // dd($all1.$all2.$all3.$all4.$all5);
        // $a = $al->quest_tag;
        // $a = Question_Tags::fild(1);
        // $a->save();
        // $al = /* Question::with('tag')->get(); */DB::table('tbl_questions')->with('tag')->get();
        
        // foreach ($al as $it) {
        //     # code...
        //     $sit = $it->tag;
        // }
        // dd($al);
        // $all = $al;

    // $al = Question::find(24)->pluck('path_img');
    // $var = Communities::with('followers')->get();
        // $posts = Communities::whereDoesntHave('followers', function (Builder $query) {
        //     $query->where('id_user', '1');
        // })->get();
    // $var = Question::find(1)->tag;
    // $posts = User::find(1)->community;
    // $posts = DB::table('tbl_question_tags')->selectRaw('count(id_tag) as num,id_tag')->groupBy('id_tag')->get();
    // $id = 1;
    // $id_community = 14;
    // if ($id == 1) {

    //     if ($id_community == 0) {
    //         $posts = Question::with('tag')
    //         ->latest()
    //         ->get(); 
    //     }
    //     if (!$id_community == 0) {
            
    //         $posts = Question::with('tag')
    //         ->where('id_comunity',$id_community)
    //         ->latest()
    //         ->get(); 
    //     }
    // }
    // $posts = Question::where('id_type',1)->latest()->first();
    // $posts = DB::select('SELECT tbl_questions.title,COUNT(tbl_answers.answer) AS total_answer
    // FROM tbl_questions 
    // JOIN tbl_answers 
    // ON tbl_answers.id_question = tbl_questions.id
    // GROUP BY tbl_questions.title
    // ORDER BY total_answer desc LIMIT 4');
    // $count = 999;

    // if ($count > 999) {
    //     $num_back = floor(($count % 1000)/100);
    //     $num_front = floor($count / 1000);
    //     $posts = $num_front.'.'.$num_back.'K';
    // }else {
    //     $posts = floor($count);
    // }
//     $postss = DB::select('SELECT 	tbl_questions.*,
//     COUNT(tbl_answers.answer) AS total_answer,
//     COUNT(tbl_likes.id) AS likes,
//     COUNT(tbl_dislikes.id) AS dislikes,
//     tbl_communities.community
// FROM tbl_questions 
// LEFT JOIN tbl_communities ON tbl_communities.id = tbl_questions.id_comunity
// LEFT JOIN tbl_answers ON tbl_answers.id_question = tbl_questions.id
// LEFT JOIN tbl_likes ON tbl_likes.id_quest = tbl_questions.id
// LEFT JOIN tbl_dislikes ON tbl_dislikes.id_quest = tbl_questions.id
// GROUP BY tbl_questions.id
// ORDER BY tbl_questions.views DESC
// ');
// $posts = $postss::with('tag')->get();
    // $posts = DB::table('tbl_questions')
    //             ->select('tbl_questions.*',
    //                         DB::raw('count(tbl_answers.answer) as total'))   
    //             ->leftjoin('tbl_answers','tbl_answers.id_question','=','tbl_questions.id')
    //             ->groupBy('tbl_questions.id')
    //             ->get();
    // $posts = Question::with('tag','user')->withCount('tag','likes','dislikes')->get();
    // $postss = Question::find(1);
    // $posts = Question::with('tag','user','community')->withCount('tag','answers')->orderBy('views','desc')->paginate(10);
    // $posts = Question::with('tag')->withCount('likes')->having('likes_count','>', 0)->get();
    // $posts = Tags::withCount('quest_tags')->having('quest_tags_count','>',0)->orderBy('quest_tags_count','desc')->limit(9)->get();
    // $posts = Question::with('tag','user','community')
    // ->withCount('tag','answers')
    // ->where('id_comunity',2)
    // ->orderBy('views','desc')
    // ->paginate(10); 
    // $posts = Answer_Comment::with('user')->where('id_answer',16)->where('id_question',5)->get();
    $data = 'c';
 
    // $posts = Communities::where('community','like','%'.$data.'%')->whereDoesntHave('followers', function (Builder $query) {
    //     $query->where('id_user',1);
    // })->get();
//    $posts =  User::find(1)->community()->where('community','like','%'.$data.'%')->get();
        // $posts = Answer::withCount(['likes','likes as load_like' => function ($query) {
        //     $query->where('id_user',1);
        //     },
        // ])->get();
        $id_user = 1;
        $posts = Answer::with('user')->withCount(['dislikes','likes',

        'likes as load_like' => function ($query) use ($id_user) {
            $query->where('id_user',$id_user);
        },

        'dislikes as load_dislike' => function ($query) use ($id_user) {
            $query->where('id_user',$id_user);
        },

        ])->where('id_question',1)->get();
    return $posts;
    }
    public function filter(){
        $filc = Classe::all();
        $filt = Type::all();
        $film = Mapel::all();

        // return ($filc ->'class', $filt $film);
        return compact('filc','film','filt');
    }
    /**
     * Display a listing of the resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show_question(Request $request)
    {
        
        if (request()->ajax()) {

        $clas = $request->clas;
        $mapel = $request->mapel;
        $type = $request->type;
        
        // $question = Question::all();
        $question = DB::table('tbl_questions')->get();

        if (($clas)!=null) {
            # code...
            $question = $question->where('id_kelas',$clas);
        }
        if (($mapel)!=null) {
            # code...
            $question = $question->where('id_mapel',$mapel);
        }
        if (($type)!=null) {
            # code...
            $question = $question->where('id_type',$type);
        }

            return $question;
    }
        
    }

    public function search(Request $request)
    {   
        $data = $request->data;
        $quest = DB::table('tbl_questions')->where('question','like','%'.$data.'%')->get();
        // dd($quest);
        return $quest;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id_user = $request->user;
        $qs = $request->text;
        $clas = $request->clas;
        $typ = $request->typ;

        if ( $qs === null ) {
            # code...
            return "kosong";
        };
        
        if ( $typ === null ) {
            # code...
            return "kopsong";
        };

        if ( $clas === null ) {
            # code...
            return "kopong";
        };
        
        
        $quest = new Question;
        
        $quest->question = $qs;
        $quest->id_kelas = $clas;
        $quest->id_mapel = $typ;
        $quest->id_user_dil = $id_user;
        $quest->id_type = "0";
        
        $quest->save();

        // return redirect()->route('answer');
        // return response()->json("success");
        // return compact('qs','clas','typ','id_user','request');

    }

}
