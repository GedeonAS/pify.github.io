<?php

namespace App\Http\Controllers;

use App\Dashboard;
use Illuminate\Http\Request;

use App\Answer;
use App\Classe;
use App\Mapel;
use App\Question;
use App\Type;
use App\User_Detail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filc = DB::table('tbl_classes')->get();
        $filt = DB::table('tbl_types')->get();
        $film = DB::table('tbl_mapels')->get();
        return view('home.index',compact('filc','filt','film'));
    }

    public function filter(){
        $filc = DB::table('tbl_classes')->all();
        $filt = DB::table('tbl_types')->all();
        $film = DB::table('tbl_mapels')->all();

        // return ($filc ->'class', $filt $film);
        return compact('filc','film','filt');
    }

    public function show_question(Request $request)
    {
        
        // if (request()->ajax()) {

        $clas = $request->clas;
        $id_mapel = $request->mapel;
        $type = $request->type;
        
        // $phone = Question::find(2)->mapel;
        // $question = Question::all();
        $question = DB::table('tbl_questions')->orderBy('created_at', 'desc')->get();

        if (($clas)!=null) {
            # code...
            $question = $question->where('id_kelas',$clas);
        }
        if (($id_mapel)!=null) {
            # code...
            $question = $question->where('id_mapel',$id_mapel);
        }
        if (($type)!=null) {
            # code...
            $question = $question->where('id_type',$type);
        }

            return $question;
    // }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $r = Auth::user();
        dd($r);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
            $id_user = $request->user;
            $question = $request->text;
            $clas = $request->clas;
            $id_mapel = $request->typ;
    
            if ( $question === null ) {
                # code...
                return "kosong";
            };
            
            if ( $id_mapel === null ) {
                # code...
                return "kopsong";
            };
    
            if ( $clas === null ) {
                # code...
                return "kopong";
            };
            
            $mapel = DB::table('tbl_mapels')->select('nama_mapel')->where('id',$id_mapel)->get();

            $quest = new Question;
            foreach ($mapel as $ma) {
                # code...
                $mapel = $ma->nama_mapel;
            }
            $quest->mapel = $mapel;
            $quest->question = $question;
            $quest->id_kelas = $clas;
            $quest->id_mapel = $id_mapel;
            $quest->id_user_dil = $id_user;
            $quest->id_type = "2";
            
            $quest->save();
    
            // return redirect()->route('answer');
            // return response()->json("success");
            return compact('question','clas','id_mapel');
    
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function show(Dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dashboard $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dashboard $dashboard)
    {
        //
    }
}
