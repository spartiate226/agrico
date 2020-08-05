<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProduitRequest extends FormRequest
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
            'categorie_id'=>'bail|required',
            'nom'=>'bail|required',
            'prix'=>'bail|required',
            'description'=>'bail|required',
            'image'=>'bail|required|image'
        ];
    }

    public function messages()
    {
        return [
            'categorie_id.required'=>'Le champ categorie ne peut pas etre vide...',
            'prix.required'=>'Le champ prix ne peut pas etre vide...',
            'description.required'=>'Le champ description ne peut pas etre vide...',
            'nom.required' => 'Le champ nom ne peut pas etre vide...',
            'image.required'  => 'Le champ image ne peut pas etre vide...',
            'image.image'  => 'La valeur du champ image doit etre une image...',
        ];
    }
}
