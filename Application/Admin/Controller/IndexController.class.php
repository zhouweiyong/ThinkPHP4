<?php
namespace Admin\Controller;
class IndexController extends BaseController {
    public function index(){
        $project =C("PROJECT");
        $project["current_control"]="控制台";
        $project["current_action"]="查看";
        $project["menu"]["index_control"]["control_status"]="active";
        $this->assign("Config",$project);
        $this->assign("content","contentnllllll......");

        $this->show("".session("userName"));
//        $this->display();
    }
}