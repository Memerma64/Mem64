<?php
$ip = "172.65.255.252"; // IP сервера
$ipdomain = 'dorlcraft.ru'; // Домен сервера, если нет, то пишите тоже самое, что и в $ip
$port = "25565"; // Порт сервера
$domain = "hausmine.tk"; // Домен сайта

$config = array (
'trademc' => array(
	'serv1' => "156357", // ID магазина TradeMC первой вкладки
	'serv2' => "1", // ID магазина TradeMC второй вкладки
	'serv3' => "1", // ID магазина TradeMC третьей вкладки
	),
'list' => array(
	'serv1' => '
Survival
', // Название магазина первой вкладки
	'serv2' => '
Сервер 2
', // Название магазина второй вкладки
	'serv3' => '
Сервер 3
', // Название магазина третьей вкладки
	),
'web' => array(
	'title' => '<div><span style="color:#ffffff;">D</span><span style="color:#fff4ea;">a</span><span style="color:#ffead5;">r</span><span style="color:#ffdfbf;">k</span><span style="color:#ffd4aa;">D</span><span style="color:#ffca95;">o</span><span style="color:#ffbf80;">r</span><span style="color:#ffb46a;">l</span><span style="color:#ffaa55;">C</span><span style="color:#ff9f40;">r</span><span style="color:#ff942b;">a</span><span style="color:#ff8a15;">f</span><span style="color:#ff7f00;">t</span></div>
', // Название на самой странице сайта
// http://patorjk.com/text-color-fader/ - html текст с градиентом
	'name' => "Dorl", // Название
	'vk' => "", // ID группы
	'vk-link' => "", // Ccылка на группу ВК
	'vk-rules' => "", // Ссылка на обсуждение с правилами в ВК
	'discord' => "", // Инвайт дискорда
	)
);


// НЕ ТРОГАТЬ
$now_hours = date('G');
	if($now_hours>=0 &&$now_hours<=6){$time = 'night';}
	elseif($now_hours>6 && $now_hours<=12){$time = 'morning';}
	elseif($now_hours>12 && $now_hours<=18){$time = 'day';}
	elseif($now_hours>18 && $now_hours<=24){$time = 'evening';}
$monitoring = file_get_contents("https://minecraft-api.com/api/ping/playeronline.php?ip=$ip&port=$port");
$connect = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
// НЕ ТРОГАТЬ