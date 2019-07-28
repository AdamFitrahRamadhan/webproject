<br>
<br>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<center><h1><?=$title;?></h1></center>
			<p style="color:black">Total Bayar : <br>
			
			RP. <?= number_format($total)?><br>

			Silahkan Transfer Ke Rekening Kami<br>

		Jika Sudah Membayar, klik tombol konfirmasi untuk mengkonfirmasi pembayaran.</p>
		<br>
		<a href="<?= base_url('index.php/cart/confirm/'.$id_nota);?>" class="btn btn-success">Konfirmasi Pembayaran</a>
		</div>
	</div>
</div>