<?php

namespace App\Http\Controllers;

use App\Models\Competitor;
use App\Models\Quiz;
use App\Models\User;
use App\Models\Vote;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $competitor = Competitor::count();
        $vote = Vote::count();
        $user = User::count();
        $list = Quiz::select('competitor_id', DB::raw('count(competitor_id) as score'))->groupBy('competitor_id')->orderBy('score', 'desc')->limit(3)->get();
        $count = Quiz::count();
        return view('home', compact('competitor', 'vote', 'user', 'list', 'count'));
    }

    public function quiz()
    {
        $competitor = Competitor::orderBy('title', 'asc')->get();
        $vote = Vote::where('user_id', Auth::user()->id)->count();
        return view('quiz', compact('competitor', 'vote'));
    }

    public function vote(Request $request)
    {
        DB::beginTransaction();
        try {
            $vote = new Vote();
                $vote->visitor = $request->ip();
                $vote->date = new Carbon();
                $vote->hour = new Carbon();
                $vote->user_id = Auth::user()->id;
            $vote->save();

            foreach ($request->options as $key => $value) {
                $quiz = new Quiz();
                    $quiz->competitor_id = $value;
                    $quiz->user_id = Auth::user()->id;
                $quiz->save();
            }
    
            DB::commit();
            $response = 'ok';
            $alert = 'success';
            $message = 'Se ha registrado la votación con éxito: ';
            $error = "";
        } catch (Exception $ex) {
            DB::rollback();
            $response = 'error';
            $alert = 'error';
            $message = 'Hubo un problema al registrar. Por favor intente de nuevo';
            $error = $ex;
        }
        $arrayJson = array('response' => $response, 'alert' => $alert, 'message' => $message, 'error' => $error);
        return response()->json($arrayJson, 200);
    }
}