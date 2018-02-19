<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class whitespaceDBSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $PassStr = "password";

        $PassHash = "";

        $PassHash = Hash::make($PassStr);

		DB::table('professor')->insert(['prof_fName' => 'Jazelene Mae',
			'prof_mName' => 'Mercado',
			'prof_lName' => 'De Vera',
			'prof_email' => 'jazelenemae@gmail.com',
			'password' => bcrypt('password'),
			'remember_token' => NULL,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);


    }
}
