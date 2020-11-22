<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin</title>
  <link rel="stylesheet" href="<?=base_url('admin')?>/node_modules/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="<?=base_url('admin')?>/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" />
  <link rel="stylesheet" href="<?=base_url('admin')?>/css/style.css" />
  <link rel="shortcut icon" href="<?=base_url('admin')?>/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid">
      <div class="row">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth-pages">
          <div class="card col-lg-4 mx-auto">
            <div class="card-body px-5 py-5">
              <h3 class="card-title text-left mb-3">Login</h3>
              <form action="<?=base_url('proses_login')?>" method="post">
                <div class="form-group">
                  <input type="text" name="username" class="form-control p_input" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="text" name="password" class="form-control p_input" placeholder="Password">
                </div>
                
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block enter-btn">LOG IN</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="<?=base_url('admin')?>/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="<?=base_url('admin')?>/node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="<?=base_url('admin')?>/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?=base_url('admin')?>/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <script src="<?=base_url('admin')?>/js/misc.js"></script>
</body>

</html>
