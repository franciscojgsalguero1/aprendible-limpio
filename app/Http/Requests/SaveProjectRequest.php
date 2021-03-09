<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return TRUE;
        // podemos acceder al usuario con $this->user()
        // podemos verificar que es administrador con
        // $this->user()->isAdmin()
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'url' => 'required',
            'description' => 'required'
        ];
    }
    
    public function messages() {
        return [
            'title.required' => __('The project needs a title'),
            'url.required' => __('The project needs an url')
        ];
    }
}
