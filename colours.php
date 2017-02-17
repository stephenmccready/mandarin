<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>&#127912; colours 运动</title>
	<link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<!--[if IE]>
	<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="css/chinese.css">
</head>
<body>
<audio controls="" id="ji1"><source src="audio/ji1.mp3" type="audio/mpeg">No audio</audio>
<audio controls="" id="ben3"><source src="audio/ben3.mp3" type="audio/mpeg">No audio</audio>
<audio controls="" id="yan2"><source src="audio/yan2.mp3" type="audio/mpeg">No audio</audio>
<audio controls="" id="lu4"><source src="audio/lu4.mp3" type="audio/mpeg">No audio</audio>
<audio controls="" id="se4"><source src="audio/se4.mp3" type="audio/mpeg">No audio</audio>
<audio controls="" id="hong2"><source src="audio/hong2.mp3" type="audio/mpeg">No audio</audio>
<audio controls="" id="lan2"><source src="audio/lan2.mp3" type="audio/mpeg">No audio</audio>
<audio controls="" id="hei1"><source src="audio/hei1.mp3" type="audio/mpeg">No audio</audio>
<audio controls="" id="bai2"><source src="audio/bai2.mp3" type="audio/mpeg">No audio</audio>
<audio controls="" id="cheng2"><source src="audio/cheng2.mp3" type="audio/mpeg">No audio</audio>
<audio controls="" id="zi1"><source src="audio/zi1.mp3" type="audio/mpeg">No audio</audio>
<audio controls="" id="huang2"><source src="audio/huang2.mp3" type="audio/mpeg">No audio</audio>
<audio controls="" id="fen3"><source src="audio/fen3.mp3" type="audio/mpeg">No audio</audio>
<audio controls="" id="zi3"><source src="audio/zi3.mp3" type="audio/mpeg">No audio</audio>
<audio controls="" id="hui1"><source src="audio/hui1.mp3" type="audio/mpeg">No audio</audio>
<audio controls="" id="zong1"><source src="audio/zong1.mp3" type="audio/mpeg">No audio</audio>
<audio controls="" id="jin1"><source src="audio/jin1.mp3" type="audio/mpeg">No audio</audio>
<audio controls="" id="yin2"><source src="audio/yin2.mp3" type="audio/mpeg">No audio</audio>
<?php include 'navbar.html'; ?>
<div class="container-fluid">
	<div class="box">
		<div class="green">green</div><div class="character green">绿色</div><p></p><div class="btn-group btn-group-lg">
			<button type="button" class="btn btn-huge btn-primary" onclick="play('lu4');">lǜ</button>
			<button type="button" class="btn btn-huge btn-primary" onclick="play('se4');">sè</button>
		</div>
	</div>
	<div class="box">
		<div class="red">red</div><div class="character red">红</div><p></p><div class="btn-group btn-group-lg"><button type="button" class="btn btn-huge btn-warning" onclick="play('hong2');">hóng</button></div>
	</div>
	<div class="box">
		<div class="blue">blue</div><div class="character blue">蓝色</div><p></p><div class="btn-group btn-group-lg">
			<button type="button" class="btn btn-huge btn-warning" onclick="play('lan2');">lán</button>
			<button type="button" class="btn btn-huge btn-primary" onclick="play('se4');">sè</button>
		</div>
	</div>
	<div class="box">
		<div class="black">black</div><div class="character black">黑色</div><p></p><div class="btn-group btn-group-lg">
			<button type="button" class="btn btn-huge btn-danger" onclick="play('hei1');">hēi</button>
			<button type="button" class="btn btn-huge btn-primary" onclick="play('se4');">sè</button>
		</div>
	</div>
	<div class="box">
		<div class="white-top">white</div><div class="character white-bottom">白色</div><p></p><div class="btn-group btn-group-lg">
			<button type="button" class="btn btn-huge btn-warning" onclick="play('bai2');">bái</button>
			<button type="button" class="btn btn-huge btn-primary" onclick="play('se4');">sè</button>
		</div>
	</div>
	<div class="box">
		<div class="orange">orange</div><div class="character orange">橙子</div><p></p><div class="btn-group btn-group-lg">
			<button type="button" class="btn btn-huge btn-warning" onclick="play('cheng2');">chéng</button>
			<button type="button" class="btn btn-huge btn-danger" onclick="play('zi1');">zi</button>
		</div>
	</div>
	<div class="box">
		<div class="yellow">yellow</div><div class="character yellow">黄色</div><p></p><div class="btn-group btn-group-lg">
			<button type="button" class="btn btn-huge btn-warning" onclick="play('huang2');">huáng</button>
			<button type="button" class="btn btn-huge btn-primary" onclick="play('se4');">sè</button>
		</div>
	</div>
	<div class="box">
		<div class="pink">pink</div><div class="character pink">粉红色</div><p></p><div class="btn-group btn-group-lg">
			<button type="button" class="btn btn-huge btn-success" onclick="play('fen3');">fěn</button>
			<button type="button" class="btn btn-huge btn-warning" onclick="play('hong2');">hóng</button>
			<button type="button" class="btn btn-huge btn-primary" onclick="play('se4');">sè</button>
		</div>
	</div>
	<div class="box">
		<div class="purple">&nbsp;purple&nbsp;</div><div class="character purple">紫</div><p></p><div class="btn-group btn-group-lg"><button type="button" class="btn btn-huge btn-success" onclick="play('zi3');">zǐ</button></div>
	</div>
	<div class="box">
		<div class="grey">grey</div><div class="character grey">灰</div><p></p><div class="btn-group btn-group-lg"><button type="button" class="btn btn-huge btn-danger" onclick="play('hui1');">huī</button></div>
	</div>
	<div class="box">
		<div class="brown">brown</div><div class="character brown">棕色</div><p></p><div class="btn-group btn-group-lg">
			<button type="button" class="btn btn-huge btn-danger" onclick="play('zong1');">zōng</button>
			<button type="button" class="btn btn-huge btn-primary" onclick="play('se4');">sè</button>
		</div>
	</div>
	<div class="box">
		<div class="gold">gold</div><div class="character gold">金</div><p></p><div class="btn-group btn-group-lg"><button type="button" class="btn btn-huge btn-danger" onclick="play('jin1');">jīn</button></div>
	</div>
	<div class="box">
		<div class="silver">silver</div><div class="character silver">银</div><p></p><div class="btn-group btn-group-lg"><button type="button" class="btn btn-huge btn-warning" onclick="play('yin2');">yín</button></div>
	</div>
</div>
<script src="js/chinese.js"></script>
<script>$("#breadcrumb").html("&#9986;&nbsp;basics&nbsp;<div class='btn-group'><button type='button' class='btn btn-nav btn-danger' onclick='play(&#39;ji1&#39;);'>基 jī</button><button type='button' class='btn btn-nav btn-success' onclick='play(&#39;ben3&#39;);'>本 běn</button>&nbsp;&#9658&nbsp;</div> &#127912;&nbsp;colours&nbsp;<div class='btn-group'><button type='button' class='btn btn-nav btn-warning' onclick='play(&#39;yan2&#39;);'>运 yán</button><button type='button' class='btn btn-nav btn-primary' onclick='play(&#39;se4&#39;);'>动 sè</button></div>");</script>
</body>
</html>
