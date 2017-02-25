<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Note;

class NoteController extends Controller
{

   public function __construct(){
      $this->middleware('cors');

    }

    public function store(Request $resquest){

      Note::create($request->all());
      return response()->json(["message"=>"success"]);
    }

}
