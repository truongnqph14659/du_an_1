<?php
require_once './app/models/BaseModel.php';
class InsertLoai extends BaseModel
{
    var $table = "loai_san_pham";
    static function add_loai_sp()
    {
        extract($_POST);
        $model = new static;
        $sql = "INSERT INTO $model->table (ten_loai,parent_id,slug) VALUES ('$category_name',$parent_category*1,'$category_name')";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        echo "thêm vào danh mục thành công";
    }
}
InsertLoai::add_loai_sp();
