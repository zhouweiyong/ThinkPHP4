<?php
namespace Admin\Controller;
class IntrolController extends BaseController {
    public function about(){
        $project =C("PROJECT");
        $project["menu"]["introl_control"]["control_status"]="active";
        $this->assign("Config",$project);
        $this->display();
    }
}