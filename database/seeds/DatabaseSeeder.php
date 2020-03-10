<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
        #$this->call(ActorsTableSeeder::class);
        DB::table('actors')->insert([
            'id' => '1061809263',
            'admin_id' => '1061809263',
            'firstname' => 'Tomas Escobar',
            'lastname' => 'Escobar cueltan',
            'gender' => 'm',
            'phonenumber'  => '3135671234',
            'birth_date' => Carbon::create('1998', '05', '03')
        ]);

        DB::table('actors')->insert([
            'id' => '23424545',
            'admin_id' => '1061809263',
            'firstname' => 'Marina',
            'lastname' => 'marin castillo',
            'gender' => 'f',
            'phonenumber'  => '235453452',
            'birth_date' => Carbon::create('2001', '05', '03')
        ]);
    }
}
