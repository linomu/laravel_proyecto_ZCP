<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Facades\DB;
use Carbon\Carbon;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'id' => 1061809263,
            'firstname' => 'Tomas Escobar',
            'lastname' => 'Escobar cueltan',
            'gender' => 'm',
            'phonenumber'  => '3135673421',
            'birth_date' => Carbon::create('1998', '05', '03')
        ]);
    }
}
