<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" content=""/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>drink 喝</title>
	<link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<!--[if IE]>
	<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="css/chinese.css">
</head>
<body>
<audio controls="" id="can1"><source src="audio/can1.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="yin4"><source src="audio/yin4.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="he1"><source src="audio/he1.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="ka1"><source src="audio/ka1.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="fei1"><source src="audio/fei1.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="cha2"><source src="audio/cha2.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="shui3"><source src="audio/shui3.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="pi2"><source src="audio/pi2.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="shui3"><source src="audio/shui3.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="jui3"><source src="audio/jui3.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="niu2"><source src="audio/niu2.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="nai3"><source src="audio/nai3.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="tang1"><source src="audio/tang1.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<?php include 'navbar.html'; ?>
	<div class="container-fluid">
		<div class="box">
			<div>coffee</div><div class="btn-group btn-group-lg">
				<button type="button" class="btn btn-huge btn-danger" onclick="play('ka1');"><div class="character">咖</div>kā</button>
				<button type="button" class="btn btn-huge btn-danger" onclick="play('fei1');"><div class="character">啡</div>fēi</button>
			</div>
		</div>
		<div class="box">
			<div>tea</div><button type="button" class="btn btn-huge btn-warning" onclick="play('cha2');"><div class="character">茶</div>chá</button>
		</div>
		<div class="box">
			<div>water</div><button type="button" class="btn btn-huge btn-success" onclick="play('shui3');"><div class="character">水</div>shuǐ</button>
		</div>
		<div class="clearfix"></div>
		<div class="box">
			<div>beer</div><div class="btn-group btn-group-lg">
				<button type="button" class="btn btn-huge btn-warning" onclick="play('pi2');"><div class="character">啤</div>pí</button>
				<button type="button" class="btn btn-huge btn-success" onclick="play('jui3');"><div class="character">酒</div>jiǔ</button>
			</div>
		</div>
		<div class="box">
			<div>wine</div><button type="button" class="btn btn-huge btn-success" onclick="play('jui3');"><div class="character">酒</div>jiǔ</button>
		</div>
		<div class="box">
			<div>cows milk</div><div class="btn-group btn-group-lg">
				<button type="button" class="btn btn-huge btn-warning" onclick="play('niu2');"><div class="character">牛</div>niú</button>
				<button type="button" class="btn btn-huge btn-success" onclick="play('nai3');"><div class="character">奶</div>nǎi</button>
			</div>
		</div>
		<div class="box">
			<div>soup,hot water</div><button type="button" class="btn btn-huge btn-danger" onclick="play('tang1');"><div class="character">汤</div>tāng</button>
		</div>
	</div>
<script src="js/chinese.js"></script>
<script>$("#breadcrumb").html("&#127835;&nbsp;food&nbsp;<div class='btn-group'><button type='button' class='btn btn-nav btn-danger' onclick='play(&#39;can1&#39;);'>餐 cān</button><button type='button' class='btn btn-nav btn-primary' onclick='play(&#39;yin4&#39;);'>饮 yǐn</button>&nbsp;&#9658&nbsp;</div> &#9749;&nbsp;drink&nbsp;<button type='button' class='btn btn-nav btn-danger' onclick='play(&#39;he1&#39;);'>喝 hē</button>");</script>
</body>
</html>
