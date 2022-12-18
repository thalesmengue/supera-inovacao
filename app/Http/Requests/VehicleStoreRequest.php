<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehicleStoreRequest extends FormRequest
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
            'model_year' => ['required', 'integer', 'min_digits:4', 'max_digits:4'],
            'version' => ['required', 'string', 'min:2', 'max:32'],
            'plate' => ['required', 'string', 'min:7', 'max:7', 'unique:vehicles,plate'],
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

            'model_year.required' => 'The model year field must be filled',
            'model_year.integer' => 'The model year field must be an integer',
            'model_year.min' => 'The model year field must have at least 4 characters',
            'model_year.max' => 'The model year field must have at most 4 characters',

            'version.required' => 'The version field must be filled',
            'version.string' => 'The version field must be a string',
            'version.min' => 'The version field must have at least 2 characters',
            'version.max' => 'The version field must have at most 28 characters',

            'plate.required' => 'The plate field must be filled',
            'plate.string' => 'The plate field must be a string',
            'plate.min' => 'The plate field must have at least 7 characters',
            'plate.max' => 'The plate field must have at most 7 characters',
            'plate.unique' => 'This plate is already registered',
        ];
    }
}
