<?php

namespace App\Database\Seeds;

use App\Models\TeacherModel;
use App\Models\ClassroomModel;
use App\Models\UserModel;
use CodeIgniter\Database\Seeder;

class TeacherSeeder extends Seeder
{    
    protected $teacherModel, $classroomModel, $userModel;

    public function __construct()
    {
        $this->teacherModel     = new TeacherModel();
        $this->classroomModel   = new ClassroomModel();
        $this->userModel        = new UserModel();
    }

    /**
     * Run Seeder
     *
     * @return void
     */
    public function run()
    {
        $classrooms = $this->classroomModel->findAll();

        $user = $this->userModel->insert([
            'first_name' => 'Ujang',
            'last_name' => 'Alexander Graham',
            'id_number' => 22222222,
            'email' => "alexander_graham@mail.com",
            'gender' => 'laki_laki',
            'religion' => 'islam',
            'picture' => 'picture.png',
            'role' => 'teacher',
            'password' => password_hash('22222222', PASSWORD_BCRYPT),
            'birth_date' => '2002/04/14',
            'birth_place' => 'Jakarta',
            'address'     => 'Jl.Jalan Gg.Kenangan Mantan No.69',
        ]);

        $teacher = $this->teacherModel->insert([
            'user_id' => $user,
            'code' => 'UAG'
        ]);

        $classroomIds = [];

        // Ambil satu ruang kelas secara acak
        $randomClassroom = array_rand($classrooms, 1);
        $classroom = $classrooms[$randomClassroom];
        $classroomIds[] = $classroom->id;

        $this->teacherModel->syncClassrooms($teacher, $classroomIds);
    }
}
