<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TimerRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => 'required|string',
            'user_id' => 'required',
            'workspace_id' => 'required',
            'started_at' => 'required|date',
            'stopped_at' => 'required|date'
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
