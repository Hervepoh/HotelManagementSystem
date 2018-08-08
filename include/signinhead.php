<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SignUp</title>
   
    <link rel="stylesheet" href="librairie/css/normalize.css">
    <link rel="stylesheet" href="librairie/css/bootstrap.min.css">
    <link rel="stylesheet" href="librairie/css/font-awesome.min.css">
    <link rel="stylesheet" href="librairie/css/themify-icons.css">
    <link rel="stylesheet" href="librairie/css/flag-icon.min.css">
    <link rel="stylesheet" href="librairie/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="librairie/css/style.css">
    <link href="bootstrap/css/bootstrap.icon-large.min.css" rel="stylesheet">
    <style>
        body{
            margin: 0px;
            padding: 0px;
            background: url('images/backsign3-2.jpg');
            /*background-size: 100vh 100vw;
            background-position: center;*/
            font-family: sans-serif;
        }
        .loginbox{
            width:400px;
            height:450px;
            background: #000000;
            color: #fff;
            margin: 0px auto;  
            margin-top:100px;
            border-radius:8px;
            box-shadow: 0px 0px 8px 8px #5E4485;
        }
        .avatar{
            height:100px;
            width:100px;
            border-radius: 50%;
            position: relative;
            top: -70px;
            right: -150px ;
        }
        .loginbox h1{
            text-align: center; 
            margin: -70px 0px 0px 0px;
            font-size: 35px;
        }
        [for="username"]{
            margin-top:10px;
        }
        .loginbox label{
            font-weight: bold;
            font-size:15px;
            color: rgba(255, 255, 255, 0.6);

        }
        .loginbox .formstyle{
            width: 400px;
            height: 250px;
            margin: 10px auto;
            text-align: center;
        }
        .loginbox .formstyle input{
            width: 290px;
            margin: 5px auto;
            opacity: 0.8;
        }
        .loginbox .formstyle a{
            font-size: 16px;
            opacity: 0.6;
            color: #007bff;
        }
        .loginbox .formstyle button{
            margin-top: 5px;
            border-radius: 20px;
            padding:5px 20px;
        }
        
    </style>
</head>
<body>
    <div class="loginbox">
        <img src="images/admin.jpg" alt="avatar" class="avatar" >
        <h1>Welcome</h1>