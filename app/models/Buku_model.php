<?php 

class Buku_model{
    private $table = 'buku';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function getAllBuku()
    {
      $this->db->query('SELECT * FROM ' . $this->table);
      return $this->db->resultSet();
    }
    public function getBukuById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id' , $id);
        return $this->db->singel();
    }
    public function tambahBuku($data)
    {
        $query = "INSERT INTO " . $this->table . " 
                    VALUES
                    ('', :kode, :judul, :penulis, :penerbit, :tahun_terbit, :stok)";
        $this->db->query($query);
        $this->db->bind('kode' , $data['kode']);
        $this->db->bind('judul' , $data['judul']);
        $this->db->bind('penulis' , $data['penulis']);
        $this->db->bind('penerbit' , $data['penerbit']);
        $this->db->bind('tahun_terbit' , $data['tahun_terbit']);
        $this->db->bind('stok' , $data['stok']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function hapusBuku($id)
    {
        $query = "DELETE FROM buku WHERE id=:id";

        $this->db->query($query);
        $this->db->bind('id' , $id);
        $this->db->execute();

        return $this->db->rowCount();
    }
}