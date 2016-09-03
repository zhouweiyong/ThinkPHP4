<?php
/**
 * Created by PhpStorm.
 * User: zhouweiyong
 * Date: 16/8/25
 * Time: 上午12:47
 */
return array(
    //'配置项'=>'配置值'
    "PROJECT" => array(
        "title" => "ZWY后台管理系统",
        "logo" => null,
        "current_control"=>"",
        "current_action"=>"",
        "menu" => array(
            "index_control" => array(
                "control_name" => "控制台",
                "control_status" => "",
                "control_icon" => "dashboard",
                "control_link" => "Index/index",
            ),
            "user_control" => array(
                "control_name" => "用户模块",
                "control_status" => "",
                "control_icon" => "user",
                "control_link" => "",
                "control_sub" => array(
                    "user_show" => array(
                        "sub_name" => "用户列表",
                        "sub_link" => "User/show",
                        "sub_status"=>"",
                    ),
                    "user_add" => array(
                        "sub_name" => "添加用户",
                        "sub_link" => "User/add",
                        "sub_status"=>"",
                    ),
                )
            ),
            "img_control" => array(
                "control_name" => "图片模块",
                "control_status" => "",
                "control_icon" => "user",
                "control_link" => "",
                "control_sub" => array(
                    "user_icon"=>array(
                        "sub_name" => "添加头像",
                        "sub_link" => "Upimg/addUserIcon",
                        "sub_status"=>"",
                    ),
                    "user_icon"=>array(
                        "sub_name" => "添加商品图片",
                        "sub_link" => "Upimg/addProductIcon",
                        "sub_status"=>"",
                    ),
                )
            ),
            "product_control" => array(
                "control_name" => "商品模块",
                "control_status" => "",
                "control_icon" => "gift",
                "control_link" => "",
                "control_sub" => array(
                    "pro_show" => array(
                        "sub_name" => "商品列表",
                        "sub_link" => "Product/show",
                        "sub_status"=>"",
                    ),
                    "pro_add" => array(
                        "sub_name" => "添加商品",
                        "sub_link" => "Product/add",
                        "sub_status"=>"",
                    ),
                )
            ),
            "introl_control" => array(
                "control_name" => "关于我们",
                "control_icon" => "gift",
                "control_link" => "Introl/about",
                "control_status" => "",
            ),
        ),

    ),


);