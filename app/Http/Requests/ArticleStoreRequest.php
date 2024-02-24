<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleStoreRequest extends FormRequest
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
            'title' => 'required|max:150',
            /* 'category_id' => 'required', */
            'description' => 'required|min:10',
            'image' => 'nullable|mimes:jpg'
        ];
    }

    public function messages()
    {
        return[
            'title.required' => 'Il titolo non è stato specificato',
            'title.max' => 'Il titolo deve contenere meno di 150 caratteri',
            'description.required' => 'La descrizione non è stata specificata',
            'description.min' =>'La descrizione deve contenere minimo 10 caratteri',
           /*  'category_id.required' => 'La categoria deve essere selezionata', */
            'image.mimes' => 'Il formato non è supportato',
            
        ];
    }
}
