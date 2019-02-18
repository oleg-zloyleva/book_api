<?php

namespace App\Http\Controllers;

use App\Http\Requests\Card\CardFormRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CardController extends Controller
{
    /**
     * @param \App\Http\Requests\Card\CardFormRequest $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showForm(CardFormRequest $request):View
    {
        return view("form.card",[
            "data" => collect($request->all())
        ]);
    }
}
