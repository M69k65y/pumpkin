<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Team as Team;

class TeamController extends Controller
{
    
	public function index(){

		$team = Team::all();
		$data = array(
				"team" => $team
			);

		return view("about", $data);

	}

}
