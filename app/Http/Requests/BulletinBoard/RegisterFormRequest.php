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
    public function prepareForValidation() {
        //生年月日をまとめて値に直す
        $old_year = $this->input('old_year');
        $old_month = $this->input('old_month');
        $old_day = $this->input('old_day');
        $datetime = $old_year .'-'. $old_month .'-'. $old_day;
        // 日付を作成(ex. 2020-1-20)
        //$datetime_validation = implode('-', $datetime);

        // rules()に渡す値を追加でセット
        //これで、この場で作った変数にもバリデーションを設定できるようになる
        $this->merge([
            'datetime_validation' => $datetime,
        ]);

        return parent::prepareForValidation();
        //ここで定義した変数はここでしか使えないようにしている(parentで返しているのがこのメソッドなので)
    }
    public function rules()
    {
        return [
            'over_name'=>'required|string|max:10',
            'under_name'=>'required|string|max:10',
            'over_name_kana'=>'required|string|katakana|max:30',
            'under_name_kana'=>'required|string|katakana|max:30',
            'mail_address'=>'required|email|unique:mail_address|max:100',
            'sex'=>'required',Rule::in(['1','2','3']),
            'datetime_validation' => 'required|date|after:1999-12-31|before:tomorrow',
            'role'=>'required',Rule::in(['1','2','3','4']),
            'password'=>'required|max:30|min:8|confirmed'
            //$old_ymd = ($this->filled(['old_year','old_month','old_day']))
        ];
    }
}
