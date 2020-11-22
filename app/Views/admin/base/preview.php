<div class="content-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title mb-4">Laporan Masuk</h5>
						<div class="row">
							<div class="col-md-8 box" style="padding: 5px;">
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


									<div class="col-md-4">
										<div class="card text-white bg-dark mb-3" style="width: 100%">
											<div class="card-header">Tanggapan</div>
											<div class="card-body">

												<?php if($new['status']=='pending' || $new['status']=='Pending'):?>
													<form action="<?=base_url('status_proses')?>" method="post">
														<input type="hidden" name="kode" value="<?=$new['user_kode']?>">
														<div class="form-group">
															<label>Proses Selanjut Nya</label>
															<select class="form-control" id="next_proses" name="status">
																<option>Penyelidikan</option>
																<option>Tolak</option>
															</select>
														</div>
														<div class="form-group" id="msg">
															<label>Tinggalkan Pesan</label>
															<textarea class="form-control" id="pesan" rows="3" name="pesan"></textarea>
														</div>
														<button type="submit" class="btn btn-primary mr-2 float-right">Send</button>
													</form>
												<?php endif?>
												<?php if($new['status']=='Penyelidikan'):?>
													<form action="<?=base_url('status_hasil')?>" method="post">
														<input type="hidden" name="kode" value="<?=$new['user_kode']?>">
														<div class="form-group">
															<label>Hail Laporan</label>
															<select class="form-control" id="next_proses" name="status">
																<option>Selesai</option>
																<option>Kasus Ditutup</option>
															</select>
														</div>
														<div class="form-group" id="msg_kaus">
															<label>Tinggalkan Pesan Untuk Pelapor</label>
															<textarea class="form-control" id="pesan" rows="3" name="pesan"></textarea>
														</div>
														<button type="submit" class="btn btn-primary mr-2 float-right">Send</button>
													</form>
												<?php endif?>

												<?php if($new['status']=='Selesai'):?>
													<a href="<?=base_url('deleteLap/'.$new['user_kode'].'/'.'/laporanhasil')?>" class="btn btn-danger float-right">Hapus</a>
												<?php endif?>
												<?php if($new['status']=='Tolak'):?>
													<a href="<?=base_url('deleteLap/'.$new['user_kode'].'/'.$new['kode'].'/lapTolak')?>" class="btn btn-danger float-right">Hapus</a>
												<?php endif?>
						
												
											</div>
											<div class="card-footer">
												Print Laporan <a href="<?=base_url('lap_preview/'.$new['user_kode'])?>" class="btn btn-light float-right"><span class="fa fa-print"></span></a>
											</div>
										</div>

									</div>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>