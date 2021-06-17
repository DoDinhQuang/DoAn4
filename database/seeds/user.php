<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            'name'=>'quang',
            'email'=>'quangteo2789@gmail.com',
            'password'=>bcrypt('quangteo'),

        ];
        DB::table('users')->insert($data);
    }
}
