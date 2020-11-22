<section id="lapor">
	<div class="container">
		<div class="card">
			<!-- formulir data diri -->
			<div class="card-body" id="User">
				<div class="row">
					<div class="col-md-12" style="width: 100%;">
						<h5>Laporan</h5>
						<hr>
						<h5>Data Diri</h5>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Nik</label>
							<input type="text" name="nik" onfocus="this.placeholder = ''" required class="single-input box">
						</div>
						<div class="form-group">
							<label>Nama Lengkap</label>
							<input type="text" name="nama" onfocus="this.placeholder = ''" required class="single-input box">
						</div>
						<div class="form-group">
							<label>Tempat Lahir</label>
							<input type="text" name="tempat_lahir" onfocus="this.placeholder = ''" required class="single-input box">
						</div>
						<div class="form-group">
							<label>Tanggal Lahir</label>
							<input type="date" name="tanggal_lahir" onfocus="this.placeholder = ''" required class="single-input box">
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="text" name="email" onfocus="this.placeholder = ''" required class="single-input box">
						</div>
						
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Pekerjaan</label>
							<input type="text" name="pekerjaan" onfocus="this.placeholder = ''" required class="single-input box">
						</div>
						<div class="input-group-icon mt-10">
							<label>Kebangsaan</label>
							<div class="form-select box" id="default-select">
								<select name="kebangsaan">
									<option>WNI</option>
									<option>WNA</option>
								</select>
							</div>
						</div>
						<div class="input-group-icon mt-10">
							<label>Agama</label>
							<div class="form-select box" id="default-select">
								<select name="agama">
									<option>Islam</option>
									<option>Kristen</option>
									<option>Katolik</option>
									<option>Hindu</option>
									<option>Budha</option>
								</select>
							</div>
						</div>
						<div class="form-group mt-10">
							<label>Alamat</label>
							<textarea class="single-textarea box" name="alamat" placeholder="Alamat" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Alamat'"
							required></textarea>
						</div>
						<div class="form-group">
							<label>Nomor Hp</label>
							<input type="text" name="no_hp" onfocus="this.placeholder = ''" required class="single-input box">
						</div>

					</div>
					
					<hr>
					<div class="col-md-12" style="width: 100%">
						<button class="genric-btn info medium arrow" id="sub" style="float: right; margin-left: 5px;">Next <span class="lnr lnr-arrow-right"></span></button> 
						<span id="btl"></span>
					</div>
					
					<!-- genric-btn success medium -->
				</div>
			</div>
			<!-- formulir laporan -->
			<div class="card-body" id="Laporan">
				<div class="row">
					<div class="col-md-12" style="width: 100%;">
						<h5>Laporan <span class="float-right text-warning notif" style="font-size: 12px;"></span></h5>
						<hr>
						<h5>Dasus yang di Laporkan</h5>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group mt-10">
							<label>Perihal</label>
							<textarea rows="2" class="single-textarea box" id="hal" placeholder="Perihal" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Perihal'"
							required style="resize: both;"></textarea>
						</div>
						<div class="form-group">
							<label>Terduga</label>
							<input type="text" id="terduga" placeholder="Boleh dikosongkan dengan alasan tertentu
							" onfocus="this.placeholder = ''" required class="single-input box">
						</div>
						<div class="form-group text-center" id="view">
							<img id="images" src="<?=base_url()?>/public/uploads/1596320877_9edf9cfe8e580a640bc6.png" style="width: 200px">
						</div>

						<div class="form-group">
							<label>Bukti Berupa Gambar</label>
							<input type="file" id="bukti" class="single-input box">
						</div>
						
						
					</div>
					<div class="col-md-6">
						<hr>
						<div class="row">
							<div class="col-md-12">
								<div class="switch-wrap d-flex justify-content-between">
									<p>Aktifkan Posisi Saat Ini Jika Anda Menggunakan Android</p>
									<div class="primary-switch">
										<input type="checkbox" id="default-switch">
										<label for="default-switch"></label>
									</div>
								</div>
							</div>
						</div>
						
						<label>TKP</label>
						<div id="map" style="width: 100%; height:300px; background-color: #ddd"></div>

					</div>
					<div class="col-md-12">
						<div class="form-group mt-10">
							<label>Perihal</label>
							<textarea style="height: 250px;" class="single-textarea box" id="desc" placeholder="Perihal" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Perihal'"
							required style="resize: both;"></textarea>
						</div>
					</div>

					<div style="margin-top: 10px; width: 100%;height: 2px; background-color: #ccc"></div>
					<br>
					<div class="col-md-12" style="width: 100%" id="exe_">
						
					</div>
					<!-- genric-btn success medium -->
				</div>
			</div>
		</div>
	</div>
</section>