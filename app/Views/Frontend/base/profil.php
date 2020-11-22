<section id="lapor">
</section>
<br>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12 box" style="margin-bottom: 50px; padding-top: 10px">
				<h4>Visi :</h4>
				<p><?=$profil->visi?></p>

			</div>
			<hr>
			<div class="col-md-12 box" style="margin-bottom: 50px; padding-top: 10px">
				<h4>Misi :</h4>
				<p><?=$profil->misi?></p>
				
			</div>
			<hr>
			<div class="col-md-12 box" style="margin-bottom: 50px; padding-top: 10px">
				<h4>Sejarah :</h4>
				<p><?=$profil->sejarah?></p>
				
			</div>
			<hr>
			<div class="col-md-12 box" style="margin-bottom: 50px; padding-top: 10px">
				<h4>Struktur Organisasi :</h4>
				<img src="<?=base_url('public/uploads/')?>/<?=$profil->struktur_organisasi?>" style="width: 100%">
				
			</div>
		</div>
	</div>
</section>