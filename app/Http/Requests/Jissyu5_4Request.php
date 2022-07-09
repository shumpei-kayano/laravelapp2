<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Jissyu5_4Request extends FormRequest
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
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric|between:0,120'
        ];
    }

    public function messages()
    {
        return [
        'name.required' => '名前は必須入力フィールドです。',
        'mail.email' => '正しいメールアドレスを入力してください。',
        'age.numeric' => '年齢は整数で入力してください。',
        'age.between' => '年齢は0〜120の間で入力してください。'
        ];
    }
}
