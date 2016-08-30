<?php
/**
 * Created by PhpStorm.
 * User: zhouweiyong
 * Date: 16/8/29
 * Time: 下午11:30
 */

/**
 * TODO 基础分页的相同代码封装，使前台的代码更少
 * @param $m 模型，引用传递
 * @param $where 查询条件
 * @param int $pagesize 每页查询条数
 * @return \Think\Page
 */
function getpage(&$m, $where, $pagesize = 10)
{
    $m1 = clone $m;//浅复制一个模型
    $count = $m->where($where)->count();//连惯操作后会对join等操作进行重置
    $m = $m1;//为保持在为定的连惯操作，浅复制一个模型
    $p = new Think\Page($count, $pagesize);
    $p->lastSuffix = false;
    $p->setConfig('header', '<div id="sample-table-2_info" class="dataTables_info">共<b>%TOTAL_ROW%</b>条记录&nbsp;&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</div>');
//    $p->setConfig('prev','上一页');
//    $p->setConfig('next','下一页');
//    $p->setConfig('last','末页');
//    $p->setConfig('first','首页');
    //$p->setConfig('theme','<div class="col-sm-6">%HEADER%</div> <div class="col-sm-6">%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%</div>');
    $p->setConfig('theme', '<div class="col-sm-6">%HEADER%</div> 
                            <div class="col-sm-6">
                            <div class="dataTables_paginate paging_bootstrap">
                            <ul class="pagination">
                                <li class="prev">%UP_PAGE%</li> 
                                <li>%LINK_PAGE%</li> 
                                <li class="next">%DOWN_PAGE%</li>
                            </ul>
                            </div>
                            </div>');

    $p->parameter = I('get.');

    $m->limit($p->firstRow, $p->listRows);

    return $p;
}