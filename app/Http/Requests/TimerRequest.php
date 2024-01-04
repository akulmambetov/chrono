<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TimerRequest extends FormRequest
{
    protected function prepareForValidation()
    {
        $this->mergeIfMissing(
            [
                'user_id' => $this->user()->id,
                'workspace_id' => $this->user()->workspaces()->default()->first()->id,
            ]
        );
    }

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
