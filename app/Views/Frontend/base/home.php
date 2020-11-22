    <!--================Home Banner Area =================-->
    <section class="banner-area owl-carousel" id="home">
        <div class="single_slide_banner slide_bg1">
            <div class="container">
                <div class="row fullscreen d-flex align-items-center">
                    <div class="banner-content col-lg-12 justify-content-center">
                        <h3>Pelaporan PETI</h3>
                        <a href="<?=base_url('laporan')?>" class="primary-btn">Buat Laporan</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_slide_banner slide_bg2">
            <div class="container">
                <div class="row fullscreen d-flex align-items-center">
                    <div class="banner-content col-lg-12 justify-content-center">
                        <h3>Pelaporan PETI</h3>
                        <a href="<?=base_url('laporan')?>" class="primary-btn">Buat Laporan</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_slide_banner slide_bg3">
            <div class="container">
                <div class="row fullscreen justify-content-endd-flex align-items-center">
                    <div class="banner-content col-lg-12 justify-content-center">
                        <h3>Pelaporan PETI</h3>
                        <a href="<?=base_url('laporan')?>" class="primary-btn">Buat Laporan</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->
    <section style="margin-top: 100px; margin-bottom: 100px;">
        <div class="container">
            <div class="text-center">
                <h4>Brita</h4>
                <hr>
            </div>
            <div class="row">
            <?php foreach ($berita as $value) {?>
                    <div class="col-md-6">
                        <div class="card" style="width: 100%;">
                          <img src="<?=base_url('public/thm/')?>/<?=$value['thumbnail']?>" class="card-img-top" alt="..." style="height: 200px;">
                          <div class="card-body">
                            <a href="<?=base_url('Vberita/').'/'.$value['id']?>"> <h5 class="card-title"><?=$value['title']?></h5></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>