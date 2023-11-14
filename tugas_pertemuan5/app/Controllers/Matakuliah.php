<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Matakuliah extends BaseController
{
    public function form()
    {
        return view('view-form-matakuliah');
    }

    public function submit()
    {
        $validation = service('validation');

        // Aturan validasi
        $rules = [
            'kode' => [
                'label' => 'Kode',
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi.',
                    'min_length' => 'Panjang kolom {field} minimal 5 karakter.'
                ]
            ],
            'nama' => [
                'label' => 'Nama',
                'rules' => 'required|min_length[3]',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi.',
                    'valid_email' => 'Kolom {field} harus berisi alamat email yang valid.',
                    'is_unique' => 'Alamat email {field} sudah terdaftar.'
                ]
            ],
            'sks' => [
                'label' => 'SKS',
                'rules' => 'required|',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi.',
                    'min_length' => 'Panjang kolom {field} minimal 8 karakter.'
                ]
            ]
        ];

        if ($this->request->getMethod() === 'post') {
            if ($validation->setRules($rules)->run($this->request->getPost())) {
                // Data valid, lakukan sesuatu (misalnya, simpan ke database)
                $data = [
                    'kode' => $this->request->getVar('kode'),
                    'nama' => $this->request->getVar('nama'),
                    'sks' => $this->request->getVar('sks'),
                ];
                return view('view-data-matakuliah', $data);
            } else {
                // Validasi gagal, kembali ke halaman form dengan pesan kesalahan
                return view('view-form-matakuliah');
            }
        }
    }
}
