<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class PagesController extends Controller
{
    public function index(){
      return view('pages.home');
    }

    public function calendar(){
      return view('pages.calendar');
    }

    public function meatballs(){
      return view('pages.meatballs');
    }

    public function pancakes(){
      return view('pages.pancakes');
    }

    public function login(){
      return view('pages.login');
    }

    public function comments(){
      return view('comments.index');
    }
/*
    public function showComments(){
        $comments = Comment::all();
        return view('pages.meatballs')->with('comments', $comments);
    }
*/
}
