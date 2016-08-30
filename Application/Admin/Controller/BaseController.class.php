<?php
namespace Admin\Controller;
use Think\Controller;
class BaseController extends Controller {

    public function _initialize(){
//        echo $_SESSION("userName");
//        echo session("userName");
        if (!isset($_SESSION["userName"])){
            $this->redirect("Login/login");
        }
    }
}