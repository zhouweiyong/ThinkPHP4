<?php
/**
 * Created by PhpStorm.
 * User: zhouweiyong
 * Date: 16/8/28
 * Time: 下午10:07
 */

namespace Admin\Model;

use Think\Model;

class UserModel extends Model{
    protected $tablePrefix = 'sys_';


    protected $_validate = array(
        array('userName','require','用户名必须'), // 用户名必须
        array('userName','','帐号名称已经存在！',1,'unique',1), // 验证用户名是否已经存在
        array('nickName','require','昵称必须!'), // 如果输入则验证Email格式是否正确
        array('email','email','Email格式错误！',2), // 如果输入则验证Email格式是否正确
        array('password','3,30','密码长度不正确',0,'length'), // 验证密码是否在指定长度范围
        array('comfirmPwd','password','确认密码不一致',0,'confirm'), // 验证确认密码是否和密码一致
        array('roleRank','require','必须设置权限'), // 用户名必须
        array('roleRank',"0,9",'权限只能设置0到9',1,'between'), // 用户名必须
    );

    protected $_auto = array (
        array('addTime','time',1,'function'), // 对update_time字段在更新的时候写入当前时间戳
    );

}