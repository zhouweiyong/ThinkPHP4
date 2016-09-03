<?php
namespace Admin\Controller;
use Think\Controller;

/**
 * Class 登陆
 * @package Admin\Controller
 */
class LoginController extends Controller {
    public function index(){
        layout(false);
        $this->display("Login/login");
    }

    public function login(){
        layout(false);
        $this->display();
    }

    public function loginCheck(){
        $userName = I("userName");
        $password = I("password");

        $User = M("User");
        $Condition["userName"] = $userName;
        $res = $User->where($Condition)->select();
        if (count($res>0) && $password ==$res[0]["password"]){
            session("userName",$userName);
            $this->success("登陆成功,页面跳转中...",U("Index/index"));
        }else{
            $this->error("用户名或者密码错误,登陆失败,请重新登陆...");
        }
    }

    public function logout(){
        session('[destroy]');
        $this->redirect("Index/index");
    }
}