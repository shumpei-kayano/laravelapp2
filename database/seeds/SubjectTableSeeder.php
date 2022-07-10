<?php

use Illuminate\Database\Seeder;

class SubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'person_id' => 1,
            'name' => 'Laravel',
        ];
        DB::table('subjects')->insert($param);

        $param = [
            'person_id' => 2,
            'name' => 'PHP',
        ];
        DB::table('subjects')->insert($param);

        $param = [
            'person_id' => 3,
            'name' => 'Vue.js',
        ];
        DB::table('subjects')->insert($param);
    }
}
