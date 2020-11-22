<div class="content-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title mb-4">Laporan Masuk</h5>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?=base_url('adm_laporan').'/Pending'?>">Pengajuan</a></li>
							<li class="breadcrumb-item"><a href="<?=base_url('adm_laporan').'/Penyelidikan'?>">Penyelidikan</a></li>
							<li class="breadcrumb-item"><a href="<?=base_url('adm_laporan').'/Tolak'?>">Tolak</a></li>
							<li class="breadcrumb-item"><a href="<?=base_url('adm_laporan').'/Selesai'?>">Hasil</a></li>
						</ol>
					</nav>
					<form action="<?=base_url('search_')?>" method="post">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<div class="col-md-3">
									<div class="form-group" style="margin-bottom:0">
										<select class="form-control" id="year" name="status">
											<option value="pending">Pending</option>
											<option>Penyelidikan</option>
											<option>Tolak</option>
											<option>Selesai</option>
										</select>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group" style="margin-bottom:0">
										<select class="form-control" id="year" name="year">
											<?php 
											for($i = date('Y') ; $i >= 2015; $i--){
												echo "<option>$i</option>";
											}
											?>
										</select>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group" style="margin-bottom:0">
										<select class="form-control" id="month" name="month">
											<?php
											$bulan = array("", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
											for($a=1;$a<=12;$a++){
												if($a==date("m")){ 
													$pilih="selected";
												}else {
													$pilih="";
												}
												if($a < 10){
													$mmm = '0'.$a;
												}else{
													$mmm = $a;
												}
												echo("<option value=\"$mmm\" $pilih>$bulan[$a]</option>"."\n");
											}
											?>
										</select>
									</div>
								</div>
								<div class="col-md-3">
									<button class="btn btn-info">Cari</button>
								</div>
							</ol>
						</nav>
					</form>

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