<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class laravelUsersTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        for ($a = 1; $a <= 100; $a++) {
            DB::table('laravel_users')->insert([
                'name' => str_random(10),
                'user_name' => str_random(10),
                'email' => str_random(10) . '@gmail.com',
                'password' => bcrypt('secret'),
                'gender' => 'male',
                'dob' => time(),
                'country' => "Pakistan",
                'image' => "abc.jpg",
            ]);
        }
    }

}
