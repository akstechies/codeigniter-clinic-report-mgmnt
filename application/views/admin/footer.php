<!-- jQuery -->
<script src="<?php echo base_url(); ?>resources/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url(); ?>resources/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>resources/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url(); ?>resources/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url(); ?>resources/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo base_url(); ?>resources/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url(); ?>resources/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url(); ?>resources/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url(); ?>resources/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url(); ?>resources/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url(); ?>resources/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url(); ?>resources/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url(); ?>resources/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>resources/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url(); ?>resources/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>resources/dist/js/demo.js"></script>

<!-- Ekko Lightbox -->
<script src="<?php echo base_url(); ?>resources/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<!-- Filterizr-->
<script src="<?php echo base_url(); ?>resources/plugins/filterizr/jquery.filterizr.min.js"></script>

<script src="https://rawcdn.githack.com/FuriosoJack/TableHTMLExport/v2.0.0/src/tableHTMLExport.js"></script>
<script src="https://unpkg.com/jspdf@1.5.3/dist/jspdf.min.js"></script>
<script src="https://unpkg.com/jspdf-autotable@3.5.6/dist/jspdf.plugin.autotable.js"></script>
<script src="<?php echo base_url();?>resources/plugins/toastr/toastr.min.js"></script>

<script src="<?php echo base_url();?>resources/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url();?>resources/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

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
$(document).ready(function () {
  bsCustomFileInput.init();
});

</script>

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

  $(document).ready(function(){
   $("#export-btn").click(function(){  
    $("#approveTbl").tableHTMLExport({type:'pdf',filename:'contributions.pdf',ignoreColumns:'#status,#action'});

  });
});

$(document).ready(function() {
            $('#amount').keyup(function(ev) {
                var total = $('#amount').val();
                var adm = $('#duration').val();

				if (adm < 4) {	
					adm = adm;
                } else if (adm > 3) {
					adm = adm - 3;
                }

                var tot_price = (total / adm);
				var divobj = document.getElementById('min_emi');

				if (tot_price == Infinity)
				{
					divobj.value = ' ';
				} else {
					divobj.value = tot_price.toFixed(2);
				}

                
            });
        });

</script>
</body>
</html>
