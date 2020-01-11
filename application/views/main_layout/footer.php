  <!-- plugins:js -->
  <script src="<?= base_url();?>assets/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="<?= base_url();?>assets/vendors/chart.js/Chart.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?= base_url();?>assets/js/off-canvas.js"></script>
  <script src="<?= base_url();?>assets/js/hoverable-collapse.js"></script>
  <script src="<?= base_url();?>assets/js/template.js"></script>
  <script src="<?= base_url();?>assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?= base_url();?>assets/js/dashboard.js"></script>
  <!-- file-upload js -->
  
  <script src="<?= base_url();?>assets/js/chart.js"></script>
  <script src="<?= base_url();?>assets/js/file-upload.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
        $('#exportDataTable').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'excel'
            ]
        } );
    } );
  </script> 
  <!-- Data table JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
  
  <!-- End custom js for this page-->
</body>

</html>