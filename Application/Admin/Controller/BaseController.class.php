<?php
namespace Admin\Controller;
use Think\Controller;

/**
 * Class Control自定义基类
 * @package Admin\Controller
 */
class BaseController extends Controller {

    public function _initialize(){
//        echo $_SESSION("userName");
//        echo session("userName");
        //每个页面都判断是否登陆,没有登陆跳到登陆页面
        if (!isset($_SESSION["userName"])){
            $this->redirect("Login/login");
        }
    }
}