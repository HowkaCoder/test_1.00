<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest

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
            'name'=> 'required|min:4|max:100',
            'email'=> 'required|min:4|max:100',
            'subject'=> 'required|min:4|max:100',
            
        ];
    }

    public function attributes()
    {
        return [
            'name'=> 'Имя',
            'email'=> 'Электронная почта',
            'subject'=> 'Текст'
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Ваше имя не заполнен , либо заполнен не корректно',
            'email.required'=>'Ваше email не заполнен , либо заполнен не корректно',
            'subject.required'=>'Ваше сообщение не заполнен , либо заполнен не корректно',
        ];
    }

}
