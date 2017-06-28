<?php

use Illuminate\Database\Seeder;
use App\User;
use UsersTableSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        Eloquent::unguard();
        $this->call('UsersTableSeeder::class');
    }
}
