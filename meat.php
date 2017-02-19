<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>&#127831; meat 肉</title>
	<link type="text/css" rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<!--[if IE]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="css/chinese.css">
</head>
<body>
<audio controls="" id="can1"><source src="audio/can1.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="yin4"><source src="audio/yin4.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="niu2"><source src="audio/niu2.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="rou4"><source src="audio/rou4.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="ji1"><source src="audio/ji1.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="ya1"><source src="audio/ya1.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="zhu1"><source src="audio/zhu1.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="gan1"><source src="audio/gan1.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="xiang1"><source src="audio/xiang1.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="chang2"><source src="audio/chang2.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="ha2"><source src="audio/ha2.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="ma1"><source src="audio/ma1.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="wen2"><source src="audio/wen2.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="chang1"><source src="audio/chang1.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="gao1"><source src="audio/gao1.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="yang2"><source src="audio/yang2.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<?php include 'navbar.html'; ?>
<div class="container-fluid">
	<div class="box">
		<div>beef</div><div class="btn-group btn-group-lg">
			<button type="button" class="btn btn-huge btn-warning" onclick="play('niu2');"><div class="character">牛</div>niú</button>
			<button type="button" class="btn btn-huge btn-primary" onclick="play('rou4');"><div class="character">肉</div>ròu</button>
		</div>
	</div>
	<div class="box">
		<div>chicken</div><button type="button" class="btn btn-huge btn-danger" onclick="play('ji1');"><div class="character">鸡 (雞)</div>jī</button>
	</div>
	<div class="box">
		<div>duck</div><button type="button" class="btn btn-huge btn-danger" onclick="play('ya1');"><div class="character">鸭 (鴨)</div>yā</button>
	</div>
	<div class="box">
		<div>pork</div><div class="btn-group btn-group-lg">
			<button type="button" class="btn btn-huge btn-danger" onclick="play('zhu1');"><div class="character">猪</div>zhū</button>
			<button type="button" class="btn btn-huge btn-primary" onclick="play('rou4');"><div class="character">肉</div>ròu</button>
		</div>
	</div>
	<div class="box">
		<div>lamb</div><div class="btn-group btn-group-lg">
			<button type="button" class="btn btn-huge btn-danger" onclick="play('gao1');"><div class="character">羔</div>gāo</button>
			<button type="button" class="btn btn-huge btn-primary" onclick="play('yang2');"><div class="character">羊</div>yáng</button>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="box">
		<div>liver</div><button type="button" class="btn btn-huge btn-danger" onclick="play('gan1');"><div class="character">肝</div>gān</button>
	</div>
	<div class="box">
		<div>sausage</div><div class="btn-group btn-group-lg">
			<button type="button" class="btn btn-huge btn-danger" onclick="play('xiang1');"><div class="character">香</div>xiāng</button>
			<button type="button" class="btn btn-huge btn-warning" onclick="play('chang2');"><div class="character">肠</div>cháng</button>
		</div>
	</div>
	<div class="box">
		<div>frog, toad</div><div class="btn-group btn-group-lg">
			<button type="button" class="btn btn-huge btn-warning" onclick="play('ha2');"><div class="character">虾</div>há</button>
			<button type="button" class="btn btn-huge btn-danger" onclick="play('ma1');"><div class="character">蟆</div>ma</button>
			</div>
	</div>
	<div class="box">
		<div>Wénchāng chicken</div><div class="btn-group btn-group-lg">
			<button type="button" class="btn btn-huge btn-warning" onclick="play('wen2');"><div class="character">文</div>wén</button>
			<button type="button" class="btn btn-huge btn-danger" onclick="play('chang1');"><div class="character">昌</div>chāng</button>
			<button type="button" class="btn btn-huge btn-danger" onclick="play('ji1');"><div class="character">鸡</div>jī</button>
		</div>
	</div>
</div>
<script src="js/chinese.js"></script>
<script>$("#breadcrumb").html("&#127835;&nbsp;food&nbsp;<div class='btn-group'><button type='button' class='btn btn-nav btn-danger' onclick='play(&#39;can1&#39;);'>餐 cān</button><button type='button' class='btn btn-nav btn-primary' onclick='play(&#39;yin4&#39;);'>饮 yǐn</button>&nbsp;&#9658&nbsp;</div> &#127831;&nbsp;meat&nbsp;<button type='button' class='btn btn-nav btn-primary' onclick='play(&#39;rou4&#39;);'>肉 ròu");</script>
</body>
</html>
