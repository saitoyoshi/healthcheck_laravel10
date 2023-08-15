<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PutFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'physical_condition' => 'required|integer| between:1,5',
            'mood_state' => 'required|integer|between:1,5',
            'back_pain' => 'required|integer|between:1,5',
            'eyestrain' => 'required|integer|between:1,5',
            'headache' => 'required|integer|between:1,5',
            'recording_date' => 'required|date',
        ];
    }
}
