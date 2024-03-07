<?php

use Illuminate\Database\Seeder;
use App\Models\Users\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['id'=>'1',
            'over_name'=>'うずまき',
            'under_name'=>'ナルト',
            'over_name_kana'=>'ウズマキ',
            'under_name_kana'=>'ナルト',
            'mail_address'=>'naruto@gmail.com',
            'sex'=>'1',
            'birth_day'=>'2000-10-10',
            'role'=>'4',
            'password'=>'naruto0000']
        ]);
    }
}