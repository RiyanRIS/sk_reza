  <script src="dist/js/jquery.js"></script>
  <script src="dist/js/datatable.js"></script>
  <script src="dist/js/datatable-bs4.js"></script>
  <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
  <script src="plugins/sweetalert2/dist/sweetalert2.all.min.js"></script>
  <script>
    <?= getMsg() ?>
    $(document).ready(function() {
      $('.datatable').DataTable();
    })
  </script>