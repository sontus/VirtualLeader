<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now_time = date('Y-m-d');
        $rows = [
            // Super Admin
            [
                'name'      => "Super Admin",
                'category_id'    => "1",
                'email'     => "root@email.com",
                'user_type' => "1",
                'password'  => Hash::make('Pass1234'),
                "created_at" => $now_time,
                "updated_at" => $now_time
            ],
            // Admin
            [
                'name'      => "Mentor",
                'category_id'    => "1",
                'email'     => "mentor@email.com",
                'user_type' => "2",
                'password'  => Hash::make('Pass1234'),
                "created_at" => $now_time,
                "updated_at" => $now_time
            ],
            [
                'name'      => "User",
                'category_id'    => "1",
                'email'     => "user@email.com",
                'user_type' => "3",
                'password'  => Hash::make('Pass1234'),
                "created_at" => $now_time,
                "updated_at" => $now_time
            ],
        ];

        User::insert($rows);

    }
}
