<div class="content-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title mb-4">Laporan Masuk</h5>
					<div class="row">
						<div class="col-md-12 box" style="padding: 5px;">
							<div class="row">
								<div class="col-md-6">
									<h5>Data Pelapor</h5>
									<hr>
									<table class="table table-striped">
										<tbody>
											<?php foreach ($new as $key => $value) {
												if(
													$key != 'kode' &&
													$key != 'created_at' &&
													$key != 'updated_at' &&
													$key != 'pesan' &&
													$key != 'lokasi' &&
													$key != 'bukti' &&
													$key != 'kode_user'&&
													$key != 'user_kode' &&
													$key != 'masalah' &&
													$key != 'terduga' &&
													$key != 'status' &&
													$key != 'deskripsi'	
												){
													?>
													<tr>
														<td><?=$key?></td>
														<td>:</td>
														<td><?=$value?></td>
													</tr>
												<?php }} ?>
											</tbody>
										</table>
										<div class="card border-info mb-3" style="width: 100%; background-color: #f1f1f1;">
											<div class="card-header">Deskripsi Laporan</div>
											<div class="card-body text-black">
												<p><?=$new['deskripsi']?></p>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<h5>Laporan</h5>
										<hr>
										<div class="card border-info mb-3" style="width: 100%; background-color: #f1f1f1;">
											<div class="card-header">Hal</div>
											<div class="card-body text-black">
												<p><?=$new['masalah']?></p>
											</div>
										</div>
										<div class="card border-info mb-3" style="width: 100%; background-color: #f1f1f1;">
											<div class="card-header">ALamat Peti</div>
											<div class="card-body text-black">
												<p id="al"></p>
											</div>
										</div>
										<table class="table table-striped">
											<tbody>
												<tr>
													<td>Terduga</td>
													<td>:</td>
													<td><?=empty($new['terduga'])?'terduga tidak di defenisikan':$new['terduga']?></td>
												</tr>
											</tbody>
										</table>
										<div class="card border-info mb-3" style="width: 100%; background-color: #f1f1f1;">
											<div class="card-header">Bukti Berupa Foto</div>
											<div class="card-body text-black">
												<a href="<?=base_url()?>/public/uploads/<?=$new['bukti']?>">
													<img src="<?=base_url()?>/public/uploads/<?=$new['bukti']?>" style="width: 100%"></a>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div id="map" style="width: 100%; height:300px; background-color: #ddd"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>