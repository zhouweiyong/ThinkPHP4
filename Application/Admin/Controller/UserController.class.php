<?php
namespace Admin\Controller;
use Think\Page;

class UserController extends BaseController {
    public function show(){
        $project =C("PROJECT");
        $project["current_control"]="用户模块";
        $project["current_action"]="查看";
        $project["menu"]["user_control"]["control_status"]="active open";
        $project["menu"]["user_control"]["control_sub"]["user_show"]["sub_status"]="active";
        $this->assign("Config",$project);


        $User = M("User");
        $page = getpage($User,"",5);
        $show = $page->show();
        $list = $User->order("addTime")->limit($page->firstRow.",".$page->listRows)->select();
//        var_dump($show);
//        var_dump("<br/>");
//        var_dump($list);
        $this->assign("list",$list);
        $this->assign("page",$show);
        $this->display();
    }

    public function add(){
        $project =C("PROJECT");
        $project["current_control"]="用户模块";
        $project["current_action"]="添加";
        $project["menu"]["user_control"]["control_status"]="active open";
        $project["menu"]["user_control"]["control_sub"]["user_add"]["sub_status"]="active";
        $this->assign("Config",$project);
        $this->display();
    }

    public function update(){

    }

    public function delete(){
        
    }
}