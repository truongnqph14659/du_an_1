<?php require_once('./app/views/admin/header.php'); ?>
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
        <h3 class="card-title">Bordered Table</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th style="width: 10px">#</th>
              <th>user_name</th>
              <th>phone</th>
              <th>Status</th>
              <th>Đang xử lý</th>
              <th>Đóng gói</th>
              <th>Xuất kho</th>
              <th>đã thanh toán</th>
              <th>Edit</th>
            </tr>
          </thead>
          <tbody>

            <tr>
              <td>1.</td>
              <td>trường</td>
              <td>0869919717</td>
              <td>thanh toán thành công</td>
              <form action="">
                <td>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="radio" id="age1" name="age" data-id="222">
                    </div>
                  </div>
                </td>
                <td>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="radio" id="age2" name="age" value="60">
                    </div>
                  </div>
                </td>
                <td>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="radio" id="age3" name="age" value="100">
                    </div>
                  </div>
                </td>
                <td>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="radio" id="age4" name="age" value="100">
                    </div>
                  </div>
                </td>
              </form>
              <td>
                <span class="badge badge-success"><a href="order_detail?id="><i class="fas fa-eye" style="color: #ffff;"></i></a></span>
                <span class="badge bg-danger"><a href="Delete_acount?id="><i class="fas fa-trash-alt"></i></a></span>
              </td>
            </tr>

          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
      <div class="card-footer clearfix">
        <ul class="pagination pagination-sm m-0 float-right">
          <li class="page-item"><a class="page-link" href="#">«</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">»</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<?php
require_once './vender/jquery_lib.php';
?>
<script>
  $(document).ready(() => {
    $('#age1').on('click', () => {
      alert('huynguyen');
    })

  });
</script>
<?php
require_once './app/views/admin/footer.php';
?>