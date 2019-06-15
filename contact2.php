<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
<link href="/css/style.css" rel="stylesheet" type="text/css" />
<link href="/img/map.png" rel="shortcut icon" type="image/x-icon" />
<title>Интерактивная карта</title> 
<script type="text/javascript" src="https://konyakov.ru/pubs/rr/tooltip.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script>
   $(document).ready (function () {
    $("#done").click (function () {
     $('#messageShow').hide ();
     var name = $("#name").val ();
     var email = $("#email").val ();
     var subject = $("#subject").val ();
     var message = $("#message").val ();
     var fail = "";
     if (name.length < 3) fail = "Имя меньше 3 символов";
     else if (email.split ('@').length - 1 == 0 || email.split ('.').length - 1 == 0)
      fail = "Вы ввели некорректный адрес эл. почты";
     else if (subject.length < 5)
      fail = "Слишком маленькая тема";
     else if (message.length < 25)
      fail = "Слишком маленькое сообщение";
     if (fail != "") {
      $('#messageShow').html (fail + "<div class='clear'><br></div>");
      $('#messageShow').show ();
      return false;
     }
     $.ajax ({
      url: 'ajax/feedback.php',
      type: 'POST',
      cache: false,
      data: {'name': name, 'email': email, 'subject': subject, 'message': message},
      dataType: 'html',
      success: function (data) {
       $('#messageShow').html (data + "<div class='clear'><br></div>");
       $('#messageShow').show ();
      }
     });
    });
   });
  </script>
  </head> 
<body>
    
<header>
    <a href="index.php" id="logo" alt="На главную" title="На главную">ХМАО-Югра</a><input type="text" class="field" placeholder="Что-то ищете?" />  
</header>
    <div class="top">
        <div class="clear">
            <br />
        </div>
        <center>
            <div id="menu">Меню<hr /></div>
            <div id="menuHrefs">
                <a href="index.php"><b>На главную</b></a>
                <a href="intkarta.php"><b>Карта</b></a>
                <a href="contact2.php"><b>Контакты</b></a>
                <a href="#"><b>О нас</b></a>
            </div>
        </center>
    </div> 
 <!-- <div id="page-wrap">
        
    </div>-->
      
          <main>
          <div class="block">
           <h2>Обратная связь</h2>
                   <div id="leftCol">
               <input type="text" placeholder="Имя" id="name" name="name" /><br />
               <input type="text" placeholder="Email" id="email" name="email" /><br />
               <input type="text" placeholder="Тема сообщения" id="subject" name="subject" /><br />
               <textarea name="message" id="message" placeholder="Введите сообщение"></textarea><br />
               <div id="messageShow"></div>
                       <input type="button" name="done" id="done" value="Отправить" />
                   </div>
          </div>
       </main>   
    
      <div class="podv">
        
    </div>
<footer>
    <span class="left"><b>Магьдиев Марсель, &copy; 2019</b></span>
    <span class="right"></span>
    <ul class="social">
        
    <a href="https://vk.com/idmarsikk503"><img src="img/vk.png" class="social" alt="vk" title="vk"></a>
    <a href="#"><img src="img/instagram.png" class="social" alt="instagram" title="instagram" ></a>
    <a href="#"><img src="img/twitter.png" class="social" alt="twitter" title="twitter" ></a>
    <a href="#"><img src="img/mail.png" class="social" alt="email" title="email" /></a>
    <a href="#"><img src="img/facebook.png" class="social" alt="facebook" title="facebook" ></a>
    </ul>
</footer>

</body>       
</html>