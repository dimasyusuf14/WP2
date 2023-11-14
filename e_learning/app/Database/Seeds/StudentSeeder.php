<?php

namespace App\Database\Seeds;

use App\Models\StudentModel;
use App\Models\ClassroomModel;
use App\Models\UserModel;
use CodeIgniter\Database\Seeder;

class StudentSeeder extends Seeder
{
    protected $studentModel, $classroomModel, $userModel; 
        
    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct()
    {
        $this->studentModel     = new StudentModel();
        $this->classroomModel   = new ClassroomModel();
        $this->userModel        = new UserModel();
    }
    
    /**
     * run Seeder
     *
     * @return void
     */
    public function run()
    {
        $classrooms = $this->classroomModel->findAll();
        $classroomId = null;

        $randomClassroom = array_rand($classrooms, 1);
        $classroomId = $classrooms[$randomClassroom]->id;

        $user = $this->userModel->insert([
            'first_name' => 'Mikhael',
            'last_name' => 'Hidayat',
            'id_number' => 10220069,
            'email' => "10220069@mail.com",
            'gender' => 'laki_laki',
            'religion' => 'islam',
            'picture' => 'picture.png',
            'role' => 'student',
            'password' => password_hash('10220069', PASSWORD_BCRYPT),
            'birth_date' => '2002/04/14',
            'birth_place' => 'Jakarta',
            'address'     => 'Jl.Jalan Gg.Kenangan Mantan No.69',
        ]);

        $this->userModel->insertStudent([
            'user_id'      => $user,
            'classroom_id' => $classroomId,
        ]);
    }
}
