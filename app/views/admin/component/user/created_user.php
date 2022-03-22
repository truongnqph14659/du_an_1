<?php require_once('./app/views/admin/header.php'); ?>
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Tạo tài khoản</h1>
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
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-primary">

            <!-- /.card-header -->
            <!-- form start -->
            <form action="#" method="POST" enctype="multipart/form-data" id="quickForm" novalidate="novalidate">
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">user_name</label>
                  <input type="text" name="user_name" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">number phone</label>
                  <input type="text" name="number_phone" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Avatar</label>
                  <input type="file" name="image" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="Password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form__div">
                  <fieldset>
                    <legend>Vai Trò</legend>
                    <label for="">khách hàng</label>
                    <input type="radio" name="vai_tro" id="" value="0">
                    <label for="">Nhân Viên</label>
                    <input type="radio" name="vai_tro" id="" value="1">
                  </fieldset>
                </div>
                <div class="form__div">
                  <fieldset>
                    <legend>trạng thái</legend>
                    <label for="">Kích Hoạt</label>
                    <input type="radio" name="status" id="on">
                    <label for="">khóa</label>
                    <input type="radio" name="status" id="off">
                  </fieldset>
                </div>
                <div class="form-group mb-0">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                    <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="#">terms of service</a>.</label>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div>
  </div>
</div>
<!-- lấy script từ vender -->
<?php
require_once './vender/src_script_admin.php';
?>
<script>
  $(function() {
    $.validator.setDefaults({

    });
    $('#quickForm').validate({
      rules: {
        user_name: {
          required: true
        },
        number_phone: {
          required: true,
          minlength: 5,
        },
        email: {
          required: true,
          email: true,
        },
        Password: {
          required: true,
          minlength: 5,
        },
        terms: {
          required: true,
        },
      },
      messages: {
        user_name: {
          required: "Please enter a name",
        },
        number_phone: {
          required: "Please enter a number phone",
        },
        email: {
          required: "Please enter a email address",
          email: "Please enter a vaild email address"
        },
        password: {
          required: "Please provide a password",
          minlength: "Your password must be at least 5 characters long"
        },
        terms: "Please accept our terms"
      },
      errorElement: 'span',
      errorPlacement: function(error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function(element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function(element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    });
  });
</script>
<?php
require_once './app/views/admin/footer.php';
?>