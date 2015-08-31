<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   App\User::truncate();
        App\User::create([
            'name' => 'safeer',
            'email' => 'safeer@tethr.it',
            'gravatar' =>'label label-info'
        ]);
        App\User::create([
            'name' => 'gopinath',
            'email' => 'gopi@tethr.it',
            'gravatar' =>'label label-success'
        ]);
        App\User::create([
            'name' => 'nishanth',
            'email' => 'nishanth@tethr.it',
            'gravatar' =>'label label-warning'
        ]);
        App\User::create([
            'name' => 'narayanan',
            'email' => 'tsn@tethr.it',
            'gravatar' =>'label label-danger'
        ]);
    }
}
