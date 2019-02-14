<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardController extends Controller
{
    public function showForm(Request $request){
        return view("form.card");
    }
}
