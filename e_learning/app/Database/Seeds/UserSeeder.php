<?php

namespace App\Database\Seeds;

use App\Models\UserModel;
use CodeIgniter\Database\Seeder;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'first_name' => 'Dimas Yusuf',
                'last_name' => 'Hidayat',
                'id_number' => 10220014,
                'email' => "10220014@mail.com",
                'gender' => 'laki_laki',
                'religion' => 'islam',
                'picture' => 'picture.png',
                'role' => 'admin',
                'password' => password_hash('10220014', PASSWORD_BCRYPT),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'birth_date' => '2002/04/14',
                'birth_place' => 'Jakarta',
                'address'     => 'Jl.Jalan Gg.Kenangan Mantan No.69',
                
            ]
        ];

        $userModel = new UserModel();
        $userModel->insertBatch($data);
    }
}
