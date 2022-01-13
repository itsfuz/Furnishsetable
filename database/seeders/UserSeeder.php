<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $users = [
            [
                'username' => 'itssfuz',
                'email' => 'hansen@binus.ac.id',
                'password' => bcrypt('admin'),
                'role' => 'admin'

            ],
            [
                'username' => 'alsya',
                'email' => 'alsya@binus.ac.id',
                'password' => bcrypt('admin'),
                'role' => 'admin'
            ],
            [
                'username' => 'bioniclimanov',
                'email' => 'bionic@binus.ac.id',
                'password' => bcrypt('admin'),
                'role' => 'admin'
            ],
            [
                'username' => 'reginald',
                'email' => 'reginald@binus.ac.id',
                'password' => bcrypt('admin'),
                'role' => 'admin'
            ],
            [
                'username' => 'GuestMember',
                'email' => 'guest@binus.ac.id',
                'password' => bcrypt('guest'),
                'role' => 'member'
            ]
        ];

        DB::table('users')->insert($users);
    }
}
