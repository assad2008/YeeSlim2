<?php

/**
 * @file functions_helper.php
 * @synopsis  自定义函数
 * @author Yee, <rlk002@gmail.com>
 * @version 1.0
 * @date 2012-10-14 00:18:41
 */

function debug($var = null, $type = 2)
{
    if ($var === null) {
        $var = $GLOBALS;
    }
    dump_r($var);
    exit(0);
}

function gensign($tokenLen = 60)
{
    if (file_exists('/dev/urandom')) {
        $randomData = file_get_contents('/dev/urandom', false, null, 0, 100) . uniqid(mt_rand(), true);
    } else {
        $randomData = mt_rand() . mt_rand() . mt_rand() . mt_rand() . microtime(true) . uniqid(mt_rand(), true);
    }
    return substr(hash('sha512', $randomData), 0, $tokenLen);
}
