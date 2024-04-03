<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAgentsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'type' => 'required|numeric|max_digits:8',
            'name' => 'required|string|max:255',
            'phone' => 'nullable|nullable|string|max:16',
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
