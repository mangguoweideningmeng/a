<?php
    //接值
    $name=isset($_POST['u_name'])?$_POST['u_name']:'';
    $pwd=isset($_POST['u_pwd'])?md5($_POST['u_pwd']):'';
    //设置字符集
    $link=mysqli_connect('127.0.0.1','root','root','1910');
    mysqli_query($link,"set names utf8");
    //写sql
    $sql="select * from users where name='$name' and password='$pwd'";
    $res=mysqli_query($link,$sql);
    $data=mysqli_fetch_assoc($res);

    if($data){
        echo "登录成功";
    }else{
        echo "登录失败";
        header('refresh:1;url=y3.html');
    }






?>
