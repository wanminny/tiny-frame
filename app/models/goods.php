<?php
/**
 * Created by PhpStorm.
 * User: wanmin
 * Date: 16/11/5
 * Time: 下午1:10
 */

namespace App\Models;

class goods extends \medoo
{
    public static  $link ;

    public function __construct()
    {

        if(!self::$link)
        {
            self::$link = new \medoo([
                'database_type' => 'mysql',
                'database_name' => 'laravel5',
                'server' => 'localhost',
                'username' => 'root',
                'password' => '123456',
                'charset' => 'utf8'
            ]);
        }
//        var_dump(self::$link);
        return self::$link;
    }

    public static function getData()
    {
       return self::$link->select('admin_operation_log',"*");
    }

}