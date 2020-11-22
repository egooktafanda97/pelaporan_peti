<!--================ Start Footer Area =================-->
    <footer class="footer_area section_gap" style="background-color: #d6d6d4;">
        <div class="container">
            <div class="row footer_inner justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="copyright">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Polres KUantan Singingi<i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--================End Footer Area =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?=assets()?>/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript">
        $('.list').css('background-color','#f7f4f4;');
    </script>

    <script src="<?=assets()?>/js/popper.js"></script>
    <script src="<?=assets()?>/js/bootstrap.min.js"></script>
    <script src="<?=assets()?>/js/stellar.js"></script>
    <script src="<?=assets()?>/js/jquery.magnific-popup.min.js"></script>
    <script src="<?=assets()?>/vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="<?=assets()?>/vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="<?=assets()?>/vendors/isotope/isotope-min.js"></script>
    <script src="<?=assets()?>/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="<?=assets()?>/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?=assets()?>/js/mail-script.js"></script>
    <script src="<?=assets()?>/js/theme.js"></script>
    <script src="<?=assets()?>/js/function.js"></script>
    <script src="<?=assets()?>/js/sweetalert.min.js"></script>
    <?php !empty($ajax)?include 'ajax/'.$ajax.'.php':''?>
</body>

</html>