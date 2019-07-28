<div class="col-md-4">
	<div class="thumbnail">
		<img src="<?=base_url('asset/'.$tampil_detail->gambar_film);?>" style="width: 100%">
	</div>
</div>
<div class="col-md-8">
	<form  action="<?=base_url('index.php/cart/add_cart/'.$tampil_detail->id_film);?>" method="post">
	<table class="table table-hover table-stripped">
		<tr>
			<td>Judul Buku</td><td><?= $tampil_detail->judul_film;?></td>
		</tr>
		<tr>
			<td>Deskripsi</td><td><?= $tampil_detail->detail_film;?></td>
		</tr>
		<tr>
			<td>
				Jumlah<input type="number" name="qty" class="form-control" style="width: 60px;" value="1">
			</td>
			<td><button class="btn btn-success">
				Pesan
			</button></td>
		</tr>
	</table>
	</form>
</div>