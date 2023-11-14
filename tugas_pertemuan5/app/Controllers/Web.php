<?php namespace App\Controllers;

class Web extends BaseController {
    public function __construct() {
        helper('url');
    }

    public function home() {
        $data['judul'] = "Halaman Depan";
        
        echo view('v_header', $data);
        echo view('v_index', $data);
        echo view('v_footer', $data);
    }

    public function about() {
        $data['judul'] = "Halaman About";
        
        echo view('v_header', $data);
        echo view('v_about', $data);
        echo view('v_footer', $data);
    }
}
