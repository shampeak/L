<?php

//公用 + 表 -> 读 -> 写

return [

        'hostname'      => '115.29.146.146',         //服务器地址
        'port'          => '3306',              //端口
        'username'      => 'root',              //用户名
        'password'      => 'acti30nium',              //密码
        'database'      => 'attend',                //数据库名
        'charset'       => 'utf8',              //字符集设置
        'pconnect'      => 1,                   //1  长连接模式 0  短连接
        'quiet'         => 0,                   //安静模式 生产环境的
        'slowquery'     => 1,                   //对慢查询记录
        'rootpath'      => '../App/',
];
