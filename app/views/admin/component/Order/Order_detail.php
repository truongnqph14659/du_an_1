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
    <div class="row">
      <div class="col-md-6">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">General</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <!--  fake data  -->
          <?php
          $result = [2];
          ?>
          <?php foreach ($result as $key => $value) : ?>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Name produts</label>
                <!-- <input type="text" id="inputName" class="form-control" value="AdminLTE"> -->
                <p>asus 123</p>
              </div>
              <div class="form-group">
                <label for="inputDescription">Price</label>
                <p>100000vnd</p>
              </div>
              <div class="form-group">
                <label for="inputDescription">image</label>
                <p><img src="" class="user_image" style="width:50px"></p>
              </div>
              <div class="form-group">
                <label for="inputStatus">Quantity</label>
                <p>2</p>
              </div>
            </div>
            <hr>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Name produts</label>
                <!-- <input type="text" id="inputName" class="form-control" value="AdminLTE"> -->
                <p>asus 123</p>
              </div>
              <div class="form-group">
                <label for="inputDescription">Price</label>
                <p>100000vnd</p>
              </div>
              <div class="form-group">
                <label for="inputDescription">image</label>
                <p><img src="" class="user_image" style="width:50px"></p>
              </div>
              <div class="form-group">
                <label for="inputStatus">Quantity</label>
                <p>2</p>
              </div>
            </div>
            <!-- <?php endforeach; ?> -->
            <!-- /.card-body -->
        </div>

        <!-- /.card -->
      </div>
      <div class="col-md-6">
        <div class="card card-secondary">
          <div class="card-header">
            <h3 class="card-title">Budget</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="inputEstimatedBudget">Name</label>
              <p>tên người nhận :<strong>nguyen quang truong</strong></p>
            </div>
            <div class="form-group">
              <label for="inputSpentBudget">Phone Number</label>
              <p>số điện thoại :<strong>0869919717</strong></p>
            </div>
            <div class="form-group">
              <label for="inputEstimatedDuration">Address</label>
              <p>địa chỉ giao hàng :85/73 chợ tân xuân</strong></p>
            </div>
            <div class="form-group">
              <label for="inputEstimatedDuration">Note</label>
              <p>Ghi chú :<strong>nguy cơ bom hàng</strong></p>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <div class="card card-success">
          <div class="card-header">
            <h4 class="card-title w-100">
              <a class="d-block w-100" data-toggle="collapse" href="#collapseOne">
                Collapsible Group Item #1
              </a>
            </h4>
          </div>
          <div id="collapseOne" class="collapse show" data-parent="#accordion">
            <div class="card-body">
              <p>Tổng Đơn Hàng : <strong>2</strong> </p>
            </div>
          </div>
        </div>
        <!-- /.card -->
        <!-- /.card -->
      </div>
    </div>
  </div>
</div>
<?php
require_once './vender/jquery_lib.php';
?>
<?php require_once('./app/views/admin/footer.php'); ?>