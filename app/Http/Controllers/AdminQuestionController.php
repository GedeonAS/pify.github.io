<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Question;
use Illuminate\Support\Facades\Storage;


class AdminQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::all();

        return view('Admin.question.index',compact('questions'));
        // return view('Admin.question.index');
    }

    public function indexPending()
    {
        $quest = Question::all();
        return view('Admin.question.pending', compact('quest'));
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
    public function editQuest($id)
    {
        $qs = Question::find()->pluck('question');
        return "ssssssss";


    }
    public function showQuest()
    {
        $questions = DB::table('tbl_questions')
        ->where('id_status',2)
        ->leftjoin('users', 'tbl_questions.id_user_dil' , '=' ,'users.id')
        ->leftjoin('tbl_types', 'tbl_questions.id_type' , '=' ,'tbl_types.id')
        ->leftjoin('tbl_communities', 'tbl_questions.id_comunity' , '=' ,'tbl_communities.id')
        ->select('tbl_questions.*' , 'users.name', 'tbl_types.nama_type', 'tbl_communities.community')
        ->get();


        return datatables()
        ->of($questions)
        ->addIndexColumn()
        ->addColumn('aksi', function ($questions) {
            return '
                <button onclick="showDetail(`'. $questions->id .'`)" class="btn btn-sm btn-info"><i class="fa-solid fa-eye"></i></button>
                <button onclick="deleteData(`'.  $questions->id .'`)" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
            ';
        })
        ->rawColumns(['aksi'])
        ->make(true);
    }

    public function questPending()
    {
        $quest = DB::table('tbl_questions')
        ->where('id_status',1)
        ->leftjoin('users', 'tbl_questions.id_user_dil' , '=' ,'users.id')
        ->leftjoin('tbl_types', 'tbl_questions.id_type' , '=' ,'tbl_types.id')
        ->leftjoin('tbl_communities', 'tbl_questions.id_comunity' , '=' ,'tbl_communities.id')
        ->select('tbl_questions.*' , 'users.name', 'tbl_types.nama_type', 'tbl_communities.community')
        ->get();

        return datatables()
        ->of($quest)
        ->addIndexColumn()
        ->addColumn('status', function($quest){
            return '
                <div class="text-center">
                    <label class="bg-warning font-italic py-1 px-2 rounded">Pending</label>
                </div>
            ';
        })
        ->addColumn('aksi', function($quest){
            return '
                <button onclick="showDetail(`'.$quest->id.'`)" class="btn btn-sm btn-info"><i class="fa-solid fa-eye"></i></button>
            ';
        })
        ->rawColumns(['status','aksi'])
        ->make(true);
    }

    public function showDetail(Request $request)
    {
        $id = $request->id;
        // $username = $request->uname;

        $data = Question::find($id);
        $data = DB::table('tbl_questions')
        ->where('tbl_questions.id',$id)
        ->leftjoin('users', 'tbl_questions.id_user_dil' , '=' ,'users.id')
        ->leftjoin('tbl_types', 'tbl_questions.id_type' , '=' ,'tbl_types.id')
        ->leftjoin('tbl_communities', 'tbl_questions.id_comunity' , '=' ,'tbl_communities.id')
        ->select('tbl_questions.*' , 'users.name', 'tbl_types.nama_type', 'tbl_communities.community')
        ->get();
        
        // $data->name = $username;
        // return $data;

        return $data;
    }

    public function statusUpdate(Request $request)
    {
        $id = $request->id_quest;

        $data = Question::find($id);
        if($data->id_status === 1){
            $data->id_status = 2;
        }
        $data->update();

        return "success";
    }

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
    public function dataEdit(Request $request)
    {
        $id = $request->id;
        $username = $request->uname;

        $data = Question::find($id);
        $data->name = $username;
        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $title = $request->title;
        $question = $request->question;
        $tags = $request->tags;
        $id = $request->id;


        $quest = Question::find($id);
        $quest->title = $title;
        $quest->question = $question;
        $quest->tags = $tags;

        $quest->update();
        return "success";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($id)
    {
        $questions = Question::find($id);

        if ($questions->path_img != null){
            Storage::disk('public')->delete($questions->path_img);
        }
        $questions->delete();
        
        return $id;
    }
}
