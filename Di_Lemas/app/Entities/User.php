<?php

namespace App\Entities;

use Carbon\Carbon;
use CodeIgniter\Entity\Entity;
use Config\Database;

class User extends Entity
{
    protected $datamap = [];
    protected $dates   = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts   = [];

    /**
     * get attribute full name    
     *
     * @return void
     */
    public function getFullName()
    {
        return $this->attributes['first_name'] . ' ' . $this->attributes['last_name'];
    }

    /**
     * Get picture attribute
     * 
     * @param  mixed $picture
     * @return void
     */
    public function getPhoto()
    {
        $path = 'images/pictures/' . $this->attributes['picture'];
        return file_exists($path) ? base_url($path) : base_url('images/picture.png');
    }

    /**
     * Get teacher classrooms
     * 
     * @return void
     */
    public function getTeacherClassrooms()
    {
        $session = session();
        $db = Database::connect();

        if ($session->role !== 'teacher') 
            return null;
        
        // Join table teachers, classrooms, and classroom_teacher
        return $db->table('teachers')
            ->distinct()
            ->join('teacher_classrooms', 'teacher_classrooms.teacher_id = teachers.id')
            ->join('classrooms', 'classrooms.id = teacher_classrooms.classroom_id')
            ->where('teachers.user_id', $session->id)
            ->select('classrooms.name')
            ->get()->getResult();
    }


    /**
     * Get student classroom
     * 
     * @return void
     */
    public function getStudentClassroom()
    {
        $session = session();
        $db = Database::connect();

        if ($session->role !== 'student') 
            return null;
        
        // Join table students, classrooms, and classroom_student
        return $db->table('students')
            ->distinct()
            ->join('classrooms', 'classrooms.id = students.classroom_id')
            ->where('students.user_id', $session->id)
            ->select('classrooms.name')
            ->get()->getRow();
    }

    /**
     * get Translate role
     * 
     */
    public function getRoleId()
    {
        $role = $this->attributes['role'];

        switch ($role) {
            case 'admin':
                return 'admin';
                break;
            case 'teacher':
                return 'guru';
                break;
            case 'student':
                return 'siswa';
                break;
            default:
                return 'Tidak Diketahui';
                break;
        }
    }

    public function getTtl() {
        return $this->attributes['birth_place'] . ', ' . Carbon::parse($this->attributes['birth_date'])->locale('id')->translatedFormat('j F Y');
    }
}
