<br>
<div class="container mt-5">
	<div class="card" style="width: 20rem;">
	  <div class="card-body">
		    <h5 class="card-title"><?= $data['buku'] ['judul'];  ?></h5>
		    <p class="card-text">Kode : <?= $data['buku']['kode'] ;  ?>.</p>
		     <p class="card-text">Penulis : <?= $data['buku']['penulis'] ;  ?>.</p>
		      <p class="card-text">Penerbit : <?= $data['buku']['penerbit'] ;  ?>.</p>
		      <p class="card-text">Tahun Terbit : <?= $data['buku']['tahun_terbit'] ;  ?>.</p>
		      <p class="card-text">Stok : <?= $data['buku']['stok'] ;  ?>.</p>
		    <a href="<?= BASEURL ;  ?>/buku" class="btn btn-primary">Back</a>
	  </div>
	</div>
</div>