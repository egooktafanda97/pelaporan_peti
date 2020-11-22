<div class="content-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<h2>Profil</h2>
					<hr>
					<br>
					<h4>Visi</h4>
					<form action="<?=base_url('upProfil')?>" method="post" enctype="multipart/form-data">
						<textarea name="editor1" id="editor1" rows="10" cols="80"></textarea>
						<br>
						<h4>Misi</h4>
						<textarea name="editor2" id="editor2" rows="10" cols="80"></textarea>
						<br>
						<h4>Sejarah</h4>
						<textarea name="editor3" id="editor3" rows="10" cols="80"></textarea>
						<br>
						<h4>Struktur Organisasi</h4>

						<input type="file" class="form-control" name="sOrg" id="sOrg">
						<br>
						<img src="<?=base_url('public/uploads/')?>/<?=$q->struktur_organisasi?>" width="100%">

					<br>
					<br>
					<button class="btn btn-primary" style="width: 100%">Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>