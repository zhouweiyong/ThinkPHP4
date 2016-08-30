
-- 后台数据库设计

DROP DATABASE IF EXISTS zwydb;

CREATE DATABASE zwydb CHARSET utf8;

USE zwydb;

--用户表
DROP TABLE IF EXISTS sys_user;

CREATE TABLE sys_user(
  userId INT(10) UNSIGNED PRIMARY KEY  AUTO_INCREMENT,
  userName VARCHAR(20) NOT NULL,
  nickName VARCHAR(20) NOT NULL DEFAULT '',
  password VARCHAR(16) NOT NULL ,
  gender TINYINT(1) UNSIGNED NOT NULL DEFAULT 2 COMMENT '性别: 0 女 1 男 2 未知',
  headPic VARCHAR(255) NOT NULL COMMENT '头像',
  email CHAR(60) NOT NULL DEFAULT '',
  tel VARCHAR(11) NOT NULL DEFAULT '',
  addTime INT(10) UNSIGNED NOT NULL COMMENT '用户注册时间',
  lastTime INT(10) UNSIGNED NOT NULL DEFAULT 0,
  lastIp CHAR(30) NOT NULL DEFAULT '127.0.0.1',
  roleRank TINYINT(1) UNSIGNED NOT NULL DEFAULT 0 COMMENT '最高级别为10级,普通用户级别为0'
)ENGINE=MyISAM charset utf8;

/**
角色级别
0:普通用户
9,领导级别,不能分配用户
10:管理员用户,拥有所有权限,可以分配用户
 */
DROP TABLE IF EXISTS sys_role;

CREATE TABLE sys_role(
  roleId INT(10) UNSIGNED PRIMARY KEY  AUTO_INCREMENT,
  roleName VARCHAR(20) NOT NULL,
  roleRank TINYINT(2) UNSIGNED NOT NULL COMMENT '最高级别为10级,普通用户级别为0'
)ENGINE=MyISAM charset utf8;

--设置角色角色级别为唯一
ALTER TABLE sys_role ADD UNIQUE(roleRank);

INSERT sys_role(roleName,roleRank)
VALUES
('普通用户',0),
('admin',9);

--添加管理员
INSERT sys_user(userName,nickName,password,email,headPic,addTime,roleRank)
VALUES
('admin','tom','admin','tom@163.com','user.jpg',unix_timestamp(now()),9),
('admin1','tom','admin','tom@163.com','user.jpg',unix_timestamp(now()),9),
('admin3','tom','admin','tom@163.com','user.jpg',unix_timestamp(now()),9),
('admin4','tom','admin','tom@163.com','user.jpg',unix_timestamp(now()),9),
('admin5','tom','admin','tom@163.com','user.jpg',unix_timestamp(now()),9),
('admin6','tom','admin','tom@163.com','user.jpg',unix_timestamp(now()),9),
('admin7','tom','admin','tom@163.com','user.jpg',unix_timestamp(now()),9),
('admin8','tom','admin','tom@163.com','user.jpg',unix_timestamp(now()),9),
('admin9','tom','admin','tom@163.com','user.jpg',unix_timestamp(now()),9),
('admin10','tom','admin','tom@163.com','user.jpg',unix_timestamp(now()),9),
('admin11','tom','admin','tom@163.com','user.jpg',unix_timestamp(now()),9),
('admin12','tom','admin','tom@163.com','user.jpg',unix_timestamp(now()),9),
('root','jack','root','jack@163.com','user.jpg',unix_timestamp(now()),9),
('root1','jack','root','jack@163.com','user.jpg',unix_timestamp(now()),9),
('root2','jack','root','jack@163.com','user.jpg',unix_timestamp(now()),9),
('root3','jack','root','jack@163.com','user.jpg',unix_timestamp(now()),9),
('root4','jack','root','jack@163.com','user.jpg',unix_timestamp(now()),9),
('root5','jack','root','jack@163.com','user.jpg',unix_timestamp(now()),9),
('root6','jack','root','jack@163.com','user.jpg',unix_timestamp(now()),9),
('root7','jack','root','jack@163.com','user.jpg',unix_timestamp(now()),9),
('root8','jack','root','jack@163.com','user.jpg',unix_timestamp(now()),9),
('root9','jack','root','jack@163.com','user.jpg',unix_timestamp(now()),9),
('root10','jack','root','jack@163.com','user.jpg',unix_timestamp(now()),9),
('root11','jack','root','jack@163.com','user.jpg',unix_timestamp(now()),9),
('root12','jack','root','jack@163.com','user.jpg',unix_timestamp(now()),9),
('root13','jack','root','jack@163.com','user.jpg',unix_timestamp(now()),9);


