<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\User as User;
use App\Models\Role as Role;
use App\Models\Configuration;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->command->info('Database Seeder initialized.');

		$this->call('RolesTableSeeder');
		$this->call('UsersTableSeeder');
		$this->call('ConfigurationsTableSeeder');

    $this->command->info('Database Seeder finished.');
	}

}

class RolesTableSeeder extends Seeder {

    public function run() {

    	DB::table('roles')->delete();

			$this->command->info('Roles table was cleared.');

			Role::create(['name' => 'superadmin', 'description' => 'superadmin']);
			Role::create(['name' => 'admin', 'description' => 'admin']);
			Role::create(['name' => 'editor', 'description' => 'editor']);
			Role::create(['name' => 'user', 'description' => 'user']);

			$this->command->info('The table "roles" was populated.');
	}
}

class UsersTableSeeder extends Seeder {

    public function run() {

    	DB::table('users')->delete();

			$this->command->info('Users table was cleared.');

			User::create([
				'first_name' => env('SEED_FIRSTNAME', 'SEED_FIRSTNAME'),
				'last_name' => env('SEED_LASTNAME', 'SEED_LASTNAME'),
				'fullname' => env('SEED_FULLNAME', 'SEED_FULLNAME'),
				'title' => env('SEED_TITLE', 'SEED_TITLE'),
				'password' => Hash::make( env('SEED_PASSWORD', 'SEED_PASSWORD') ) ,
				'email' => env('SEED_EMAIL', 'SEED_EMAIL'),
				'avatar' => env('SEED_AVATAR', 'SEED_AVATAR'),
				'role_id' => env('SEED_ROLE', 'SEED_ROLE'),
			]);

			$this->command->info('The table "users" was populated.');
	}
}

class ConfigurationsTableSeeder extends Seeder {

    public function run() {

    	DB::table('configurations')->delete();

			$this->command->info('Configurations table was cleared.');

			Configuration::create(['type' => 'appName', 'desc' => 'Dashboard']);
			Configuration::create(['type' => 'siteName', 'desc' => 'Como Aguilas']);

			$this->command->info('The table "configurations" was populated.');
	}
}
