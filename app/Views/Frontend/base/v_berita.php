<section id="lapor">
</section>
<section style="margin-top: 30px; margin-bottom: 30px;">
	<div>

		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<h3><?=$v_berita->title?></h3>
					<p><?=$v_berita->created_at?><p>
						<hr>
						<div class="berita">
							<?=$v_berita->text?>
						</div>
					</div>
					<div class="col-md-4">
						<div class="box" style="padding: 20px;">
							<img src="<?=base_url('public/thm/')?>/<?=$v_berita->thumbnail?>" style="width: 100%">
							<p><?=$v_berita->title?></p>
							<p><?=$v_berita->created_at?></p>
							<hr>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>