<br>
<div class="container mt-5">
    <h3 class="text-center">DAFTAR BUKU</h3>
    
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal" >
    Tambah Data
    </button>

    <div class="list-group mt-3">
        <a href="#" class="list-group-item list-group-item-action active">
            Ilmu Komputer
        </a>
            <?php foreach ( $data['buku'] as $buku) : ?>
        <ul>
            <li class="mt-1">
                <?= $buku['judul']; ?>
                <a href="<?= BASEURL;?>/buku/hapus/<?= $buku['id'] ;?>" class="badge badge-danger float-right ml-1" onclick="return confirm('anda yakin?')">Hapus</a>
                <a href="<?= BASEURL;?>/buku/ubah/<?= $buku['id'] ;?>" class="badge badge-primary float-right ml-1" data-toggle="modal" data-target="#formModal">Update</a>
                <a href="<?= BASEURL;?>/buku/detail/<?= $buku['id'] ;?>" class="badge badge-warning float-right ml-1">Detail</a>
            </li>
        </ul>
            <?php endforeach; ?>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/buku/tambah" method="post">
            <div class="form-group">
                <label for="kode">Kode Buku</label>
                <input type="number" class="form-control" name="kode" id="kodeBuku"">
            </div>
            <div class="form-group">
                <label for="judul">Judul Buku</label>
                <input type="text" class="form-control" name="judul" id="judul"">
            </div>
            <div class="form-group">
                <label for="penulis">Penulis</label>
                <input type="text" class="form-control" name="penulis" id="penulis"">
            </div>
            <div class="form-group">
                <label for="penerbit">Penerbit</label>
                <input type="text" class="form-control" name="penerbit" id="penerbit"">
            </div>
            <div class="form-group">
                <label for="tahun_terbit">Tahun Terbit</label>
                <input type="text" class="form-control" name="tahun_terbit" id="tahun_terbit"">
            </div>
            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="number" class="form-control" name="stok" id="stok"">
            </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
      </div>
      </form>
    </div>
  </div>
</div>

<script src="sweetalert2.all.min.js"></script>