<?php
namespace Admin\Controller;
class UpimgController extends BaseController {
    public function addUserIcon(){
        $project =C("PROJECT");
        $project["current_control"]="用户模块";
        $project["current_action"]="添加头像";
        $project["menu"]["img_control"]["control_status"]="active";
        $project["menu"]["img_control"]["control_sub"]["user_icon"]["sub_status"]="active";
        $this->assign("Config",$project);
        $this->display();
    }

    public function reUserIcon(){
        echo "";
    }

    public function addProductIcon(){
        
    }
}