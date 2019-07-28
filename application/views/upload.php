<br>
<br>
<div class="container">
	<div class="jumbotron">
		<div class="row">
			<div class="col-md-12">
				<center>
				<?php if ($this->session->flashdata('pesan')): ?>
					<div class="alert alert-success">
						<?= $this->session->flashdata('pesan');?>
					</div>
				<?php else: ?>
					<center><h1><?=$title;?></h1></center><br>
				<?php endif ?>
				<form action="<?= base_url('index.php/cart/upload_bukti'); ?>" method="post" enctype="multipart/form-data">
					<input type="hidden" name="id_nota" value="<?= $this->uri->segment(3); ?>">
					<?php if ($det_msg->bukti != null): ?>
						<br>
					<?php else: ?>
						<input type="file" name="foto" class="form-control">
					<?php endif ?>
					<br>
					<div class="thumbnail">
						<?php if ($det_msg->bukti != null): ?>
							<img src="<?=base_url('asset/bukti/'.$det_msg->bukti)?>" >
						<?php else: ?>
							<img src="<?=base_url('asset/neymar.jpg')?>" >
						<?php endif ?>
					</div>
					<?php if ($det_msg->bukti == null): ?>
						<input type="submit" name="simpan" value="Confirm" class="btn btn-success">
					<?php else: ?>
						<p>Confirmed</p>
					<?php endif ?>
				</form>
				</center>
			</div>
		</div>
	</div>
</div>