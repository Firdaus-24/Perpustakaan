<?php 

class About extends Controller{
    public function index( $nama = 'Pintar Bersama', $usia = '14')
    {
        $data['nama'] = $nama;
        $data['usia'] = $usia;
        $data['judul'] = 'About';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page()
    {
        $data['judul'] = 'About';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}