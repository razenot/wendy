<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTodoRequest extends StoreTodoRequest
{
    public function rules(): array
    {
        return [
            'name' => 'string|max:255',
            'scheduled_date' => 'date',
            'status' => 'boolean',
            'comments' => 'nullable',
        ];
    }
}
