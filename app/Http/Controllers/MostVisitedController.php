<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MostVisitedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('most_visited.index');
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
    public function fillter(Request $request)
    {
        $id_community = $request->id_community;

            if ($id_community == 0) {
                $quest = Question::with('tag','user','community')
                        ->withCount('tag','answers')
                        ->orderBy('views','desc')
                        ->paginate(4); 
            }
            if (!$id_community == 0) {
                
                $quest = Question::with('tag','user','community')
                        ->withCount('tag','answers')
                        ->where('id_comunity',$id_community)
                        ->orderBy('views','desc')
                        ->paginate(4);     
            }
                    
                    
        return response()->json([
            'quest' => $quest
        ]);

    }
    public function show()
    {
        $quest = Question::with('tag','user','community')->withCount('tag','answers')->orderBy('views','desc')->paginate(4);

        return response()->json([
            'quest' => $quest
        ]);
    }
    
    public function search(Request $request)
    {
        $data = $request->data;
        $quest = Question::with('tag','user','community')
                        ->withCount('tag','answers')
                        ->where('title','like','%'.$data.'%')
                        ->orderBy('views','desc')
                        ->paginate(4);

        return response()->json([
            'quest' => $quest
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
