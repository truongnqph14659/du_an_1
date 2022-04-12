<?php
require_once './app/models/BaseModel.php';

class treeview_loai extends BaseModel
{
    var $table = "loai_san_pham";
    static function get_data()
    {
        $model = new static;
        $sql = "SELECT * FROM $model->table";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    static function get_node_data($parent_category_id)
    {
        $model = new static;
        $sql = "SELECT * FROM $model->table WHERE parent_id=$parent_category_id";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $output = array();
        // tìm parent_id thuộc về id category
        foreach ($result as $row) {
            $sub_array = array();
            $sub_array['text'] = '<a class="treeitem_click_a" href="product_page?key=' . $row['ten_loai'] . '">' . $row['ten_loai'] . '</a>';
            $sub_array['nodes'] = array_values($model->get_node_data($row['ma_loai_sp']));
            if (count($sub_array['nodes']) == 0) {
                unset($sub_array['nodes']);
            }
            $output[] = $sub_array;
        }
        return $output;
    }
}
// bắt đầu tìm tất cả id = 0 xem nó là cha
$parent_category_id = 0;
$data = treeview_loai::get_data();
foreach ($data as $row) {

    $data_resault = treeview_loai::get_node_data($parent_category_id);
}
echo json_encode(array_values($data_resault));
