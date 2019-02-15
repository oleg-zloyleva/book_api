<?php

namespace App\Http\Controllers;

use App\Http\Requests\Card\CardFormRequest;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function showForm(CardFormRequest $request){
        return view("form.card",[

        ]);
    }
}
