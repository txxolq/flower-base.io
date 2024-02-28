
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
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
    .tabs {
      width: 220px;
      margin: 35px auto;
      position: relative;
      box-shadow: 0 0 15px #7a4a9c;
      border-radius: 30px;
    }
    .toggle-btn {
      padding: 10px 30px;
      cursor: pointer;
      background: transparent;
      border: 0;
      outline: none;
      position: relative;
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
            <a class="menu-item2" href="login.php"><strong>вход</strong></a>
            <a class="menu-item2" href="registration.php"><strong>р̲е̲г̲и̲с̲т̲р̲а̲ц̲и̲я̲</strong></a>
        </div>


        <form  method="post" action="/result.php" id="register" class="form">
      <input type="text" name="username" class="input-filed" placeholder="Имя пользователя"required><br>
      <input type="password" name="password" class="input-filed" placeholder="Пароль"required><br>    
      <button type="submit" class="submit-btn" name="register">Зарегистрироваться</button>
    </form>


    <script>
    var logIn = document.getElementById("login");
    var register = document.getElementById("register");
    var button = document.getElementById("btn");

    function registration() {
      logIn.style.left = "-400px";
      register.style.left = "50px";
      button.style.left = "110px";
    }

    
  </script>
  </body>
</html>




