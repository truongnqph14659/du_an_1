<?php require_once('./app/views/admin/header.php'); ?>
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Thêm Loại Hàng</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
          </ol>
        </div>
      </div>
    </div>
  </div>
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-5">
          <h3 align="center">them loai hang</h3>
          <br>
          <form id="treeview_form" method="post">
            <div class="form-group">
              <label for="">chon danh muc cha</label>
              <select name="parent_category" id="parent_category" class="form-control"></select>
            </div>
            <div class="form-group">
              <label for="">nhập vào tên loại</label>
              <input type="text" name="category_name" id="category_name" class="form-control">
            </div>
            <div class="form-group">
              <input type="submit" name="action" id="action" class="btn btn-info" value="add">
            </div>
          </form>
        </div>
        <div class="col-lg-5">

        </div>
      </div>
      <!-- /.row -->
    </div>
  </div>
</div>

<?php
require_once './vender/src_script_admin.php';
?>
<!-- <script>
  $(function() {
    $.validator.setDefaults({

    });
    $('#quickForm').validate({
      rules: {
        name: {
          required: true,

        },
        slug: {
          required: true,
        }

      },
      messages: {
        name: {
          required: "Please enter data"
        },
        slug: {
          required: "Please enter data"
        }

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
</script> -->
<script>
  $(document).ready(function() {
    fill_category()

    function fill_category() {
      $.ajax({
        url: 'fill_category',
        success: function(data) {
          $('#parent_category').html(data)
        }
      })
    }
    $()
  })
</script>
<?php
require_once './app/views/admin/footer.php';
?>