<?php
/*
 |------------------------------------------------
 | 类文件和配置文件注册
 |------------------------------------------------
 */

return [

    'FileReflect'  => [
        'Config'   => '../App/Config/Config.php',
        'Dsn'      => '../App/Config/Dsn.php',
        'Smarty'   => '../App/Config/Smarty.php',
        'Db'       => '../App/Config/Db.php',
        'Db2'       => '../App/Config/Db2.php',
        'Cookies'  => '../App/Config/Cookies.php',
        'Adminauth'  => '../App/Config/Adminauth.php',
        'Mmcfile'  => '../App/Config/Mmcfile.php',
    ],

    'Providers'=>[
        'Wise'      => Grace\Wise\Wise::class,           //memcache对象
        'Req'       => Grace\Req\Req::class,             //
        'View'      => Grace\View\View::class,           //
        'Smarty'    => Grace\Smarty\Smarty::class,           //
        'Db'        => Grace\Db\Db::class,           //
        'Db2'        => Grace\Db\Db::class,           //
        'Cookies'   => Grace\Cookies\Cookies::class,
        'Adminauth'   => Grace\Adminauth\Adminauth::class,
        'Mmcfile'   => Grace\Mmcfile\Mmcfile::class,
    ],

];
