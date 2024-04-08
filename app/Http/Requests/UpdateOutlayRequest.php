<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOutlayRequest extends StoreOutlayRequest
{
    public function rules(): array
    {
        return [
            'name' => 'string|max:255',
            'price' => 'numeric|max_digits:8',
            'prepayment' => 'nullable|numeric|max_digits:8',
            'comments' => 'nullable',
            'prepayment_date' => 'nullable|date',
            'all_payment_date' => 'nullable|date'
        ];
    }
}
