<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleFormRequest extends FormRequest
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
        $rules = [
            'nom' => [
                'required',
                'string',
                'max:255'
            ],

            'quantite' => [
                'required',
                'numeric',
            ],

            'prix' => [
                'required',
                'numeric',
            ]
        ];

        return $rules;
    }

public function messages(){
    return [
        'nom.required'=>"Veuillez entrez le nom de l'article",
        'quantite.required'=>"Veuillez entrez le nombre d'article",
        'prix.required'=>"Veuillez entrez le prix de l'article",

    ];
}
}
