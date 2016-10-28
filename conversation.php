<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" content=""/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>&#128172; conversation 会话</title>
	<link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<!--[if IE]>
	<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="css/chinese.css">
</head>
<body>
<audio controls="" id="DoyouspeakMandarin"><source src="audio/DoyouspeakMandarin.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="IspeakalittleMandarin"><source src="audio/IspeakalittleMandarin.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="Yesalittle"><source src="audio/Yesalittle.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="Notverywell"><source src="audio/Notverywell.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="MyMandarinisnotgood"><source src="audio/MyMandarinisnotgood.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="Doyouunderstandme"><source src="audio/Doyouunderstandme.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="Pleasespeakmoreslowly"><source src="audio/Pleasespeakmoreslowly.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="Pleaserepeatthat"><source src="audio/Pleaserepeatthat.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="Idontunderstand"><source src="audio/Idontunderstand.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<?php include 'navbar.html'; ?>
<div class="container-fluid">
	<div class="box">
		<div>Do you speak Mandarin?</div><div class="character">你会说中文吗</div><div class="btn-group btn-group-lg">
			<button type="button" class="btn btn-huge btn-info" onclick="play('DoyouspeakMandarin');">Nǐ huì shuō Zhōngwén ma</button>
		</div>
	</div>
	<div class="box">
		<div>I speak a little Mandarin</div><div class="character">我会说一点点中文</div><div class="btn-group btn-group-lg">
			<button type="button" class="btn btn-huge btn-info" onclick="play('IspeakalittleMandarin');">Wǒ huì shuō yīdiǎndiǎn Zhōngwén</button>
		</div>
	</div>
	<div class="box">
		<div>Yes, a little</div><div class="character">会,一点点</div><div class="btn-group btn-group-lg">
			<button type="button" class="btn btn-huge btn-info" onclick="play('Yesalittle');">Huì, yī diǎn diǎn</button>
		</div>
	</div>
	<div class="box">
		<div>Not very well</div><div class="character">不太好</div><div class="btn-group btn-group-lg">
			<button type="button" class="btn btn-huge btn-info" onclick="play('Notverywell');">Bú tài hǎo</button>
		</div>
	</div>
	<div class="clearfix">&nbsp;</div>
	<div class="box">
		<div>My Mandarin is not good</div><div class="character">我的中文不好</div><div class="btn-group btn-group-lg">
			<button type="button" class="btn btn-huge btn-info" onclick="play('MyMandarinisnotgood');">Wǒ de Zhōngwén bù hǎo</button>
		</div>
	</div>
	<div class="box">
		<div>Do you understand me?</div><div class="character">你听得懂我说什么吗?</div><div class="btn-group btn-group-lg">
			<button type="button" class="btn btn-huge btn-info" onclick="play('Doyouunderstandme');">Nǐ tīng dé dǒng wǒ shuō shénme ma</button>
		</div>
	</div>
	<div class="box">
		<div>Please speak more slowly</div><div class="character">请说慢一点</div><div class="btn-group btn-group-lg">
			<button type="button" class="btn btn-huge btn-info" onclick="play('Pleasespeakmoreslowly');">Qǐng shuō màn yīdiǎn</button>
		</div>
	</div>
	<div class="box">
		<div>Please repeat that</div><div class="character">请再说一次</div><div class="btn-group btn-group-lg">
			<button type="button" class="btn btn-huge btn-info" onclick="play('Pleaserepeatthat');">Qǐng zài shuō yīcì</button>
		</div>
	</div>
	<div class="box">
		<div>I don’t understand</div><div class="character">我听不懂</div><div class="btn-group btn-group-lg">
			<button type="button" class="btn btn-huge btn-info" onclick="play('Idontunderstand');">Wǒ tīng bú dǒng</button>
		</div>
	</div>
</div>
<!-- http://mandarin.about.com/od/lessons/a/do_you_speak.htm -->
<script src="js/chinese.js"></script>
<script>$("#breadcrumb").html("&#9986;&nbsp;basics&nbsp;基本 > &#128172;&nbsp;conversation&nbsp;会话 >");</script>
</body>
</html>
