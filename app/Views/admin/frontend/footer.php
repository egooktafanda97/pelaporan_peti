
 <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="float-right">
                <a href="#">Priska Anugrah</a> &copy; 2020
            </span>
          </div>
        </footer>

        <!-- partial -->
      </div>
    </div>

  </div>

  <script src="<?=base_url('admin')?>/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="<?=base_url()?>/node_modules/clipboard/dist/clipboard.min.js"></script>
  <script src="<?=base_url('node_modules/ckeditor4/ckeditor.js')?>"></script>
  <script src="<?=base_url('admin')?>/node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="<?=base_url('admin')?>/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?=base_url('admin')?>/node_modules/chart.js/dist/Chart.min.js"></script>
  <script src="<?=base_url('admin')?>/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
 <!--  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5NXz9eVnyJOA81wimI8WYE08kW_JMe8g&callback=initMap" async defer></script> -->
  <script src="<?=base_url('admin')?>/js/off-canvas.js"></script>
  <script src="<?=base_url('admin')?>/js/hoverable-collapse.js"></script>
  <script src="<?=base_url('admin')?>/js/misc.js"></script>
  <script src="<?=base_url('admin')?>/js/chart.js"></script>
  <script src="<?=assets()?>/js/function.js"></script>
  <?php !empty($ajax)?include 'ajax/'.$ajax.'.php':''?>
</body>

</html>
