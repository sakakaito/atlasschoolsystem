<?php

return [
    'accepted'             => ':attributeを承認してください。',
    'active_url'           => ':attributeは有効なURLではありません。',
    'after'                => ':attributeには、:date以降の日付を指定してください。',
    'after_or_equal'       => ':attributeには、:date以降の日付を指定してください。',
    'alpha'                => ':attributeはアルファベットのみがご利用できます。',
    'alpha_dash'           => ':attributeは英数字とダッシュ(-)及び下線(_)がご利用できます。',
    'alpha_num'            => ':attributeは英数字がご利用できます。',
    'array'                => ':attributeは配列でなくてはなりません。',
    'before'               => ':attributeには、:date以前の日付をご利用ください。',
    'before_or_equal'      => ':attributeには、:date以前の日付をご利用ください。',
    'between'              => [
        'numeric' => ':attributeは、:minから:maxの間で指定してください。',
        'file'    => ':attributeは、:min kBから:max kBの間で指定してください。',
        'string'  => ':attributeは、:min文字から:max文字の間で指定してください。',
        'array'   => ':attributeは、:min個から:max個の間で指定してください。',
    ],
    'boolean'              => ':attributeは、trueかfalseを指定してください。',
    'confirmed'            => ':attributeと、確認フィールドとが、一致していません。',
    'date'                 => ':attributeは有効な日付ではありません。',
    'date_equals'          => ':attributeは:dateと同じ日付でなければなりません。',
    'date_format'          => ':attributeの形式は:formatと一致していません。',
    'different'            => ':attributeと:otherには、異なるものを指定してください。',
    'digits'               => ':attributeは:digits桁で指定してください。',
    'digits_between'       => ':attributeは:min桁から:max桁の間で指定してください。',
    'dimensions'           => ':attributeの画像サイズが無効です。',
    'distinct'             => ':attributeの値が重複しています。',
    'email'                => ':attributeは有効なメールアドレス形式で指定してください。',
    'ends_with'            => ':attributeは、:valuesのいずれかで終わらなければなりません。',
    'exists'               => '選択された:attributeは正しくありません。',
    'file'                 => ':attributeはファイルでなければいけません。',
    'filled'               => ':attributeに値を指定してください。',
    'gt'                   => [
        'numeric' => ':attributeは:valueより大きくなければなりません。',
        'file'    => ':attributeは:value kBより大きくなければなりません。',
        'string'  => ':attributeは:value文字より大きくなければなりません。',
        'array'   => ':attributeは:value個より多くなければなりません。',
    ],
    'gte'                  => [
        'numeric' => ':attributeは:value以上でなければなりません。',
        'file'    => ':attributeは:value kB以上でなければなりません。',
        'string'  => ':attributeは:value文字以上でなければなりません。',
        'array'   => ':attributeは:value個以上でなければなりません。',
    ],
    'image'                => ':attributeは画像でなければいけません。',
    'in'                   => '選択された:attributeは正しくありません。',
    'in_array'             => ':attributeは:otherに存在しません。',
    'integer'              => ':attributeは整数でご指定ください。',
    'ip'                   => ':attributeは有効なIPアドレスをご指定ください。',
    'ipv4'                 => ':attributeは有効なIPv4アドレスをご指定ください。',
    'ipv6'                 => ':attributeは有効なIPv6アドレスをご指定ください。',
    'json'                 => ':attributeは有効なJSON文字列をご指定ください。',
    'lt'                   => [
        'numeric' => ':attributeは:valueより小さくなければなりません。',
        'file'    => ':attributeは:value kBより小さくなければなりません。',
        'string'  => ':attributeは:value文字より小さくなければなりません。',
        'array'   => ':attributeは:value個より少なくなければなりません。',
    ],
    'lte'                  => [
        'numeric' => ':attributeは:value以下でなければなりません。',
        'file'    => ':attributeは:value kB以下でなければなりません。',
        'string'  => ':attributeは:value文字以下でなければなりません。',
        'array'   => ':attributeは:value個以下でなければなりません。',
    ],
    'max'                  => [
        'numeric' => ':attributeは:maxより大きくてはなりません。',
        'file'    => ':attributeは:max kBより大きくてはなりません。',
        'string'  => ':attributeは:max文字より大きくてはなりません。',
        'array'   => ':attributeは:max個より多くてはなりません。',
    ],
    'mimes'                => ':attributeは:valuesタイプのファイルでなければなりません。',
    'mimetypes'            => ':attributeは:valuesタイプのファイルでなければなりません。',
    'min'                  => [
        'numeric' => ':attributeは:min以上でなければなりません。',
        'file'    => ':attributeは:min kB以上でなければなりません。',
        'string'  => ':attributeは:min文字以上でなければなりません。',
        'array'   => ':attributeは:min個以上でなければなりません。',
    ],
    'not_in'               => '選択された:attributeは正しくありません。',
    'not_regex'            => ':attributeの形式が正しくありません。',
    'numeric'              => ':attributeは数値でなければなりません。',
    'password'             => 'パスワードが間違っています。',
    'present'              => ':attributeが存在している必要があります。',
    'regex'                => ':attributeの形式が正しくありません。',
    'required'             => ':attributeは必須です。',
    'required_if'          => ':otherが:valueの場合、:attributeは必須です。',
    'required_unless'      => ':otherが:valuesでない限り、:attributeは必須です。',
    'required_with'        => ':valuesが存在する場合、:attributeは必須です。',
    'required_with_all'    => ':valuesが存在する場合、:attributeは必須です。',
    'required_without'     => ':valuesが存在しない場合、:attributeは必須です。',
    'required_without_all' => ':valuesが存在しない場合、:attributeは必須です。',
    'same'                 => ':attributeと:otherが一致しなければなりません。',
    'size'                 => [
        'numeric' => ':attributeは:sizeを指定してください。',
        'file'    => ':attributeのファイルサイズは:sizeキロバイトでなければなりません。',
        'string'  => ':attributeは:size文字で指定してください。',
        'array'   => ':attributeは:size個含まれていなければなりません。',
    ],
    'starts_with'          => ':attributeは、:valuesのいずれかで始まらなければなりません。',
    'string'               => ':attributeは文字列でなければなりません。',
    'timezone'             => ':attributeは有効なタイムゾーンを指定してください。',
    'unique'               => ':attributeは既に存在します。',
    'uploaded'             => ':attributeのアップロードに失敗しました。',
    'url'                  => ':attributeは正しい形式で指定してください。',
    'uuid'                 => ':attributeは有効なUUIDでなければなりません。',


    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'main_category_name' => 'メインカテゴリー',
        'sub_category_name' => 'サブカテゴリー',
        'post_body' => '投稿内容'
    ],

];
