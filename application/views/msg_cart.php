<div class="container"><br><br><br>
	<div class="jumbotron">
		<div class="row">
			<div class="col-md-12">
				<h2>Detail Pesanan Film Bioskop</h2>
	<form action="<?= base_url('index.php/cart/save_cart'); ?>" method="post">
<table class="table table-hover table-stripped" style="background-color: orange; color: black;">
	<tr style="background-color: black; color: white;">
		<td>Nama Film</td><td>Deskripsi</td><td>Qty</td><td>Harga</td><td>Sub Total</td><td>Settings</td>
	</tr>
		<?php 
			foreach($this->cart->contents() as $items) { 
		?>
			<tr>
				<td>
					<input type="hidden" name="id_film[]" value="<?= $items['id']; ?>">
						<input type="hidden" name="qty[]" value="<?= $items['qty']; ?>">
					<?= $items['name']; ?>
				</td>
				<td>
					<?= $items['options']['deskripsi']; ?>
				</td>
				<td>
					<?= $items['qty']; ?>
				</td>
				<td>
					<?= $items['price']; ?>
				</td>
				<td>
					<?= $items['subtotal']; ?>
				</td>
				<td style="background-color: red;">
					<a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data ...')" href="<?= base_url('index.php/cart/rm_cart/'.$items['rowid']); ?>"><center>Hps</center></a>
				</td>
			</tr>
		<?php
			}
		?>
	<tr>
		<td></td><td></td><td></td><td></td><td></td><td></td>
	</tr>
	<tr>
		<input type="hidden" name="grandtotal" value="<?= $this->cart->total(); ?>">
		<td colspan="4">Grand Total</td><td><?= $this->cart->total(); ?></td><td></td>
	</tr>
</table>
<input type="submit" name="submit" value="Check-Out" class="btn btn-success">
</form>
			</div>
		</div>
	</div>
</div>