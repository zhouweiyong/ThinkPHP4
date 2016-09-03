<?php
namespace Admin\Controller;

use Think\Upload;

/**
 * Class 上传图片
 * @package Admin\Controller
 */
class UpimgController extends BaseController
{
    public function addUserIcon()
    {
        $project = C("PROJECT");
        $project["current_control"] = "用户模块";
        $project["current_action"] = "添加头像";
        $project["menu"]["img_control"]["control_status"] = "active open";
        $project["menu"]["img_control"]["control_sub"]["user_icon"]["sub_status"] = "active";
        $this->assign("Config", $project);
        $this->display();
    }

    /**
     * saveName:
     * time:使用时间戳命名
     * uniqid:生成一个唯一的字符串序列
     *
     * // 采用date函数生成命名规则 传入Y-m-d参数
     * $upload->saveName = array('date','Y-m-d');
     *
     *  // 采用自定义函数命名
     * $upload->saveName = 'myfun';
     *
     * // 如果有多个参数需要传入的话 可以使用数组
     * $upload->saveName = array('myFun',array('__FILE__','val1','val2'));
     *最终的结果是 myFun('上传文件名','val1','val2')执行的结果
     *
     */
    public function reUserIcon()
    {
        $config = array(
            'maxSize' => 0,
            'rootPath' => "Public/Admin",
            'savePath' => '/Avatars/',
            'saveName' => array('uniqid', ''),
            'exts' => array('jpg', 'gif', 'png', 'jpeg'),
            'autoSub' => false,
            'subName' => array('date', 'Ymd'),
        );
        $upload = new Upload($config);

        $info = $upload->uploadOne($_FILES['userIcon']);
        //var_dump($_FILES['userIcon']);
        if (!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        } else {// 上传成功 获取上传文件信息
            echo $info['savepath'] . $info['savename'];
        }
        echo "";
    }

    public function addProductIcon()
    {
        $project = C("PROJECT");
        $project["current_control"] = "用户模块";
        $project["current_action"] = "添加商品图片";
        $project["menu"]["img_control"]["control_status"] = "active open";
        $project["menu"]["img_control"]["control_sub"]["product_icon"]["sub_status"] = "active";
        $this->assign("Config", $project);
        $this->display();
    }
}