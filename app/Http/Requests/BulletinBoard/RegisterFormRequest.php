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
            'over_name_kana'=>'required|string|regex:/^[ア-ン゛゜ァ-ォャ-ョー]+$/u|max:30',
            'under_name_kana'=>'required|string|regex:/^[ア-ン゛゜ァ-ォャ-ョー]+$/u|max:30',
            'mail_address'=>'required|email|unique:mail_address|max:100',
            'sex'=>'required|in:1,2,3',
            'datetime_validation' => 'required|date|after:1999-12-31|before:tomorrow',
            'role'=>'required|in:1,2,3,4',
            'password'=>'required|max:30|min:8|confirmed:password',
            'password_confirmation' => 'required|max:30|min:8'
            //$old_ymd = ($this->filled(['old_year','old_month','old_day']))
        ];
    }
    public function messages(){
        return [
            "required" => "必須項目です",
            "email" => "メールアドレスの形式で入力してください",
            "regex" => "全角カタカナで入力してください",
            "string" => "文字で入力してください",
            "max" => "30文字以内で入力してください",
            "over_name.max" => "10文字以内で入力してください",
            "under_name.max" => "10文字以内で入力してください",
            "min" => "8文字以上で入力してください",
            "mail_address.max" => "100文字以内で入力してください",
            "unique" => "登録済みのメールアドレスは無効です",
            "confirmed" => "パスワード確認が一致しません",
            "datetime_validation.date" => "有効な日付に直してください",
            "datetime_validation.after" => "2000年1月1日から今日までの日付を入力してください",
            "datetime_validation.before" => "2000年1月1日から今日までの日付を入力してください"
        ];
    }
}
