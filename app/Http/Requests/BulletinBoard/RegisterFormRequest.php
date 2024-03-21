<?php

namespace App\Http\Requests\BulletinBoard;

use Illuminate\Foundation\Http\FormRequest;

class RegisterFormRequest extends FormRequest
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
            'over_name'=>'required|string|max:10',
            'under_name'=>'required|string|max:10',
            'over_name_kana'=>'required|string|katakana|max:30',
            'under_name_kana'=>'required|string|katakana|max:30',
            'mail_address'=>'required|email|unique:mail_address|max:100',
            'sex'=>'required',Rule::in(['1','2','3']),
            'old_year'=>'required|after:2000|date',
            'old_month'=>'required|date|after:01|before:today',
            'old_day'=>'required|date|after:01|before:today',
            'role'=>'required',Rule::in(['1','2','3','4']),
            'password'=>'required|max:30|min:8|confirmed'
            //$old_ymd = ($this->filled(['old_year','old_month','old_day']))
        ];
    }
}
