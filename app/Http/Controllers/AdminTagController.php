<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tags;

class AdminTagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tags::all();
        return view('Admin.tags.index',compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = $request->tag_id;

        $data = Tags::find($id);

        return $data;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function editTag($id)
    {
        // $qs = Tags::find()->pluck('tags');
        // return "ssssssss";


    }
    public function showTag()
    {
        $tags = Tags::all();

        return datatables()
        ->of($tags)
        ->addIndexColumn()
        ->addColumn('aksi', function ($tags) {
            return '
                <button onclick="editData(`'. $tags->id .'`)" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></button>
                <button onclick="deleteData(`'.  $tags->id .'`)" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
            ';
        })
        ->rawColumns(['aksi'])
        ->make(true);
    }
    public function store(Request $request)
    {
        $tag_name = $request->tags;

        $name_tag = new Tags;

        $name_tag->tag = $tag_name;
        $name_tag->save();
        return $tag_name ;
        // return "success";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function dataEdit(Request $request )
    {
        $id = $request->tag_id;

        $data = Tags::find($id);

        return $data;
    
    }
    ///////////////////////////
    public function show($id)
    {
        
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
    public function update(Request $request)
    {
        $id = $request->id;
        $joko = $request->tags;

        $tags = Tags::find($id);
        $tags->tag = $joko;

        $tags->update();
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
        $tag = Tags::find($id)->delete();
    }
}
