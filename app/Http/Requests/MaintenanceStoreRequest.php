<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MaintenanceStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'date' => ['required', 'date', 'after:now'],
            'description' => ['required', 'string', 'min:3', 'max:180'],
            'vehicle_id' => ['required']
        ];
    }

    public function messages(): array
    {
        return [
            'date.required' => 'The date field must be filled',
            'date.date' => 'The date field must be a valid date',
            'date.after' => 'The date field must not be a date before today',

            'description.required' => 'The description field must be filled',
            'description.string' => 'The description field must be a string',
            'description.min' => 'The description field must be at least 3 characters',
            'description.max' => 'The description field must be at most 180 characters',
        ];
    }
}
