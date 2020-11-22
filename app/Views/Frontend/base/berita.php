<section id="lapor">
</section>
<br>
<section>
	<div class="container">
		<?php foreach ($all as $value) {?>
		<article class="row blog_item box" style="padding: 10px;">
			<div class="col-md-3">
				<div class="blog_info text-right">
					<ul class="blog_meta list">
						<li><a href="#"><?=$value['created_at']?><i class="lnr lnr-calendar-full"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-9">
				<div class="blog_post">
					<img src="<?=base_url('public/thm/')?>/<?=$value['thumbnail']?>" alt="">
					<div class="blog_details">
						<a href="<?=base_url('Vberita')?>/<?=$value['id']?>">
							<h2><?=$value['title']?></h2>
						</a>
						<a href="<?=base_url('Vberita')?>/<?=$value['id']?>" class="primary_btn">View More</a>
					</div>
				</div>
			</div>
		</article>
	<?php } ?>
	</div>
</section>