<?php

namespace App\Http\Controllers;

use App\Http\Requests\Card\CardFormRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CardController extends Controller
{

    public function showForm(Request $request):View
    {
        if ($request->has(['email', 'first_name', 'last_name', 'address', 'city', 'country', 'phone', 'postal_code', 'plan_id'])){
            return view("form.card",[
                "data" => collect($request->all())
            ]);
        }

        return abort(404);

    }
}
