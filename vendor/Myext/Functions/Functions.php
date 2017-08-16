<?php

/**
 * @Filename: Functions.php
 * @Author: assad
 * @Date:   2017-08-16 09:54:10
 * @Synopsis: 功能函数
 * @Version: 1.0
 * @Last Modified by:   assad
 * @Last Modified time: 2017-08-16 10:09:19
 * @Email: rlk002@gmail.com
 */

/**
 * 调试
 *
 * @param      <type>   $var    The variable
 */
function debug($var = null)
{
    if ($var === null) {
        $var = $GLOBALS;
    }
    dump_r($var);
    exit(0);
}

/**
 * 随机码生成
 *
 * @param      integer  $tokenLen  长度
 *
 * @return     string   ( description_of_the_return_value )
 */
function gensign($tokenLen = 60)
{
    if (file_exists('/dev/urandom')) {
        $randomData = file_get_contents('/dev/urandom', false, null, 0, 100) . uniqid(mt_rand(), true);
    } else {
        $randomData = mt_rand() . mt_rand() . mt_rand() . mt_rand() . microtime(true) . uniqid(mt_rand(), true);
    }
    return substr(hash('sha512', $randomData), 0, $tokenLen);
}
