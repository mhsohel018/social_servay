<footer class="main-footer">
    <strong>Copyright &copy; 2016-2017 <a href="whatsapp://send?phone=8801735254295&text=I want to develop a software for my business. Please text me back.&source=&data=" target="_blank" >Morshed Habib</a>.</strong> All rights
    reserved.
</footer>
          <script src="<?= base_url() . 'admin_file/admin/' ?>plugins/jQuery/jquery-2.2.3.min.js"></script>
          <!-- Bootstrap 3.3.6 -->
          <script src="<?= base_url() . 'admin_file/admin/' ?>bootstrap/js/bootstrap.min.js"></script>
          <!-- DataTables -->
          <script src="<?= base_url() . 'admin_file/admin/' ?>plugins/datatables/jquery.dataTables.min.js"></script>
          <script src="<?= base_url() . 'admin_file/admin/' ?>plugins/datatables/dataTables.bootstrap.min.js"></script>
          <!-- SlimScroll -->
          <script src="<?= base_url() . 'admin_file/admin/' ?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
          <!-- FastClick -->
          <script src="<?= base_url() . 'admin_file/admin/' ?>plugins/fastclick/fastclick.js"></script>
          <!-- AdminLTE App -->
          <script src="<?= base_url() . 'admin_file/admin/' ?>dist/js/app.min.js"></script>
          <!-- AdminLTE for demo purposes -->
          <script src="<?= base_url() . 'admin_file/admin/' ?>dist/js/demo.js"></script>
          
          <script src="<?= base_url() . 'admin_file/admin/' ?>plugins/ckeditor/ckeditor.js"></script>
          <!-- page script -->
          <script src="<?php echo base_url() ?>jQuery-Plugin-Print/jQuery.print.js"></script>

  <script src="<?=base_url()?>jquery-ui-1.12.1/jquery-ui.min.js"></script>
          <script>
            $(function () {
                $("#example1").DataTable({
    buttons: [
        'print'
    ]
} );
                $("#example3").DataTable();
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false
                });
            });

        </script>
        <script>
  $( function() {
    $( ".date" ).datepicker({
  dateFormat: "yy-mm-dd"
});
  } );
  </script>

    </body>
    </html>