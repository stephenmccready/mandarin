<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>&#127834; staples 餐饮</title>
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
<audio controls="" id="zhu3"><source src="audio/zhu3.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="shi2"><source src="audio/shi2.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="fan4"><source src="audio/fan4.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="mian4"><source src="audio/mian4.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="tiao2"><source src="audio/tiao2.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="bao1"><source src="audio/bao1.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="you2"><source src="audio/you2.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="dan4"><source src="audio/dan4.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="ga1"><source src="audio/ga1.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="li2"><source src="audio/li2.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="jiao3"><source src="audio/jiao3.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="shao1"><source src="audio/shao1.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="mai4"><source src="audio/mai4.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="tang1"><source src="audio/tang1.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="zi1"><source src="audio/zi1.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="la4"><source src="audio/la4.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="zhou1"><source src="audio/zhou1.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<?php include 'navbar.html'; ?>
<div class="container-fluid">
	<div class="box">
		<div>rice, food</div><div class="btn-group btn-group-lg"><button type="button" class="btn btn-huge btn-primary" onclick="play('fan4');"><div class="character">饭 (飯)</div>fàn</button></div>
	</div>
	<div class="box">
		<div>noodles</div><div class="btn-group btn-group-lg">
			<button type="button" class="btn btn-huge btn-primary" onclick="play('mian4');"><div class="character">面</div>miàn</button>
			<button type="button" class="btn btn-huge btn-warning" onclick="play('tiao2');"><div class="character">条</div>tiáo</button>
			</div>
		</div>
	<div class="box">
		<div>bread</div><div class="btn-group btn-group-lg">
			<button type="button" class="btn btn-huge btn-primary" onclick="play('mian4');"><div class="character">面</div>miàn</button>
			<button type="button" class="btn btn-huge btn-danger" onclick="play('bao1');"><div class="character">包</div>bāo</button>
		</div>
		</div>
	<div class="box">
		<div>fritters</div><div class="btn-group btn-group-lg">
			<button type="button" class="btn btn-huge btn-warning" onclick="play('you2');"><div class="character">油</div>yóu</button>
			<button type="button" class="btn btn-huge btn-warning" onclick="play('tiao2');"><div class="character">条</div>tiáo</button>
		</div>
	</div>
	<div class="box">
		<div>egg</div><div class="btn-group btn-group-lg"><button type="button" class="btn btn-huge btn-primary" onclick="play('dan4');"><div class="character">蛋</div>dàn</button></div>
	</div>
	<div class="box">
		<div>curry</div><div class="btn-group btn-group-lg">
			<button type="button" class="btn btn-huge btn-danger" onclick="play('ga1');"><div class="character">咖</div>gā</button>
			<button type="button" class="btn btn-huge btn-warning" onclick="play('li2');"><div class="character">喱</div>lí</button>
		</div>
	</div>
	<div class="box">
		<div>soup</div><div class="btn-group btn-group-lg"><button type="button" class="btn btn-huge btn-danger" onclick="play('tang1');"><div class="character">汤</div>tāng</button></div>
	</div>
	<div class="box">
		<div>congee</div><div class="btn-group btn-group-lg"><button type="button" class="btn btn-huge btn-danger" onclick="play('zhou1');"><div class="character">粥</div>zhōu</button></div>
	</div>
	<div class="box">
		<div>dumpling</div><div class="btn-group btn-group-lg"><button type="button" class="btn btn-huge btn-success" onclick="play('jiao3');"><div class="character">饺</div>jiǎo</button></div>
	</div>
	<div class="box">
		<div>pork dumpling</div><div class="btn-group btn-group-lg">
			<button type="button" class="btn btn-huge btn-danger" onclick="play('shao1');"><div class="character">咖</div>shāo</button>
			<button type="button" class="btn btn-huge btn-primary" onclick="play('mai4');"><div class="character">喱</div>mài</button>
		</div>
	</div>
	<div class="box">
		<div>soup dumpling</div><div class="btn-group btn-group-lg">
			<button type="button" class="btn btn-huge btn-success" onclick="play('jiao3');"><div class="character">饺</div>jiǎo</button>
			<button type="button" class="btn btn-huge btn-danger" onclick="play('zi1');"><div class="character">子</div>zi</button>
			<button type="button" class="btn btn-huge btn-danger" onclick="play('tang1');"><div class="character">汤</div>tāng</button>
		</div>
	</div>
	<div class="box">
		<div>spicy</div><div class="btn-group btn-group-lg"><button type="button" class="btn btn-huge btn-primary" onclick="play('la4');"><div class="character">辣</div>là</button></div>
	</div>
</div>
<script src="js/chinese.js"></script>
<script>$("#breadcrumb").html("&#127835;&nbsp;food&nbsp;<div class='btn-group'><button type='button' class='btn btn-nav btn-danger' onclick='play(&#39;can1&#39;);'>餐 cān</button><button type='button' class='btn btn-nav btn-primary' onclick='play(&#39;yin4&#39;);'>饮 yǐn</button>&nbsp;&#9658&nbsp;</div> &#127834;&nbsp;staples&nbsp;<div class='btn-group'><button type='button' class='btn btn-nav btn-success' onclick='play(&#39;zhu3&#39;);'>主 zhǔ</button><button type='button' class='btn btn-nav btn-warning' onclick='play(&#39;shi2&#39;);'>食 shí</button></div>");</script>
</body>
</html>
