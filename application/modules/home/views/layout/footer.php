  <!--  End Modal -->
  <footer class="footer" data-background-color="black">
    <div class="container">
      <nav class="float-left">
        <ul>
          <li>

          </li>
        </ul>
      </nav>
      <div class="copyright float-right">
        Sistem Informasi Desa Tamangapa
      </div>
    </div>
  </footer>
  <!--   Core JS Files   -->
  <script src="<?= base_url('assets/home/') ?>assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="<?= base_url('assets/home/') ?>assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="<?= base_url('assets/home/') ?>assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="<?= base_url('assets/home/') ?>assets/js/plugins/moment.min.js"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="<?= base_url('assets/home/') ?>assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="<?= base_url('assets/home/') ?>assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="<?= base_url('assets/home/') ?>assets/js/material-kit.js?v=2.0.7" type="text/javascript"></script>
  <script src="<?= base_url('assets/') ?>js/sweetalert2.all.min.js"></script>
  <script src="<?= base_url('assets/') ?>js/mySwal.js"></script>
  <script>
    $(document).ready(function() {
      //init DateTimePickers
      materialKit.initFormExtendedDatetimepickers();

      // Sliders Init
      materialKit.initSliders();
    });


    function scrollToDownload() {
      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>
  </body>

  </html>