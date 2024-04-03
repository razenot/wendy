<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGuestsRequest extends StoreGuestsRequest
{
    public function rules(): array
    {
        return [
            'name' => 'string|max:255',
            'surname' => 'string|max:255',
            'child' => 'boolean',
            'invite' => 'boolean',
        ];
    }
}
