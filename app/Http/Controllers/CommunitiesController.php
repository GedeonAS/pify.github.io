<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Communities;
use App\Community_Followers;
use Illuminate\Database\Eloquent\Builder;
use App\User;
use Illuminate\Support\Facades\Auth;

class CommunitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('communities.index');
    }
    
    public function follow()
    {
        return view('communities.followed.index');
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
    public function search(Request $request)
    {
        $type = $request->type;
        if ($type === 'unfollow') {
            # code...
            $unfollow = Communities::where('community','like','%'.$request->data.'%')
            ->whereDoesntHave('followers', function (Builder $query) use ($request) {
                $query->where('id_user',$request->id);
            })->get();

            return response()->json([
                'unfollow'=>$unfollow,
            ]);
        }
        if ($type === 'follow') {
            # code...
            $follow = User::find($request->id)->community()->where('community','like','%'.$request->data.'%')->get();
        
            return response()->json([
                'follow'=>$follow,
            ]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function un_follow(Request $request)
    {   
        $type = $request->type;
        $id = $request->id ;
        $id_user = $request->id_user ;
        if ($type == 'follow') {

            $follow = new Community_Followers();
            $follow->id_user = $id_user;
            $follow->id_community = $id;
    
            $follow->save();
        }
        if ($type == 'unfollow') {

            $unfollow = Community_Followers::where('id_community',$id)->delete();
        }
        $alert = "success";
        return compact('id','alert');
    }

    public function showfollow(Request $request)
    {
        $id = $request->id;
        $follow = User::find($id)->community;
        
        return response()->json([
            'follow'=>$follow,
        ]);
    }
    
    public function showunfollow(Request $request)
    {
        $unfollow = Communities::whereDoesntHave('followers', function (Builder $query) use ($request) {
            $query->where('id_user',$request->id);
        })->get();

        return response()->json([
            'unfollow'=>$unfollow,
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
