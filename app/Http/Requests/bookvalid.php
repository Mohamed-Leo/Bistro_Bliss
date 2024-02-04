<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class bookvalid extends FormRequest
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
            'date' => ['required'],
            'time' => ['required'],
            'name' => ['required' , 'string'],
            'email' => ['required'],
            'phone' => ['required','min:11','max:14'],
            'person' => ['required'],
        ];
    }
}
