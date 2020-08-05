<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategorieRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nom'=>"bail|required|string",
            'image'=>"bail|required|image"
        ];
    }

    public function messages()
{
    return [
        'nom.required' => 'Le nom ne peut pas etre vide...',
        'image.required'  => 'Le champ image ne peut pas etre vide...',
        'image.image'  => 'La valeur du champ image doit etre une image...',
    ];
}
}
