<?php

return [
    'custom' => [
        'kode' => [
            'required' => [
                'message' => 'Kode Matakuliah Harus diisi'
            ],
            'min_length' => [
                'message' => 'Kode terlalu pendek'
            ],
        ],
        'nama' => [
            'required' => [
                'message' => 'Nama Matakuliah Harus diisi'
            ],
            'min_length' => [
                'message' => 'Nama terlalu pendek'
            ],
        ],
    ],
];
