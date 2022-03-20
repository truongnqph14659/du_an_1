<?php
require_once './app/models/BaseModel.php';
class HomeController extends BaseModel
{
    static function trang_chu()
    {
        $url = new static;
        $server_port = $url->server_port;
        require_once './app/views/Home/home_page/index.php';
    }
    // code tiep cac function
}
