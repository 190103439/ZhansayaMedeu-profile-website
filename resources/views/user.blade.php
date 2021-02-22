<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    .nav li{
        margin-left: 250px;
        display: inline-block;
        font-size: 20px;
        padding: 10px;
    }

</style>
<body style="background-color: pink;">
<ul class="nav">
     <li><a href=" {{ route('user') }} ">MAIN</a></li>
     <li><a href=" {{ route('about') }} ">ABOUT</a></li>
     <li><a href=" {{ route('contacts') }} ">CONTACTS</a></li></ul>
     <h1 style="text-align: center; color: white; padding: 10px;">ZHANSAYA MEDEU</h1>
     <img src="https://image.freepik.com/free-vector/freelancer-programmer-woman-character-work-personal-computer-female-occupation-professional-web-developer-isolated-white-cartoon-illustration_169479-916.jpg"
     style="margin: 0 20px 0 390px; height: 550px;">
     
</body>
</html>