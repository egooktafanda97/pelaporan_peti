<div class="content-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title mb-4">Laporan</h5>
					<a href="<?=base_url('lapprint')?>/<?=$export['status'].'/'.$export['year'].'/'.$export['month']?>" class="btn btn-info" style="float: right; margin-bottom: 10px;" target="_blank"><span class="fa fa-print"></span></a>

					<div class="table-responsive">
						<table class="table center-aligned-table">
							<thead>
								<tr class="text-primary">
									<th>No</th>
									<th>Nama Pelapor</th>
									<th>Laporan</th>
									<th>Status Laporan</th>
									<th>Tanggal</th>
									<th>Detail</th>
								</tr>
							</thead>
							<tbody>
								<?php $i=1; foreach ($new as $value) {?>
									<tr class="">
										<td><?=$i++?></td>
										<td><?=\App\Models\Tb_user_Model::wherekode($value['kode_user'])->first()->nama?></td>
										<td><?=$value['masalah']?></td>
										<td><span class="badge badge-warning"><?=ucwords($value['status'])?></span></td>
										<td><?=$value['created_at']?></td>
										<td><a href="<?=base_url('prev/')?>/<?=$value['user_kode']?>" class="btn btn-primary btn-sm">Check</a></td>
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
