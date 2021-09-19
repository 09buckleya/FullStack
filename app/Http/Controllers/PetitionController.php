<?php

namespace App\Http\Controllers;

use App\Models\Petition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class PetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('petition');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addPetition(Request $req)
    {
        $petition = new Petition;
        $petition->title = $req->title;
        $petition->info = $req->info;
        $petition->user_id = Auth::user()->id;
        $petition->save();
        return redirect('add');
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
     * @param  \App\Models\Petition  $petition
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('petitions')
            ->join('users', 'petitions.user_id', 'users.id')
            ->where('petitions.id', $id)
            ->get();
        $count = DB::table('petition_user')
            ->where('petition_id', $id)
            ->count();
        $signatures = DB::table('petition_user')
            ->join('users', 'petition_user.user_id', 'users.id')
            ->where('petition_user.petition_id', $id)
            ->get();
        return view('petition', compact('data', 'count', 'signatures'));
    }
    // ['data' => $data]
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Petition  $petition
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Petition::find($id);
        return view('edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Petition  $petition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        $data = Petition::find($req->id);
        $data->title = $req->title;
        $data->info = $req->info;
        $data->save();
        return redirect('list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Petition  $petition
     * @return \Illuminate\Http\Response
     */

    public function list()
    {
        $user = Auth::user()->id;
        $data = Petition::all()->where('user_id', $user);
        return view('list', ['petitions' => $data]);
    }

    public function delete($id)
    {
        $data = Petition::find($id);
        $data->delete();
        return redirect('list');
    }

}
