<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->insert([
            ['name' => 'guest_name',
                'email' => 'guest@guest.com',
//                'email_verified_at' => 'El último deseo',
                'password' => 'guest_password',
//                'remember_token' => 'adventure',
//                'book_cover_route' => '/assets/img/books/covers/1.jpg',
            ],
        ]);
    }

    public function insert($users) {

        foreach ($users as $user) {
            DB::table('users')->insert($user);
        }
    }
}
