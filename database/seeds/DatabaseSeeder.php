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
			'first_name' => env('SEED_FIRTNAME', 'name'),
			'last_name' => env('SEED_LASTNAME', 'name'),
			'fullname' => env('SEED_FULLNAME', 'name'),
			'title' => env('SEED_TITLE', 'name'),
			'password' => Hash::make( env('SEED_PASSWORD', 'password') ) ,
			'email' => env('SEED_EMAIL', 'email'),
			'avatar' => env('SEED_AVATAR', 'email'),
			]);
	}


}
