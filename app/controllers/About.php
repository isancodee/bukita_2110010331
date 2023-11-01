<?php
    class About extends Controller {

        public function __construct(){
            if($_SESSION['session_login'] != 'sudah_login') {
                Flasher::setMessage('Login','Tidak ditemukan.','danger');
                header('location: '. base_url . '/login');
                exit;
            }
        }
        
        public function index(){
            $data['title'] = 'Halaman About me';
            $data['nama'] = 'Aliksan';
            $data['alamat'] = 'Jl.Cemara raya';
            $data['no_hp'] = '082237574098';
            
            $this->view('templates/header', $data);
            $this->view('templates/sidebar', $data);
            $this->view('about/index', $data);
            $this->view('templates/footer');
        }
    }
        