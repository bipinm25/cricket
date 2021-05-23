<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class PlayerController extends Controller
{
    
    public function player(Request $request){
        $player = Player::where('team_id', $request->team_id)->with('team')->get();
        return view('player',compact('player'));
    }

    public function savePlayer(Request $request){

        $request->validate([
            'first_name' => 'required|max:125',
            'last_name' => 'required|max:125',
            'image' => 'max:1000|mimes:png,jpg,jpeg'
        ]);

        $player = new Player();
        $player->team_id = $request->team_id;
        $player->first_name = $request->first_name;
        $player->last_name = $request->last_name;        
        if($request->hasFile('image')){
            $fileName = time().'.'.$request->image->extension(); 
            $player->image_url = $fileName; 
            $request->image->move(public_path('uploads'), $fileName);            
           }   
        $player->save();

        return redirect()->route('player', $request->team_id);



    }
}
