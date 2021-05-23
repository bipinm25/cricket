<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{

    public function index(){
        $team = Team::all();
        return view('team', compact('team'));
    }

    public function saveTeam(Request $request){
        $request->validate([
            'team_name' => 'required|max:125',
            'logo' => 'max:1000|mimes:png,jpg,jpeg'
        ]);       

       $team = new Team();
       $team->name = $request->team_name;
       $team->club_state = $request->club_state;
       if($request->hasFile('logo')){
        $fileName = time().'.'.$request->logo->extension(); 
        $team->logo_url = $fileName; 
        $request->logo->move(public_path('uploads'), $fileName);
       }   
       $team->save();

       return redirect()->route('team');
    }
}
