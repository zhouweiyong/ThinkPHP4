<?php
namespace Admin\Controller;
use Think\Verify;

class IndexController extends BaseController {
    public function index(){
        $project =C("PROJECT");
        $project["current_control"]="控制台";
        $project["current_action"]="查看";
        $project["menu"]["index_control"]["control_status"]="active";
        $this->assign("Config",$project);
        $this->assign("content","contentnllllll......");

//        $this->show("".session("userName"));
//
//        $this->assign("Verify",$verifyImg);
//        $this->show();
        $this->display();
    }


    //删除验证码
    public function verify(){
        $config =    array(
            'fontSize'    =>    30,    // 验证码字体大小
            'length'      =>    3,     // 验证码位数
            'useNoise'    =>    false, // 关闭验证码杂点
        );
        $Verify= new Verify($config);
        $Verify->entry();
    }

    //检测验证码
    public function checkVerify(){
        $verifyCode = I("post.verifyCode");
        $verify = new Verify();
        if(!$verify->check($verifyCode)){
            $this->error("验证码错误");
        }else{
            echo "验证码正确@@@";
        }
    }
}