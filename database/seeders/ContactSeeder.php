<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'name' => 'dummy user',
            'email' => 'dummy@gmail.com',
            'address' => 'jakarta',
            'phone' => '081723123',
            'user_id' => 1
        ]);
    }
}
