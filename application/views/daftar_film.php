<h2>DAFTAR BUKU PERPUSTAKAAN</h2>
<?php
	foreach ($tampil_film as $film) {
?>
<div class="col-md-4">
	<a href="<?= base_url('index.php/user/detail_film/'.$film->id_film)?>" class="thumbnail">
		<img src="<?=base_url()?>asset/image/<?= $film->gambar_film;?>" style="width:100%">
		<div class="caption">
			<?= $film->judul_film?>
		</div>
	</a>
</div>

</div>
<?php }?>