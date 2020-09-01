<?php
    header("content-type:text/html;charset=utf8");
    $link=mysqli_connect('127.0.0.1','root','root','1910');

    $name=isset($_POST['names']) ? $_POST['names'] : '';
    $pwd=isset($_POST['pwd']) ? $_POST['pwd'] : '';
    $email=isset($_POST['email']) ? $_POST['email'] : '';
    if(empty($pwd)){
        exit('<a href="y1.html">请输入密码</a>');
    }else if(strlen($pwd)<6){
        exit('<a href="y1.html">请输入6位以上密码</a>');
    }
    
//    $pwd=password_hash($pwd, PASSWORD_BCRYPT);
    $pwd=md5($pwd);
    $sql="select * from users where email=$email";
    //    echo $name,$pwd,$email;
    $link=mysqli_connect('127.0.0.1','root','root','1910');
    mysqli_query($link,'set names utf8');
    $sql="insert into users(name,password,email) values('$name','$pwd','$email')";
    //    echo $sql
    if(mysqli_query($link,$sql)){
        echo "添加成功";
        header('refresh:1;url=y3.html');
    }else{
        echo "添加失败";
        header('refresh:1;url=y1.php');
    }


?>

