<?php
namespace Admin\Controller;

use Think\Image;

/**
 * Class 处理图片
 * @package Admin\Controller
 */
class ImageController extends BaseController {

    /**
     * 压缩图片
     */
    public function show(){
        $image = new Image();
        $image->open("Public/Admin/Avatars/57cad8068147d.jpg");
        $res =$image->thumb(100,100,\Think\Image::IMAGE_THUMB_FIXED)->save("Public/Admin/Avatars/thumb57cad8068147d.jpg");
        var_dump($res);
    }
}