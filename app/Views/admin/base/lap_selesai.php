<div class="content-wrapper">
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title mb-4">Laporan Masuk</h5>
				<div class="table-responsive">
					<table class="table center-aligned-table">
						<thead>
							<tr class="text-primary">
								<th>No</th>
								<th>Nama Pelapor</th>
								<th>Email</th>
								<th>Status</th>
								<th>date</th>
								<th>Check</th>
							</tr>
						</thead>
						<tbody>
							<?php $i=1; foreach ($new as $value) {?>
							<tr class="">
								<td><?=$i++?></td>
								<td><?=$value['nama']?></td>
								<td><?=$value['email']?></td>
								<td><span class="badge badge-warning"><?=ucwords($value['status'])?></span></td>
								<td><?=$value['created_at']?></td>
								<td><a href="<?=base_url('previews/')?>/<?=$value['user_kode']?>" class="btn btn-primary btn-sm">Check</a></td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
</div>