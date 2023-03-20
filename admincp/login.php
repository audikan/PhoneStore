<?php
    session_start();
    include("config/config.php");
    if (isset($_POST['login'])){
        $tk = $_POST['username'];
        $mk = $_POST['password'];

        

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập Admincp</title>
    <style type="text/css">
        .box{
            text-align: center;
            background: #181818;
            width: 400px;
            height: auto;
            padding: 25px;
            position: absolute;
            left: 50%; top:50%;
            transform: translate(-50%,-50%);
            box-shadow: 0px 0px 20px 0px #000;
        }
        .box h1{
            color: #fff;
        }
        .box input[type="password"], .box input[type="text"]{
            color: white;
            background: none;
            outline: none;
            width: 210px;
            height: 40px;
            border-radius: 40px;
            padding: 0px 15px;
            margin: 15px 0px;
            border: solid 2px #002cff;
            transition: 1s;
        }
        .box input[type="password"]:focus, .box input[type="text"]:focus{
            width: 320px;
            border-color: chartreuse;
            transition: 1s;
        }
        .box input[type="submit"]{
            background: none;
            outline: none;
            width: 160px;
            height: 40px;
            border-radius: 40px;
            margin: 15px 0px;
            border: solid 2px #002cff;
            color: #fff;
            font-size: 18px;
            transition: 1s;
        }
        .box input[type="submit"]:hover{
            background: #002cff;
            transition: 1s;
        }
    </style>
</head>
<body>
    <form method="POST" action="#" class="box">
        <H1>ĐĂNG NHẬP ADMINCP</H1>
        <input type="text" name="username" placeholder="Tài Khoản">
        <input type="password" name="password" placeholder="Mật Khẩu">
        <input type="submit" value="ĐĂNG NHẬP" name="login">
 </form>
    
</body>
</html>
