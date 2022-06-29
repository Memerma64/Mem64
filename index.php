<?php include 'config.php';?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?=$config['web']['name']?> → Уютный Minecraft Сервер</title>
		<meta name="description" content="<?=$config['web']['name']?> → Лучший Проект!">
		<meta name="description" content="Оффициальный сайт сервера <?=$config['web']['name']?>. На данной странице вы сможете приобрести донат или ознакомиться с информацией представленной здесь / <?=$config['web']['name']?> → Лучший проект!">
		<meta name="Keywords" content="Донат, Sigurd донат, группа, Лучший, ВК, сервер, donate, сайт, оффициальный, бесплатный, пиратский, мини-игры, gta, гта, выживание, риливорллд, домер, домера, сервера, сигурд донат, сигурд, sigurd">
		<meta property="og:locale" content="ru_RU">
		<link rel="shortcut icon" href="/favicons.png" type="/">
		<link href="/style/css/bootstrap.min.css" rel="stylesheet">
		<link href="/style/css/bootstrap.min1.css" rel="stylesheet">
		<link href="/style/css/site.min.css" rel="stylesheet">
		<link href="/style/css/style.css" rel="stylesheet">
		<link href="/style/css/font-awesome.min.css" rel="stylesheet" >
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<script src="/style/js/jquery.min.js"></script>
		<script src="/style/js/bootstrap.min.js"></script>
		<script src="/style/js/trademcapi.js"></script>
		<script type="text/javascript" src="https://vk.com/js/api/openapi.js?168"></script>
		<script type="text/javascript">VK.Widgets.Group("vk_groups", {mode: 4, width: "auto", height: "400", color1: 'FFFFFF', color2: '000000', color3: 'EFAD4C'}, <?=$config['web']['vk']?>);</script>
		<script type="text/javascript">VK.Widgets.CommunityMessages("vk_community_messages", <?=$config['web']['vk']?>, {disableExpandChatSound: "1",tooltipButtonText: "Есть вопрос? Задавайте."});</script>
		<script>TrademcAPI.GetBuyForm({"Shop":"<?=$config['trademc']['serv1']?>","Title":"","Nickname":"Введите ваш никнейм","Item":"Выберите привилегию","Coupon":"Введите скидочный купон, если есть","Button":"                      Оплатить                      ","Success_URL":"<?php echo $connect;?>","Pending_URL":"<?php echo $connect;?>","Fail_URL":"<?php echo $connect;?>","PastPlaceID":"trademc-serv1","Styles":"/style/css/trademc.css"});</script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script src="/style/js/jquery-1.11.3.js"></script>
		<script src="/style/js/countdown.js"></script>
		<script>var date = new Date();var day = date.getDate() + 1;var month = date.getMonth() + 1 ;if(day >= 32) { day = day - 1 }$(".row").countdown("2029/" + month + "/" + day, function(event) {$('.second').text(event.strftime('%H'));$('.third').text(event.strftime('%M'));$('.four').text(event.strftime('%S'));});</script>
	</head>
	<body background="/style/img/dyn/<?php echo $time;?>.jpg">
		<div id="vk_community_messages"></div>
		<nav class="navbar navbar-inverse bg-inverse navbar-toggleable-md">
			<div class="container">
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<a class="navbar-brand" href="/"><span class="logo"><?=$config['web']['title']?></span></a>
					<div class="collapse navbar-collapse" id="navbarColor01">
						<ul class="navbar-nav mr-auto">
						<li class="nav-item"><a href="/" class="nav-link"><i class=""></i></a></li>
						<!--<li class="nav-item"><a href="/" class="nav-link"><i class="fa fa-home"></i> Главная</a></li>-->
						<li class="nav-item"><a href="<?=$config['web']['vk-rules']?>" class="nav-link"><i class="fa fa-file-text"></i> Правила</a></li>
						<a class="nav-link" data-toggle="modal" data-target="#rulesModal" href="#rules"><i class="fa fa-money"></i> Как купить донат?</a>
						<!--<a class="nav-link" data-toggle="modal" data-target="#donateModal" href="/#permissions"><i class="fa fa-database"></i> Описание привилегий</a>-->
						<a class="nav-link" href="https://discord.gg/<?=$config['web']['discord']?>"><img src="/style/img/Discord.png" width="24" height="24"> Discord</a>
						</ul>
						<span class="navbar-text">
						<span class="wobble badge badge-danger">Онлайн: <a id="online"><?php echo $monitoring?></a><a></a></span><a> <span class="badge badge-primary" onclick="prompt('Скопируйте наш IP адрес и вставьте в ваш клиент:','<?php echo $ipdomain?>'); return false;">IP: <?php echo $ipdomain?></span></a></span><a>
						</a><a href="<?=$config['web']['vk-link']?>" target="_blank"><span class="badge badge-black"><i class="fa fa-vk"></i></span></a>
					</div>
			</div>
		</nav>
		<div class="section">
		<div class="container">
		<br>
		<div>
			<div>
				<div class="card card-body">
					<div class="row">
						<div class="col-md-6">
							<ul class="nav nav-tabs nav-fill" style="margin-bottom: 10px">
								<li role="presentation" class="nav-item">
									<a href="#1" role="tab" class="nav-link active show" data-toggle="tab" aria-selected="true"><?=$config['list']['serv1']?></a>
								</li>
							</ul>
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="1">
									</div>
									<div id="trademc-serv1"></div>
								</div>
						</div>
					</div>
				</div>
				<br><br>
			</div>
		</div>
		<br>
		<div class="modal fade" id="rulesModal" tabindex="-1" role="dialog" aria-labelledby="rulesModalTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
				<div class="modal-content">
					<center><br>
						<h1>1. Введи ник и выбери привилегию</h1>
						<p>которую хочешь купить, а затем <strong>нажми на кнопку</strong></p>
						<img src="/style/img/don1.jpg" class="img-fluid">
						<hr />
						<h1>2. Выбери нужный способ оплаты</h1>
						<p>QIWI, WebMoney, Яндекс.Деньги, все на твой выбор</p>
						<img src="/style/img/don2.jpg" tppabs="/style/css/" class="img-fluid">
						<hr />
						<h1>3. Введи свой номер телефона</h1>
						<p>или лицевого счета, все зависит от выбранного способа оплаты</p>
						<img src="/style/img/don3.jpg" tppabs="/style/css/" class="img-fluid">
						<hr />
						<h1>4. Перейди к оплате</h1>
						<p>но для начала введи пароль от сервиса оплаты (если требуется)</p>
						<img src="/style/img/don4.png" tppabs="/style/css/" class="img-fluid">
						<hr />
						<h1>5. Успешно!</h1>
						вы будете перенаправлены на сайт платежной системы<br />
						теперь достаточно зайти на сервер под своим ником и наслаждаться игрой с привилегией!<br />
						<img src="/style/img/don5.png" tppabs="http://user35157.mjcore.space/" class="img-fluid">
						<hr />
						<h1>Возникли проблемы?</h1>
						<p>Ты всегда можешь обратиться в нашу службу поддержки!</p>
						<a href="https://vk.com/lolkacraft-<?=$config['web']['vk']?>" class="btn btn-warning">Обратиться в техническую поддержку</a>
					</center><br><br>
				</div>
			</div>
		</div>
		<div class="modal fade" id="donateModal" tabindex="-1" role="dialog" aria-labelledby="donatModalTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="donateModalTitle">Описание Привилегий</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row pb-5">
							<div class="col-3">
								<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical"></div>
							</div>
							<div class="col-9">
								<div class="tab-content" id="v-pills-tabContent">
									<div class="tab-pane fade show active" id="v-pills-main" role="tabpanel" aria-labelledby="v-pills-main-tab"></div>
									<div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-account-2"></div>
									<div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-account-3"></div>
									<div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4"></div>
									<div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-5"></div>
									<div class="tab-pane fade" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-6"></div>
									<div class="tab-pane fade" id="v-pills-7" role="tabpanel" aria-labelledby="v-pills-7"></div>
									<div class="tab-pane fade" id="v-pills-8" role="tabpanel" aria-labelledby="v-pills-8"></div>
									<div class="tab-pane fade" id="v-pills-9" role="tabpanel" aria-labelledby="v-pills-9"></div>
									<div class="tab-pane fade" id="v-pills-10" role="tabpanel" aria-labelledby="v-pills-10"></div>
									<div class="tab-pane fade" id="v-pills-11" role="tabpanel" aria-labelledby="v-pills-11"></div>
									<div class="tab-pane fade" id="v-pills-12" role="tabpanel" aria-labelledby="v-pills-12"></div>
									<div class="tab-pane fade" id="v-pills-13" role="tabpanel" aria-labelledby="v-pills-13"></div>
									<div class="tab-pane fade" id="v-pills-14" role="tabpanel" aria-labelledby="v-pills-14"></div>
									<div class="tab-pane fade" id="v-pills-15" role="tabpanel" aria-labelledby="v-pills-15"></div>
									<div class="tab-pane fade" id="v-pills-16" role="tabpanel" aria-labelledby="v-pills-16"></div>
									<div class="tab-pane fade" id="v-pills-17" role="tabpanel" aria-labelledby="v-pills-17"></div>
									<div class="tab-pane fade" id="v-pills-18" role="tabpanel" aria-labelledby="v-pills-18"></div>
									<div class="tab-pane fade" id="v-pills-19" role="tabpanel" aria-labelledby="v-pills-19"></div>
									<div class="tab-pane fade" id="v-pills-20" role="tabpanel" aria-labelledby="v-pills-20"></div>
									<div class="tab-pane fade" id="v-pills-21" role="tabpanel" aria-labelledby="v-pills-21"></div>
									<div class="tab-pane fade" id="v-pills-22" role="tabpanel" aria-labelledby="v-pills-22"></div>
									<div class="tab-pane fade" id="v-pills-23" role="tabpanel" aria-labelledby="v-pills-23"></div>
								</div>
							</div> 
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
					</div>
				</div>
			</div>
		</div>
		<footer class="footer">
			<div class="container text-center">
				2021 © <?=$config['web']['title']?>. Все права защищены! 
			</div>
		</footer>