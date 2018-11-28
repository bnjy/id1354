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
      $title = 'Meatballs';
      return view('pages.meatballs', compact('title'));
    }

    public function pancakes(){
      $title = 'Pancakes';
      return view('pages.pancakes', compact('title'));
    }

    public function login(){
      return view('pages.login');
    }

    public function comments(){
      return view('comments.index');
    }
}
