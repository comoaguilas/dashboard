<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\User as User;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

    User::create([
			'name' => env('SEED_NAME', 'name'),
			'password' => Hash::make( env('SEED_PASSWORD', 'password') ) ,
			'email' => env('SEED_EMAIL', 'email'),
			]);
	}


}
