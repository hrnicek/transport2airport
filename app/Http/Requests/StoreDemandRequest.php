<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDemandRequest extends FormRequest
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
            'from' => 'required|string|max:255',
            'to' => 'required|string|max:255',
            'date' => 'required|date|after:today|before_or_equal:'.now()->addYear()->format('Y-m-d'),
            'people' => 'required|integer|min:1|max:7',
            'airport' => 'boolean',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'note' => 'nullable|string|max:1000',
        ];
    }

    public function messages(): array
    {
        return [
            'from.required' => 'Prosím, zadejte místo vyzvednutí.',
            'to.required' => 'Prosím, zadejte kam to bude.',
            'date.required' => 'Prosím, zadejte datum.',
            'people.required' => 'Prosím, zadejte počet osob.',
            'name.required' => 'Prosím, zadejte jméno.',
            'email.required' => 'Prosím, zadejte email.',
            'phone.required' => 'Prosím, zadejte telefon.',
        ];
    }
}
