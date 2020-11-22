  <div class=" container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="bg-white text-center navbar-brand-wrapper">
       
        
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler d-none d-lg-block navbar-dark align-self-center mr-3" type="button" data-toggle="minimize">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>

    <!-- partial -->
    <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->
        <nav class="bg-white sidebar sidebar-offcanvas" id="sidebar">
          <div class="user-info">
            <img src="<?=base_url('admin')?>/images/face.jpg" alt="">
            <p class="name">POLRES KUANSNIG</p>
            <!-- <span class="online"></span> -->
          </div>
          <ul class="nav">
            <li class="nav-item active">
              <a class="nav-link" href="<?=base_url('container')?>">
                <img src="<?=base_url('admin')?>/images/icons/006-letter.png" alt="">
                <span class="menu-title">Laporan Masuk</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url('lapPenyelidikan')?>">
                <img src="<?=base_url('admin')?>/images/icons/2.png" alt="">
                <span class="menu-title">Laporan Di Proses</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url('lapTolak')?>">
                <img src="<?=base_url('admin')?>/images/icons/exclamation-mark.png" alt="">
                <span class="menu-title">Laporan Di tolak</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url('laporanhasil')?>">
                <img src="<?=base_url('admin')?>/images/icons/4.png" alt="">
                <span class="menu-title">Hasil Tindak Lanjut Laporan</span>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="<?=base_url('adm_laporan/Selesai')?>">
                <img src="<?=base_url('admin')?>/images/icons/4.png" alt="">
                <span class="menu-title">Laporan</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url('postBerita')?>">
                <img src="<?=base_url('admin')?>/images/icons/004-coding.png" alt="">
                <span class="menu-title">Berita</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url('admprofil')?>">
                <img src="<?=base_url('admin')?>/images/icons/6.png" alt="">
                <span class="menu-title">Profil</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url('logout')?>">
                Logout
              </a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </nav>