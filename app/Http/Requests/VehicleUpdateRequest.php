<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class VehicleUpdateRequest extends FormRequest
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
            'owner' => ['required', 'string', 'min:3', 'max:100'],
            'brand' => ['required', 'string', 'min:2', 'max:28'],
            'model' => ['required', 'string', 'min:2', 'max:28'],
            'version' => ['required', 'string', 'min:2', 'max:28'],
            'plate' => ['required', 'string', 'min:7', 'max:7', 'unique:vehicles,plate', auth()->id()],
        ];
    }

    public function messages(): array
    {
        return [
            'owner.required' => 'The owner field must be filled',
            'owner.string' => 'The owner field must be a string',
            'owner.min' => 'The owner field must have at least 3 characters',
            'owner.max' => 'The owner field must have at most 100 characters',

            'brand.required' => 'The brand field must be filled',
            'brand.string' => 'The brand field must be a string',
            'brand.min' => 'The brand field must have at least 2 characters',
            'brand.max' => 'The brand field must have at most 28 characters',

            'model.required' => 'The model field must be filled',
            'model.string' => 'The model field must be a string',
            'model.min' => 'The model field must have at least 2 characters',
            'model.max' => 'The model field must have at most 28 characters',

            'version.required' => 'The version field must be filled',
            'version.string' => 'The version field must be a string',
            'version.min' => 'The version field must have at least 2 characters',
            'version.max' => 'The version field must have at most 28 characters',

            'plate.required' => 'The plate field must be filled',
            'plate.string' => 'The plate field must be a string',
            'plate.min' => 'The plate field must have at least 7 characters',
            'plate.max' => 'The plate field must have at most 7 characters',
            'plate.unique' => 'The plate field must be unique',
            'plate.exists' => 'The plate field must exist',
        ];
    }
}