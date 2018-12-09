<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\board;

class mainController extends Controller
{
    public function board($board)
    {	

    	$boards = new board();
        $boards = board::where('category', $board)->get();

        return view('board.board')->with('boards', $boards);
      
    }
}
