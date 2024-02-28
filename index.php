<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Цветочная база</title>
    <link rel="stylesheet" href="k.css" style="max-width: 100%;">
</head>
<body bgcolor="#bbdcff">

    <div class="slide1">
        <div class="menu">
            <a class="menu-item" href="cart.php"><strong>Корзина</strong></a>
            <a class="menu-item" href="#chap2"><strong>Доставка</strong></a>
            <a class="menu-item" href="#chap3"><strong>Отзывы</strong></a>
            <a class="menu-item" href="#chap4"><strong>Контакты</strong></a>
        </div>

        
    
        <div class="logo">
            <img src="готовое лого.png" alt="" width="50%">
        </div>
    
        <div class="menu2">
            <a class="menu-item0" href=""><strong>+7(700) 687 24 64</strong></a>
            <a class="menu-item2" href="#chap5"><strong>О нас</strong></a>
            <a class="menu-item2" href="login.php"><strong>вход</strong></a>
            <a class="menu-item2" href="registration1.php"><strong>регистация</strong></a>
        </div>

        <div class="k">
            <img src="блок.png" alt="" max-width="160%" width="173%">
        </div>
            
        <div class="a">
            <img src="цвет.png" alt="" max-width="173%" width="150%">
        </div>
        <div class="b">
            <img src="цвет2.png" alt="" max-width="173%" width="140%">
        </div>
        
        <div>
            <div class="t1-slide1">
                <h1>Доставка цветов</h1>
            </div>
            <div class="t0-slide1">
                <h1>и подарков</h1>
            </div>
    
            <div class="t2-slide1">
                <h2> Порадуйте своих близких нашими <br>стильными букетами и <br>уникальными розами</h2>
            </div>
            
            <div class="t5-slide1">
                <h1>Мы поможем вам собрать уникальный букет, <br> также вы сможете выбрать уже готовую<br> композицию и связаться <br>по номеру выше. </h1>
            </div>
    
        </div>
    
        <div class="adm"> <img src="чел.png" alt="" max-width="100%" width="6%"> </div>
    
        <div class="go">
            <a class="go1" href="#chap1"><strong>начать</strong></a>
        </div>
       
        <div class="hed-neo">
            <img src="грузовик.jpeg" alt="" max-width="160%" width="73%">
        </div>
        <div class="hed-neo1">
            <img src="кошель.png" alt="" max-width="160%" width="60%">
        </div>
        <div class="hed-neo2">
            <img src="цветыыы.png" alt="" max-width="160%" width="36%">
        </div>
        <div class="hed-neo3">
            <img src="камера.jpg" alt="" max-width="160%" width="44%">
        </div>

        <div class="hed-t">
            <p> Бесплатная доставка <br> при заказе от 10 000 тг </p>
        </div>
        <div class="hed-t1">
            <p>Оплачивайте любым <br> удобным способом </p>
        </div>
        <div class="hed-t2">
            <p>Только свежие цветы <br> Ежедневные поставки</p>
        </div>
        <div class="hed-t3">
            <p>Фото цветов перед <br> отправкой</p>
        </div>

    </div>

    <div class="slide2"> 
        <div class="o"> 
            <h1>НОВИНКИ</h1> <a name="chap1"> </a>
        </div>

        <div class="blossom-list">
          <img src="a.jpg" 
            width="300" height="300" alt="tree" />
          <div class="content">
            <div class="text">6600тг</div>
          </div>
        </div>  
        <style>
          .blossom-list{
          position: absolute;
          left: 1vw;
          top: 74vw;
          padding:0;
          width:300px;
          display:block;
          cursor:pointer;
          overflow:hidden;
          }
          .content {
          opacity:0;
          font-size: 40px;
          position:absolute;
          top:0;
          left:0;
          color: #006a84;
          background-color:rgba(149,229,200,0.5);
          width:300px;
          height:300px;
          -webkit-transition: all 400ms ease-out;
          -moz-transition: all 400ms ease-out;
          -o-transition: all 400ms ease-out;
          -ms-transition: all 400ms ease-out;
          transition: all 400ms ease-out;
          text-align:center;
          }
          .blossom-list .content:hover { opacity:1; }      
          .blossom-list .content .text {
          height:0;
          opacity:1;
          transition-delay: 0s;
          transition-duration: 0.4s;
          }
          .blossom-list .content:hover .text {
          opacity:1;
          transform: translateY(250px);
          -webkit-transform: translateY(250px);
          }
        </style>

        <div class="blossom-list1">
          <img src="t.jpg" 
            width="300" height="300" alt="tree" />
          <div class="content">
            <div class="text">8600тг</div>
          </div>
        </div>  
        <style>
          .blossom-list1{
            position: absolute;
    left: 27vw;
    top: 74vw;
          padding:0;
          width:300px;
          display:block;
          cursor:pointer;
          overflow:hidden;
          }
          .content {
          opacity:0;
          font-size: 40px;
          position:absolute;
          top:0;
          left:0;
          color: #006a84;
          background-color:rgba(149,229,200,0.5);
          width:300px;
          height:300px;
          -webkit-transition: all 400ms ease-out;
          -moz-transition: all 400ms ease-out;
          -o-transition: all 400ms ease-out;
          -ms-transition: all 400ms ease-out;
          transition: all 400ms ease-out;
          text-align:center;
          }
          .blossom-list1 .content:hover { opacity:1; }      
          .blossom-list1 .content .text {
          height:0;
          opacity:1;
          transition-delay: 0s;
          transition-duration: 0.4s;
          }
          .blossom-list1 .content:hover .text {
          opacity:1;
          transform: translateY(250px);
          -webkit-transform: translateY(250px);
          }
        </style>


<div class="blossom-list2">
          <img src="p.jpg"
            width="300" height="300" alt="tree" />
          <div class="content">
            <div class="text">9900тг</div>
          </div>
        </div>  
        <style>
          .blossom-list2{
            position: absolute;
    left: 52vw;
    top: 74vw;
          padding:0;
          width:300px;
          display:block;
          cursor:pointer;
          overflow:hidden;
          }
          .content {
          opacity:0;
          font-size: 40px;
          position:absolute;
          top:0;
          left:0;
          color: #006a84;
          background-color:rgba(149,229,200,0.5);
          width:300px;
          height:300px;
          -webkit-transition: all 400ms ease-out;
          -moz-transition: all 400ms ease-out;
          -o-transition: all 400ms ease-out;
          -ms-transition: all 400ms ease-out;
          transition: all 400ms ease-out;
          text-align:center;
          }
          .blossom-list2 .content:hover { opacity:1; }      
          .blossom-list2 .content .text {
          height:0;
          opacity:1;
          transition-delay: 0s;
          transition-duration: 0.4s;
          }
          .blossom-list2 .content:hover .text {
          opacity:1;
          transform: translateY(250px);
          -webkit-transform: translateY(250px);
          }
        </style>

<div class="blossom-list3">
          <img src="y.jpg"
            width="300" height="300" alt="tree" />
          <div class="content">
            <div class="text">4100тг</div>
          </div>
        </div>  
        <style>
          .blossom-list3{
            position: absolute;
    left: 77vw;
    top: 74vw;
          padding:0;
          width:300px;
          display:block;
          cursor:pointer;
          overflow:hidden;
          }
          .content {
          opacity:0;
          font-size: 40px;
          position:absolute;
          top:0;
          left:0;
          color: #006a84;
          background-color:rgba(149,229,200,0.5);
          width:300px;
          height:300px;
          -webkit-transition: all 400ms ease-out;
          -moz-transition: all 400ms ease-out;
          -o-transition: all 400ms ease-out;
          -ms-transition: all 400ms ease-out;
          transition: all 400ms ease-out;
          text-align:center;
          }
          .blossom-list3 .content:hover { opacity:1; }      
          .blossom-list3 .content .text {
          height:0;
          opacity:1;
          transition-delay: 0s;
          transition-duration: 0.4s;
          }
          .blossom-list3 .content:hover .text {
          opacity:1;
          transform: translateY(250px);
          -webkit-transform: translateY(250px);
          }
        </style>

<div class="blossom-list4">
          <img src="i.jpg" 
            width="300" height="300" alt="tree" />
          <div class="content">
            <div class="text">8800тг</div>
          </div>
        </div>  
        <style>
          .blossom-list4{
            position: absolute;
    left: 1vw;
    top: 103vw;
          padding:0;
          width:300px;
          display:block;
          cursor:pointer;
          overflow:hidden;
          }
          .content {
          opacity:0;
          font-size: 40px;
          position:absolute;
          top:0;
          left:0;
          color: #006a84;
          background-color:rgba(149,229,200,0.5);
          width:300px;
          height:300px;
          -webkit-transition: all 400ms ease-out;
          -moz-transition: all 400ms ease-out;
          -o-transition: all 400ms ease-out;
          -ms-transition: all 400ms ease-out;
          transition: all 400ms ease-out;
          text-align:center;
          }
          .blossom-list4 .content:hover { opacity:1; }      
          .blossom-list4 .content .text {
          height:0;
          opacity:1;
          transition-delay: 0s;
          transition-duration: 0.4s;
          }
          .blossom-list4 .content:hover .text {
          opacity:1;
          transform: translateY(250px);
          -webkit-transform: translateY(250px);
          }
        </style>

<div class="blossom-list5">
          <img src="e.jpg" 
            width="300" height="300" alt="tree" />
          <div class="content">
            <div class="text">6300тг</div>
          </div>
        </div>  
        <style>
          .blossom-list5{
            position: absolute;
    left: 27vw;
    top: 103vw;
          padding:0;
          width:300px;
          display:block;
          cursor:pointer;
          overflow:hidden;
          }
          .content {
          opacity:0;
          font-size: 40px;
          position:absolute;
          top:0;
          left:0;
          color: #006a84;
          background-color:rgba(149,229,200,0.5);
          width:300px;
          height:300px;
          -webkit-transition: all 400ms ease-out;
          -moz-transition: all 400ms ease-out;
          -o-transition: all 400ms ease-out;
          -ms-transition: all 400ms ease-out;
          transition: all 400ms ease-out;
          text-align:center;
          }
          .blossom-list5 .content:hover { opacity:1; }      
          .blossom-list5 .content .text {
          height:0;
          opacity:1;
          transition-delay: 0s;
          transition-duration: 0.4s;
          }
          .blossom-list5 .content:hover .text {
          opacity:1;
          transform: translateY(250px);
          -webkit-transform: translateY(250px);
          }
        </style>

<div class="blossom-list6">
          <img src="w.jpg" 
            width="300" height="300" alt="tree" />
          <div class="content">
            <div class="text">5500тг</div>
          </div>
        </div>  
        <style>
          .blossom-list6{
            position: absolute;
    left: 52vw;
    top: 103vw;
          padding:0;
          width:300px;
          display:block;
          cursor:pointer;
          overflow:hidden;
          }
          .content {
          opacity:0;
          font-size: 40px;
          position:absolute;
          top:0;
          left:0;
          color: #006a84;
          background-color:rgba(149,229,200,0.5);
          width:300px;
          height:300px;
          -webkit-transition: all 400ms ease-out;
          -moz-transition: all 400ms ease-out;
          -o-transition: all 400ms ease-out;
          -ms-transition: all 400ms ease-out;
          transition: all 400ms ease-out;
          text-align:center;
          }
          .blossom-list6 .content:hover { opacity:1; }      
          .blossom-list6 .content .text {
          height:0;
          opacity:1;
          transition-delay: 0s;
          transition-duration: 0.4s;
          }
          .blossom-list6 .content:hover .text {
          opacity:1;
          transform: translateY(250px);
          -webkit-transform: translateY(250px);
          }
        </style>

<div class="blossom-list7">
          <img src="u.jpg" 
            width="300" height="300" alt="tree" />
          <div class="content">
            <div class="text">7600тг</div>
          </div>
        </div>  
        <style>
          .blossom-list7{
            position: absolute;
    left: 77vw;
    top: 103vw;
          padding:0;
          width:300px;
          display:block;
          cursor:pointer;
          overflow:hidden;
          }
          .content {
          opacity:0;
          font-size: 40px;
          position:absolute;
          top:0;
          left:0;
          color: #006a84;
          background-color:rgba(149,229,200,0.5);
          width:300px;
          height:300px;
          -webkit-transition: all 400ms ease-out;
          -moz-transition: all 400ms ease-out;
          -o-transition: all 400ms ease-out;
          -ms-transition: all 400ms ease-out;
          transition: all 400ms ease-out;
          text-align:center;
          }
          .blossom-list7 .content:hover { opacity:1; }      
          .blossom-list7 .content .text {
          height:0;
          opacity:1;
          transition-delay: 0s;
          transition-duration: 0.4s;
          }
          .blossom-list7 .content:hover .text {
          opacity:1;
          transform: translateY(250px);
          -webkit-transform: translateY(250px);
          }
        </style>

<div class="blossom-list8">
          <img src="q.jpg" 
            width="300" height="300" alt="tree" />
          <div class="content">
            <div class="text">11000тг</div>
          </div>
        </div>  
        <style>
          .blossom-list8{
            position: absolute;
    left: 1vw;
    top: 132vw;
          padding:0;
          width:300px;
          display:block;
          cursor:pointer;
          overflow:hidden;
          }
          .content {
          opacity:0;
          font-size: 40px;
          position:absolute;
          top:0;
          left:0;
          color: #006a84;
          background-color:rgba(149,229,200,0.5);
          width:300px;
          height:300px;
          -webkit-transition: all 400ms ease-out;
          -moz-transition: all 400ms ease-out;
          -o-transition: all 400ms ease-out;
          -ms-transition: all 400ms ease-out;
          transition: all 400ms ease-out;
          text-align:center;
          }
          .blossom-list8 .content:hover { opacity:1; }      
          .blossom-list8 .content .text {
          height:0;
          opacity:1;
          transition-delay: 0s;
          transition-duration: 0.4s;
          }
          .blossom-list8 .content:hover .text {
          opacity:1;
          transform: translateY(250px);
          -webkit-transform: translateY(250px);
          }
        </style>

<div class="blossom-list9">
          <img src="s.jpg" 
            width="300" height="300" alt="tree" />
          <div class="content">
            <div class="text">7000тг</div>
          </div>
        </div>  
        <style>
          .blossom-list9{
            position: absolute;
    left: 27vw;
    top: 132vw;
          padding:0;
          width:300px;
          display:block;
          cursor:pointer;
          overflow:hidden;
          }
          .content {
          opacity:0;
          font-size: 40px;
          position:absolute;
          top:0;
          left:0;
          color: #006a84;
          background-color:rgba(149,229,200,0.5);
          width:300px;
          height:300px;
          -webkit-transition: all 400ms ease-out;
          -moz-transition: all 400ms ease-out;
          -o-transition: all 400ms ease-out;
          -ms-transition: all 400ms ease-out;
          transition: all 400ms ease-out;
          text-align:center;
          }
          .blossom-list9 .content:hover { opacity:1; }      
          .blossom-list9 .content .text {
          height:0;
          opacity:1;
          transition-delay: 0s;
          transition-duration: 0.4s;
          }
          .blossom-list9 .content:hover .text {
          opacity:1;
          transform: translateY(250px);
          -webkit-transform: translateY(250px);
          }
        </style>

<div class="blossom-list10">
          <img src="o.jpg" 
            width="300" height="300" alt="tree" />
          <div class="content">
            <div class="text">8400тг</div>
          </div>
        </div>  
        <style>
          .blossom-list10{
            position: absolute;
    left: 52vw;
    top: 132vw;
          padding:0;
          width:300px;
          display:block;
          cursor:pointer;
          overflow:hidden;
          }
          .content {
          opacity:0;
          font-size: 40px;
          position:absolute;
          top:0;
          left:0;
          color: #006a84;
          background-color:rgba(149,229,200,0.5);
          width:300px;
          height:300px;
          -webkit-transition: all 400ms ease-out;
          -moz-transition: all 400ms ease-out;
          -o-transition: all 400ms ease-out;
          -ms-transition: all 400ms ease-out;
          transition: all 400ms ease-out;
          text-align:center;
          }
          .blossom-list10 .content:hover { opacity:1; }      
          .blossom-list10 .content .text {
          height:0;
          opacity:1;
          transition-delay: 0s;
          transition-duration: 0.4s;
          }
          .blossom-list10 .content:hover .text {
          opacity:1;
          transform: translateY(250px);
          -webkit-transform: translateY(250px);
          }
        </style>

<div class="blossom-list11">
          <img src="d.jpg" 
            width="300" height="300" alt="tree" />
          <div class="content">
            <div class="text">10000тг</div>
          </div>
        </div>  
        <style>
          .blossom-list11{
            position: absolute;
    left: 77vw;
    top: 132vw;
          padding:0;
          width:300px;
          display:block;
          cursor:pointer;
          overflow:hidden;
          }
          .content {
          opacity:0;
          font-size: 40px;
          position:absolute;
          top:0;
          left:0;
          color: #006a84;
          background-color:rgba(149,229,200,0.5);
          width:300px;
          height:300px;
          -webkit-transition: all 400ms ease-out;
          -moz-transition: all 400ms ease-out;
          -o-transition: all 400ms ease-out;
          -ms-transition: all 400ms ease-out;
          transition: all 400ms ease-out;
          text-align:center;
          }
          .blossom-list11 .content:hover { opacity:1; }      
          .blossom-list11 .content .text {
          height:0;
          opacity:1;
          transition-delay: 0s;
          transition-duration: 0.4s;
          }
          .blossom-list11 .content:hover .text {
          opacity:1;
          transform: translateY(250px);
          -webkit-transform: translateY(250px);
          }
        </style>
    </div>

    

    
    
    <div class="slide3">
        <div class="k2">
            <img src="блок2.png" alt="" max-width="160%" width="176%">
        </div>

        <div class="o2"> 
            <h1>ОТЗЫВЫ КЛИЕНТОВ</h1> <a name="chap3"> </a>
        </div>

        <div class="mess">
            <img src="отзыв1.png" alt="" max-width="160%" width="80%">
        </div>
        <div class="mess2">
            <img src="отзыв2.png" alt="" max-width="160%" width="80%">
        </div>
        <div class="mess3">
            <img src="отзыв3.png" alt="" max-width="160%" width="85%">
        </div>

        <div class="about"> 
            <h1>О компании</h1> <a name="chap5"> </a>
        </div>

        <div class="about0"> 
            <h2>Мы рады приветствовать вас на сайте нашей компании!<br>
                Наша "молодая"компания начала свое существование в <br>
                2024 году 18 февраля и с того момента мы стараемся <br>
                активно развиваться, регулярно покоряя новые высоты <br>
                в этой сфере. На данный момент наша организация <br>
                имеет магазин в центре Кокшетау, оснащенный <br>
                спец.климатическим оборудованием, которое <br>
                сохраняет правильную температуру и влажность помещения<br>
                для идеального хранения цветов. На данный момент мы <br>
                имеем интернет–магазин и единый call-центр, который <br>
                регулирует всю деятельность магазина; служба доставки... </h2> 
        </div>

        <div class="next"> 
            <a class="next-list" href="next-list.php"><strong>Подробнее</strong></a>
        </div>

        <div class="foto"> 
            <img src="интерьер.jpg" alt="" max-width="160%" width="80%">
        </div>
    </div>

    <div class="slide4">
        <div class="k3">
            <img src="блок2.png" alt="" max-width="160%" width="176%">
        </div> 

        <div class="u1"> <a name="chap2"> </a>
            <p> Доставка цветов Кокшетау. <br>
                Наши возможности: </p>
        </div>

        <div class="like">
            <img src="лфйк.png" alt="" max-width="160%" width="5%"> 
        </div> 
        <div class="line">
            <img src="список.png" alt="" max-width="160%" width="35%">
        </div> 
        <div class="clock">
            <img src="часы.png" alt="" max-width="160%" width="35%">
        </div>        
        <div class="present">
            <img src="подарок.png" alt="" max-width="160%" width="6%">
        </div>         
        <div class="card">
            <img src="карта.png" alt="" max-width="160%" width="30%"> 
        </div> 
        <div class="time">
            <img src="срок.png" alt="" max-width="160%" width="30%">
        </div> 


        <div class="like-t">
            <p>Качественно выполнили <br> свыше 1000 заказов</p>
        </div> 
        <div class="clock-t">
            <p> Возможна доставка через 30 <br> минут после заказа</p>
        </div>      
        <div class="present-t">
            <p> Ну оооочень большой <br> ассортимент</p>
        </div> 
        <div class="card-t">
            <p> Любая удобная для Вас <br> форма оплаты</p>
        </div> 
        <div class="time-t">
            <p>Круглосуточная <br> поддержка <br> покупателей</p>
        </div> 
        <div class="line-t">
            <p> Контакты со всеми <br>поставщиками свежих <br>цветов Республики </p>
        </div> 
    </div>


    <footer>
      <div class="logo3">
      <img src="готовое лого.png" alt="" max-width="160%" width="40%"> <a name="chap4"> </a>
      </div>
        <div class="waves">
            <div class="wave" id="wave1"> </div>
            <div class="wave" id="wave2"> </div>
            <div class="wave" id="wave3"> </div>
            <div class="wave" id="wave4"> </div>
        </div>
        <ul class="social_icon">  
            <li> <a href="https://instagram.com/laer.hdk/"><ion-icon name="logo-instagram"></ion-icon></a></li>
            <li> <a href="https://wa.me/77006872464?text="><ion-icon name="logo-whatsapp"></ion-icon></a></li>
        </ul>
       
        <p>©2024 Diana</p>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <div class="slide5">
      <div class="text-footer"><p> Время работы: с 10.00 до 17.00 <br>(без перерыва и выходных) <br>Phone: +79493050666</p><div>
        
      <div class="icon">
            <ul> <ion-icon name="home-outline"></ion-icon></ul>
            <ul> <ion-icon name="call-outline"></ion-icon></ul>
      </div>

      <div class="dropdown">
       <button class="dropbtn">Меню</button>
        <div class="dropdown-content">
            <a href="next-list.php">Информация о магазине</a>
            <a href="next-list.php">Скидки</a>
            <a href="next-list.php">Подарки</a>
        </div>
      </div>




    </div>
</body>
</html>