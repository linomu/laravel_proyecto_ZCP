<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
        #$this->call(AdminsTableSeeder::class);
        DB::table('admins')->insert([
            'id' => '1061809263',
            'firstname' => 'Tomas Escobar',
            'lastname' => 'Escobar cueltan',
            'gender' => 'm',
            'phonenumber'  => 1000,
            'birth_date' => Carbon::create('1998', '05', '03')
        ]);
    }
}
