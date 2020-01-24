<!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019.</strong>
    All rights reserved.
    
  </footer>

<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?php echo base_url();?>/assets/admintheme/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url();?>/assets/admintheme/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url();?>/assets/admintheme/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>/assets/admintheme/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="<?php echo base_url();?>/assets/admintheme/dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="<?php echo base_url();?>/assets/admintheme/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="<?php echo base_url();?>/assets/admintheme/plugins/raphael/raphael.min.js"></script>
<script src="<?php echo base_url();?>/assets/admintheme/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="<?php echo base_url();?>/assets/admintheme/plugins/jquery-mapael/maps/usa_states.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="<?php echo base_url();?>/assets/admintheme/dist/js/pages/dashboard2.js"></script>

  <!--Script for Tables/DataTable-->
<!-- jQuery -->
<!-- DataTables -->
<script src="<?php echo base_url();?>/assets/admintheme/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url();?>/assets/admintheme/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>



<!--Script for Gallery-->


<script src="<?php echo base_url();?>/assets/admintheme/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<!-- Filterizr-->
<script src="<?php echo base_url();?>/assets/admintheme/plugins/filterizr/jquery.filterizr.min.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    $('.filter-container').filterizr({gutterPixels: 3});
    $('.btn[data-filter]').on('click', function() {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });
  })
</script>

<!--End of Script for Gallery-->


<!-- ChartJS -->
<script src="<?php echo base_url();?>/assets/admintheme/plugins/chart.js/Chart.min.js"></script>


<!--Script for Mailbox-->

<script>
  $(function () {
    //Enable check and uncheck all functionality
    $('.checkbox-toggle').click(function () {
      var clicks = $(this).data('clicks')
      if (clicks) {
        //Uncheck all checkboxes
        $('.mailbox-messages input[type=\'checkbox\']').prop('checked', false)
        $('.checkbox-toggle .far.fa-check-square').removeClass('fa-check-square').addClass('fa-square')
      } else {
        //Check all checkboxes
        $('.mailbox-messages input[type=\'checkbox\']').prop('checked', true)
        $('.checkbox-toggle .far.fa-square').removeClass('fa-square').addClass('fa-check-square')
      }
      $(this).data('clicks', !clicks)
    })

    //Handle starring for glyphicon and font awesome
    $('.mailbox-star').click(function (e) {
      e.preventDefault()
      //detect type
      var $this = $(this).find('a > i')
      var glyph = $this.hasClass('glyphicon')
      var fa    = $this.hasClass('fa')

      //Switch states
      if (glyph) {
        $this.toggleClass('glyphicon-star')
        $this.toggleClass('glyphicon-star-empty')
      }

      if (fa) {
        $this.toggleClass('fa-star')
        $this.toggleClass('fa-star-o')
      }
    })
  })
</script>

<!--End of Script for Mailbox-->

</div>
</body>
</html>
