<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        $petitions = DB::table('petitions')
            ->select('petitions.id', 'petitions.title', 'petitions.info', 'users.name')
            ->join('users', 'petitions.user_id', 'users.id')
            ->get();
        return view('home', ['collection' => $petitions]);
    }
    public function sign($id)
    {
        $user = Auth::user()->id;
        print_r($id);
        DB::table('petition_user')
            ->insert(
                [
                    'user_id' => $user,
                    'petition_id' => $id,
                ]
            );
            return redirect('home');
    }
}
