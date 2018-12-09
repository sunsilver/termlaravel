<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Board;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function write_form($category)
    {
        return view('board.write_form')->with('category', $category);
    }

    public function write(Request $request, $category){

        $temp_name = $_FILES['image']['tmp_name'];
        $file_name = $_FILES["image"]['name'];
        $save_name = iconv("utf-8", "cp949", $file_name);
        
        $board = new board();

        if(move_uploaded_file($save_name, "./image/$save_name")){
        // return $_FILES['image']['tmp_name'];

            $board->image = "./image/".$file_name;
        }
        $board->title=$request->title;
        $board->writer=$request->writer;
        $board->content=$request->content;
        $board->category=$category;
        
        $board->save();

        return redirect('board/board/'.$category);
    }

    public function board($board)
    {
        $boards = Board::where('category', $board)->get();
        return view('board.board')->with('boards', $boards)->with('board', $board);
    }

    public function view($num)
    {
        $board = board::where('num', $num)->first();
        return view('board.view')->with('msg',$board);
    }

    public function destroy($board)
    {
        $boards = Board::where('num',$board)->first();
        Board::where('num',$board)->delete();
        return redirect('board/board/'.$boards->category)->with('board', $board);
    }

    public function modify_form($num)
    {
        $board = board::where('num',$num)->first();
        return view('board/modify_form')->with('msg',$board);
    }

    public function modify(Request $request)
    {
        $board = board::where('num',$request->num)->first();
        // return $board;
        $board->title = $request->title;
        $board->content = $request->content;
        $board->save();
        return redirect('board/board/'.$board->category);
    }

}
