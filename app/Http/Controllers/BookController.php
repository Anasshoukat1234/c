<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    function index(){
        $data = Book::all();
        return view("web.index", compact("data"));
    }
}
