<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAgentsRequest extends StoreAgentsRequest
{
    public function rules(): array
    {
        return [
            'type' => 'numeric|max_digits:8',
            'name' => 'string|max:255',
            'phone' => 'nullable|string|max:16',
            'site' => 'nullable|string|max:128',
            'mail' => 'nullable|email|max:128',
            'vk' => 'nullable|string|max:128',
            'insta' => 'nullable|string|max:128',
            'price' => 'nullable|numeric|max_digits:8',
            'prepayment' => 'nullable|numeric|max_digits:8',
            'comments' => 'nullable',
            'date_visit' => 'nullable|date',
            'status' => 'boolean',
        ];
    }
}
