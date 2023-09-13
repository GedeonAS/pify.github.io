<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mapel;

class AdminMapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $mapels = Mapel::all();
        // return view('Admin.mapel.index', compact('mapels'));
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
    public function showMapel()
    {
        $mapels = Mapel::all();
        return datatables()
        ->of($mapels)
        ->addIndexColumn()
        ->addColumn('aksi', function ($mapels) {
            return '
                <button onclick="editData(`'. $mapels->id .'`)" class="btn btn-sm btn-info"><i class="fa fa-pencil"></i></button>
                <button onclick="deleteData(`'.  $mapels->id .'`)" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
            ';
        })
        ->rawColumns(['aksi'])
        ->make(true);
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
    public function show($id)
    {
        //
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
        $mapel = Mapel::find($id);
        $mapel->delete();
        
        return $id;
    }
}
