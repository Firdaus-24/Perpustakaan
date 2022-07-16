<?php 

class Buku extends Controller{
    public function index(){
        $data['judul'] = 'Buku';
        $data['buku'] = $this->model('Buku_model')->getAllBuku();
        $this->view('templates/header', $data);
        $this->view('buku/index', $data);
        $this->view('templates/footer');
    }
    public function detail($id){
        $data['judul'] = 'Buku';
        $data['buku'] = $this->model('Buku_model')->getBukuById($id);
        $this->view('templates/header', $data);
        $this->view('buku/detail', $data);
        $this->view('templates/footer');
    }
    public function tambah()
    {
        if($this->model('Buku_model')->tambahBuku($_POST) > 0 ){
            Flasher::setFlash('Berhasil' , 'Ditambahkan' , 'success');
            header('Location: ' . BASEURL . '/buku');
            exit;
        }else{
            Flasher::setFlash('Gagal' , 'Ditambahkan' , 'danger');
            header('Location: ' . BASEURL . '/buku');
            exit;
        }
    }
    public function hapus($id)
    {
        if($this->model('Buku_model')->hapusBuku($id) > 0 ){
            Flasher::setFlash('Berhasil' , 'Dihapus' , 'success');
            header('Location: ' . BASEURL . '/buku');
            exit;
        }
    }
}