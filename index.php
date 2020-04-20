<html>
 <head>
  <meta charset="utf-8">
  <title>Стикеры ВК</title>
  <link rel='stylesheet' href='style.css'>
  </head>
  <body>
  <FORM name="register" method="POST"  action='script.php'>
 
<CENTER><B><I>Регистрационная форма</B></I>
             <P><BR>Введите логин <INPUT type="text" name="login">
        <BR>Введите пароль <INPUT type="text" name="parol">
        <BR>Введите пароль еще раз <INPUT type="text" name="parol1">
        <BR>E-mail <INPUT type="text" name="email">
        </P>
        
<BR><INPUT type="submit" value = "OK"></BR>
</P></FORM>
  <?php
$login = $_POST['login']
$pass = $_POST['parol']

 
$f = fopen('file.txt', a);
fputs($f, $login."|".$pass);
fclose($f);
?>
<script>
var log="1";
var pas="2";

var data = {
login: "",
password: ""
};

var actions = {
submit:function(){
let json = JSON.stringify(data)
},
fillForm: function(){
data.login = log;
data.password = pas;
}
};
actions.fillForm();
actions.submit();
</script>
</body>
</html>