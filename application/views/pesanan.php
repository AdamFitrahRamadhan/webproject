<br>
<br>
<div class="container">
	<div class="jumbotron">
		<div class="row">
			<div class="col-md-12">
				<br>
				<?php if ($this->session->flashdata('msg')): ?>
					<div class="alert alert-success">
						<?= $this->session->flashdata('msg');?>
					</div>
				<?php endif ?>
				<br>
				<table class="table table-hover">
					<tr style="background-color: black; color: white;">
						<td>NO.</td><td>NO NOTA</td><td>GRAND TOTAL</td><td>STATUS</td><td>CONFIRM</td><td>DETAIL</td>
					</tr>
					<?php
						$no=0;
						foreach ($list_msg as $msg): 
						$no++;
					?>
					<tr  style="background-color: white; color: black;">
						<td><?=$no?></td><td><?=$msg->id_nota?></td><td><?=$msg->grandtotal?></td><td><?=$msg->status?></td>
						<td>
							<?php if ($msg->status!=null): ?>
								Lunas
							<?php else: ?>
								<a href="<?=base_url('index.php/cart/confirm/'.$msg->id_nota)?>">Comfirm Payment</a> | <a href="<?=base_url('index.php/admin/rm_msg/'.$msg->id_nota)?>" onclick="return confirm('Are Your Sure To Delete The Order ?')">Delete</a>
							<?php endif ?>
						</td>
						<td>
							<a href="#detail<?=$msg->id_nota?>" data-toggle="modal">Show</a>

							<!-- modal menampilkan detail barang yang dipesan-->
							<div class="modal fade" id="detail<?=$msg->id_nota?>">
							  <div class="modal-dialog">
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
							        <center><h2 class="modal-title">Film</h2></center>
							      </div>
							      <div class="modal-body">
							        <center>
									<?php 
									foreach ($this->msg->show($msg->id_nota) as $value): ?>
									<div class="row">
										<div class="col-md-4">
											<div class="thumbnail">
												<img src="<?=base_url('asset/img/'.$value->img);?>">
											</div>
										</div>
										<div class="col-md-8">
											<h3><?= $value->nama_film?></h3>
										</div>
										</div>
									<?php endforeach ?>
									</center>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							        <button type="button" class="btn btn-primary">Save changes</button>
							      </div>

							    </div><!-- /.modal-content -->
							  </div><!-- /.modal-dialog -->
							</div><!-- /.modal -->

						</td>
					</tr>
					<?php endforeach ?>
				</table>
			</div>
		</div>
	</div>
</div>