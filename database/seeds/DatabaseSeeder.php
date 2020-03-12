<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        #$this->call(ActorsTableSeeder::class);
        DB::table('actors')->insert([
            'id' => '1061809263',
            'admin_id' => '1',
            'firstname' => 'Lino Alejandro',
            'lastname' => 'Muñoz Buesaquillo',
            'gender' => 'm',
            'phonenumber'  => '3135671234',
            'birth_date' => Carbon::create('1998', '05', '03'),
            'ulrphoto'=>'usuario.png'
        ]);

        DB::table('users')->insert([
            'actors_id'=>'1061809263',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin12345'),
            'rol' => 'admin',
        ]);

        DB::table('actors')->insert([
            'id' => '10618049761',
            'admin_id' => '1061809263',
            'firstname' => 'Tatiana',
            'lastname' => 'Cardenas',
            'gender' => 'm',
            'phonenumber'  => '3215789645',
            'birth_date' => Carbon::create('1998', '05', '03'),
            'ulrphoto'=>'usuario.png'
        ]);

        DB::table('users')->insert([
            'actors_id'=>'10618049761',
            'email' => 'evaluator@gmail.com',
            'password' => Hash::make(' evaluator12345'),
            'rol' => 'evaluator ',
        ]);


    }
}
