<?php

namespace App\Http\Controllers;

use App\Models\Point;
use App\Models\Team;
use Illuminate\Http\Request;

class PointController extends Controller
{
    
    public function index(){

        $allteam = Team::orderBy('name')->get();
        $point = Point::with('team')->get();

        return view('point', compact('point','allteam'));
    }

    public function savePoints(Request $request){

        $request->validate([
            'team_id' => 'required',  
            'point' => 'integer',
            'total_match_played' => 'integer',
            'total_win' => 'integer',
        ]);

       
        if($request->team_id > 0){
            $point = Point::where('team_id', $request->team_id)->first();
        }

        $point =  $point ?? new Point();
        $point->team_id = $request->team_id;
        $point->point = $request->point;
        $point->total_match_played = $request->total_match_played;
        $point->total_win = $request->total_win;        
        $point->save();

        return redirect()->route('point');
    }
}
