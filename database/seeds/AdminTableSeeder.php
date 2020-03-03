<?php

use App\Admin;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AdminTableSeeder extends Seeder
{

    public function run()
    {

        factory(Admin::class, 5)->create();

        /*DB::table('admins')->insert([
            'personal_id'=> rand(1, 1000),
            'name' => Str::random(10),
            'lastname' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
        ]);*/
    }
}
