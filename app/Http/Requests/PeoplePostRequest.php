<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PeoplePostRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules():array
    {
        return [
            'first_name' => 'required|max:200',
            'last_name' => 'required|max:200',
            'phone_num' => 'required|max:200',
            'street' => 'required|max:200',
            'city' => 'required|max:200',
            'country' => 'required|max:200',
            'email' => 'required|max:200'
        ];
    }
}
