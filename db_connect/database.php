<?php
/**
 * Created by PhpStorm.
 * User: Я
 * Date: 28.04.2017
 * Time: 1:09
 */

define('DB_HOST', '127.0.0.1');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'user_profile');
define('DB_CHARSET', 'utf8');



$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
mysqli_set_charset($link, DB_CHARSET);

