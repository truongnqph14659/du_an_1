<?php
require_once './app/models/BaseModel.php';
class fetch_comments extends BaseModel
{
    static function binh_luan($id_sp)
    {
        $model = new static;
        $sql = "SELECT binh_luan.ma_binh_luan,binh_luan.noi_dung_bl,binh_luan.thoi_gian_bl,binh_luan.anh_bl,binh_luan.parent_bl,user.user_id,user.user_name,user.image,binh_luan.ma_san_pham FROM san_pham JOIN binh_luan ON san_pham.ma_san_pham = binh_luan.ma_san_pham JOIN user on binh_luan.user_id = user.user_id WHERE binh_luan.ma_san_pham = $id_sp";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        $html = '';
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        function buildTreeView($arr, $parent, $level = 0, $prelevel = -1)
        {
            global $html;
            $user_id = isset($_SESSION['user_account']) == true ? $_SESSION['user_account']['user_id'] : 0;
            foreach ($arr as $data) {
                if ($parent == $data['parent_bl']) {
                    if ($level > $prelevel) {
                        if ($html == '') {
                            $html .= '<div>
                                        <div class="media-block">';
                        } else {
                            $html .= '<div>
                                        <div class="media-block">';
                        }
                    }
                    if ($level == $prelevel) {
                        $html .= '</div></div>';
                    }
                    $image = '';
                    if ($data['anh_bl']) {
                        $image =  '<img class="img-responsive thumbnail" width="300px" height="300px" src="' . $data['anh_bl'] . '" alt="Image">';
                    }
                    $date = date_format(date_create($data['thoi_gian_bl']), "d/m/Y");
                    $html .= '<a class="media-left" href="#"><img class="img-circle img-sm" alt="Profile Picture" src="' . $data['image'] . '"></a>
                            <div class="media-body">
                            <div class="mar-btm">
                            <a href="#" class="btn-link text-semibold media-heading box-inline"></a>
                            <p class="text-muted text-sm">' . $data['user_name'] . '</p>
                            <span>' . $date . '</span>
                                </div>
                                <p>' . $data['noi_dung_bl'] . '</p>
                                ' . $image . '
                        <div class="pad-ver">
                            <div class="btn-group">
                                <a class="btn btn-sm btn-default btn-hover-success" href="#"><i class="fa fa-thumbs-up"></i></a>
                                <a class="btn btn-sm btn-default btn-hover-danger" href="#"><i class="fa fa-thumbs-down"></i></a>
                            </div>
                            <button class="btn btn-sm btn-default btn-hover-primary comment_list">Comment</button>
                        
                            <div class="panel show_form_comment">
                                <div class="panel-body">
                                    <form action="insert_comment" method="post" enctype="multipart/form-data" name="form_bl">
                                        <textarea class="form-control" name="content_comment" rows="2" placeholder="bình luận về sản phẩm"></textarea>
                                        <input style="display:none" name="upload" id="input-element" type="file">
                                        <input type="text" name="parent_id" value="' . $data['ma_binh_luan'] . '" hidden>
                                        <input type="text" name="user_id" value="' . $user_id . '" hidden>
                                        <input type="text" name="ma_san_pham" value="' . $data['ma_san_pham'] . '" hidden>
                                        <button class="btn btn-sm btn-primary pull-right submit_form"><i class="fa fa-pencil fa-fw"></i> Share</button>
                                    </form>
                                    <div class="mar-top clearfix">
                                        <a class="btn btn-trans btn-icon fa fa-video-camera add-tooltip" href="#"></a>
                                        <button class="btn btn-trans btn-icon fa fa-camera add-tooltip file-input-thing"></button>
                                        <a class="btn btn-trans btn-icon fa fa-file add-tooltip" href="#"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>';

                    if ($level > $prelevel) {
                        $prelevel = $level;
                    }
                    $level++;
                    buildTreeView($arr, $data['ma_binh_luan'], $level, $prelevel);
                    $level--;
                    // die;
                }
            }
            if ($level == $prelevel) {
                $html .= '</div></div>';
            }
            return $html;
        }

        return buildTreeView($data, 0);
    }
}
$data = fetch_comments::binh_luan($id_sp);
echo $data;
