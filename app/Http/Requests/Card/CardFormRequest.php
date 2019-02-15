<?php

namespace App\Http\Requests\Card;

use App\Http\Requests\Request;

class CardFormRequest extends Request
{
    public function __construct(
        array $query = [],
        array $request = [],
        array $attributes = [],
        array $cookies = [],
        array $files = [],
        array $server = [],
        $content = null
    ) {
        parent::__construct($query, $request, $attributes, $cookies, $files, $server, $content);
        $this->redirect = route("home");
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|string|email|max:255',
            'first_name' => 'required|string|max:255|min:3',
            'last_name' => 'required|string|max:255|min:3',
            'address' => 'required|string|max:255|min:3',
            'city' => 'required|string|max:255|min:3',
            'country' => 'required|string|max:255|min:3',
            'phone' => 'required|string|max:255|min:3',
            'postal_code' => 'required|string|max:255|min:3',
            'plan_id' => 'required|integer|max:3|min:1',
        ];
    }
}
