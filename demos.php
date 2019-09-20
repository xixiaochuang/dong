<?php
//setcookie('user','1',time()+60000);

if($_COOKIE['user']){
    $callback=$_GET['callback'];
    echo "$callback(".'"'.'欢迎回来'.'"'.')';
}else{
    echo 123213;
}

echo 123123;
//echo 21321;