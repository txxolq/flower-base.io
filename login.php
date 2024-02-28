
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="k.css" style="max-width: 100%;">
    <style>
    body {
      margin: 0;
      padding: 0;
      font-family: sans-serif;
      background-color: #ececec;
    }
    .container {
      position: absolute;
      top: 6vw;
      right: 65vw;
      margin: 6% auto;
    }
    #btn {
      top: 0;
      left: 0;
      position: absolute;
      width: 110px;
      height: 100%;
      background: linear-gradient(to right, #059eff, #852cc4);
      border-radius: 30px;
      transition: .5s;
    }
    .form {
      top: 180px;
      position: absolute;
      width: 280px;
      transition: .5s;
    }
    .input-filed {
      width: 100%;
      padding: 10px 0;
      margin: 5px 0;
      border-left: 0;
      border-top: 0;
      border-right: 0;
      border-bottom: 1px solid #999;
      outline: none;
      background: transparent;
    }
    .submit-btn {
      width: 85%;
      padding: 10px 30px;
      cursor: pointer;
      display: block;
      margin: auto;
      background: linear-gradient(to right, #059eff, #852cc4);
      border: 0;
      outline: none;
      border-radius: 30px;
    }
    #login {
      left: 50px;
    }
    #register {
      left: 450px;
    }
  </style>
</head>
<body>

    <div class="slide1">
        <div class="menu">
        <a class="menu-item" href="index.php"><strong>Вернуться на главную</strong></a>
            <a class="menu-item" href="#chap2"><strong>Доставка</strong></a>
            <a class="menu-item" href="#chap3"><strong>Отзывы</strong></a>
            <a class="menu-item" href="#chap4"><strong>Контакты</strong></a>
        </div>

        
    
        <div class="logo">
            <img src="готовое лого.png" alt="" width="50%">
        </div>
    
        <div class="menu2">
            <a class="menu-item0" href=""><strong>+7(700) 687 24 64</strong></a>
            <a class="menu-item2" href="next-list.php"><strong>О нас</strong></a>
            <a class="menu-item2" href="login.php"><strong>в̲х̲о̲д̲</strong></a>
            <a class="menu-item2" href="registration1.php"><strong>регистация</strong></a>
        </div>
<div class="container">
        <form method="post" action="/result2.php" id="login" class="form">
      <input type="text" name="username" class="input-filed" placeholder="Имя пользователя"required><br>
      <input type="password" name="password" class="input-filed" placeholder="Пароль"required><br>      
      <button type="submit" class="submit-btn" name="login">Войти</button>
    </form>
</div>

    <script>
    var logIn = document.getElementById("login");
    var register = document.getElementById("register");
    var button = document.getElementById("btn");

  

    function login() {
      logIn.style.left = "50px";
      register.style.left = "450px";
      button.style.left = "0";
    }
  </script>
</body>
</html>



