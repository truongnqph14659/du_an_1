<?php require_once('./app/views/admin/header.php'); ?>
<link rel="stylesheet" href="<?= server_port ?>plugins/fontawesome-free/css/all.min.css">
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Danh Sách Tài Khoản</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Starter Page</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <div class="content">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">DataTable with default features</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>user name</th>
              <th>Email</th>
              <th>Avatar</th>
              <th>vai tro</th>
              <th>Edit</th>
            </tr>
          </thead>
          <tbody>
            <!-- fake data -->
            <?php
            $result = [];
            ?>
            <?php foreach ($result as $key => $value) : ?>
              <tr>
                <td><?= $value['user_name'] ?></td>
                <td><?= $value['email'] ?></td>
                <td><img src="public/img/<?= $value['image'] ?>" class="user_image" style="width:50px"></td>
                <td>
                  <?php
                  if ($value['role'] == 1) {
                    echo $vai_tro = 'quản trị viên';
                  } else {
                    echo $vai_tro = 'khách hàng';
                  }
                  ?>
                </td>
                <td>
                  <span class="badge badge-success"><a href="edit_acount?id=<?= $value['id'] ?>"><i class="fas fa-edit" style="color: #ffff;"></i></a></span>
                  <span class="badge bg-danger" data-id="<?php echo $value['id'] ?>" style="cursor: pointer;"><i class="fa-solid fa-trash-can"></i></span>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
  </div>
</div>
<script src="<?= server_port ?>du_an_1/public/plugins/jquery/jquery.min.js"></script>
<script src="<?= server_port ?>du_an_1/public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= server_port ?>du_an_1/public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="du_an_1/public/plugins/jquery-ui/jquery-ui.min.js"></script>
<?php if (isset($_GET['messeger'])) : ?>
  <script>
    Swal.fire({
      // position: 'top-end',
      icon: 'success',
      title: 'Your work has been saved',
      showConfirmButton: false,
      timer: 2000
    })
  </script>
<?php endif; ?>
<script>
  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis", "edit"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
  $(document).ready(() => {
    // alert('ok');
    $('.bg-danger').on('click', function() {
      var id = $(this).data('id');
      Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: "Delete_acount",
            method: "GET",
            data: {
              id: id,
            },
            success: function(data) {
              Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
              ).then((result) => {
                if (result.isConfirmed) {
                  location.reload();
                }
              })

            }
          });
        }
      })
    })
  });
</script>
<?php require_once('./app/views/admin/footer.php'); ?>