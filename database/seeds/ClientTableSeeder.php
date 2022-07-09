<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = \Carbon\Carbon::now();
        $param = [
            'name' => 'taro',
            'address' => '東京都',
            'phonenumber' => '03-0000-0000',
            'email' => 'taro@yamada.jp',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('client')->insert($param);
        $param = [
            'name' => 'hanko',
            'address' => '神奈川県',
            'phonenumber' => '045-111-1111',
            'email' => 'hanako@flower.com',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('client')->insert($param);
        $param = [
            'name' => 'sachiko',
            'address' => '千葉県',
            'phonenumber' => '043-222-2222',
            'email' => 'sachi@happy.org',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('client')->insert($param);
        $param = [
            'name' => 'jiro',
            'address' => '埼玉県',
            'phonenumber' => '048-333-3333',
            'email' => 'jiro@change',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('client')->insert($param);
        $param = [
            'name' => 'ichiro',
            'address' => '茨城県',
            'phonenumber' => '029-444-4444',
            'email' => 'ichiro@baseball',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('client')->insert($param);
    }
}
