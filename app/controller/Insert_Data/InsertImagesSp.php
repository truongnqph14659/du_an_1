<?php
require_once './app/models/BaseModel.php';
class InsertImagesSp extends BaseModel
{
    var $table = "library_img_sp";
    static function InsertImagesSp($ma_sp, $images)
    {
        foreach ($images['name'] as $order => $values) {
            $image_currently = "";
            if ($images['size'][$order] > 0) {
                $image_currently = uniqid() . $values;
                move_uploaded_file($images['tmp_name'][$order], 'C:/xampp/htdocs/du_an_1/public/images_stores/images/' . $image_currently);
                $image_currently = server_port . 'du_an_1/public/images_stores/images/' . $image_currently;
            }
            $model = new static();
            $sql = "INSERT INTO $model->table (ma_san_pham,images) VALUES ($ma_sp*1,'$image_currently')";
            $stmt = $model->conn->prepare($sql);
            $stmt->execute();
        }
        header("location:list_product");
    }
}
$ma_sp = $_GET['id_sp'];
$images = $_FILES['images_sp'];
InsertImagesSp::InsertImagesSp($ma_sp, $images);
