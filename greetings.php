<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" content=""/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>&#128513; greetings 问候</title>
	<link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<!--[if IE]>
	<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="css/chinese.css">
</head>
<body>
<audio controls="" id="bu4"><source src="audio/bu4.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="hu4"><source src="audio/hu4.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="ke3"><source src="audio/ke3.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="yi3"><source src="audio/yi3.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="neng2"><source src="audio/neng2.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="shi4"><source src="audio/shi4.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="you3"><source src="audio/you3.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="mei2"><source src="audio/mei2.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="qing3"><source src="audio/qing3.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="man2"><source src="audio/man2.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="zou3"><source src="audio/zou3.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="xiang3"><source src="audio/xiang3.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="zai4"><source src="audio/zai4.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="yao4"><source src="audio/yao4.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="jian4"><source src="audio/jian4.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="xu1"><source src="audio/xu1.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<?php include 'navbar.html'; ?>
<div class="container-fluid">
	<div class="box">
		<div>can (skill)</div><div class="character">会</div><div class="btn-group btn-group-lg">
				<button type="button" class="btn btn-huge btn-primary" onclick="play('hu4');">huì</button>
		</div>
	</div>
	<div class="box">
		<div>cannot</div><div class="character">不会</div><div class="btn-group btn-group-lg">
			<button type="button" class="btn btn-huge btn-primary" onclick="play('bu4');">bù</button>
			<button type="button" class="btn btn-huge btn-primary" onclick="play('hu4');">huì</button>
			</div>
	</div>
	<div class="box">
		<div>can (permission)</div><div class="character">可以</div><div class="btn-group btn-group-lg">
				<button type="button" class="btn btn-huge btn-success" onclick="play('ke3');">kě</button>
				<button type="button" class="btn btn-huge btn-success" onclick="play('yi3');">yǐ</button>
		</div>
	</div>
	<div class="box">
		<div>cannot</div><div class="character">不可以</div><div class="btn-group btn-group-lg">
				<button type="button" class="btn btn-huge btn-primary" onclick="play('bu4');">bù</button>
				<button type="button" class="btn btn-huge btn-success" onclick="play('ke3');">kě</button>
				<button type="button" class="btn btn-huge btn-success" onclick="play('yi3');">yǐ</button>
			</div>
	</div>
	<div class="box">
		<div>can (ability)</div><div class="character">能</div><div class="btn-group btn-group-lg">
				<button type="button" class="btn btn-huge btn-warning" onclick="play('neng2');">néng</button>
		</div>
	</div>
	<div class="box">
		<div>cannot</div><div class="character">不能</div><div class="btn-group btn-group-lg">
			<button type="button" class="btn btn-huge btn-primary" onclick="play('bu4');">bù</button>
			<button type="button" class="btn btn-huge btn-warning" onclick="play('neng2');">néng</button>
			</div>
	</div>
	<div class="clearfix"></div>
	<div class="box">
		<div>am</div><div class="character">是</div><div class="btn-group btn-group-lg">
			<button type="button" class="btn btn-huge btn-primary" onclick="play('shi4');">shì</button>
		</div>
	</div>
	<div class="box">
		<div>am not</div><div class="character">不是</div><div class="btn-group btn-group-lg">
			<button type="button" class="btn btn-huge btn-primary" onclick="play('bu4');">bù</button>
			<button type="button" class="btn btn-huge btn-primary" onclick="play('shi4');">shì</button>
		</div>
	</div>
	<div class="box">
		<div>to have</div><div class="character">有</div><div class="btn-group btn-group-lg">
			<button type="button" class="btn btn-huge btn-success" onclick="play('you3');">yǒu</button>
		</div>
	</div>
	<div class="box">
		<div>have not</div><div class="character">没有</div><div class="btn-group btn-group-lg">
			<button type="button" class="btn btn-huge btn-warning" onclick="play('mei2');">méi</button>
			<button type="button" class="btn btn-huge btn-success" onclick="play('you3');">yǒu</button>
		</div>
	</div>
	<div class="box">
		<div>want</div><div class="character">要</div><div class="btn-group btn-group-lg">
			<button type="button" class="btn btn-huge btn-success" onclick="play('xiang3');">xiǎng</button>
		</div>
	</div>
	<div class="box">
		<div>don't want</div><div class="character">没有</div><div class="btn-group btn-group-lg">
			<button type="button" class="btn btn-huge btn-primary" onclick="play('bu4');">bù</button>
			<button type="button" class="btn btn-huge btn-success" onclick="play('xiang3');">xiǎng</button>
			<button type="button" class="btn btn-huge btn-primary" onclick="play('yao4');">yào</button>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="box">
		<div>need</div><div class="character">需要</div><div class="btn-group btn-group-lg">
			<button type="button" class="btn btn-huge btn-danger" onclick="play('xu1');">xū</button>
			<button type="button" class="btn btn-huge btn-primary" onclick="play('yao4');">yào</button>
		</div>
	</div>
	<div class="box">
		<div>don't need</div><div class="character">不需要</div><div class="btn-group btn-group-lg">
			<button type="button" class="btn btn-huge btn-primary" onclick="play('bu4');">bù</button>
			<button type="button" class="btn btn-huge btn-danger" onclick="play('xu1');">xū</button>
			<button type="button" class="btn btn-huge btn-primary" onclick="play('yao4');">yào</button>
		</div>
	</div>
	<div class="box">
		<div>please</div><div class="character">请</div><div class="btn-group btn-group-lg">
			<button type="button" class="btn btn-huge btn-success" onclick="play('qing3');">qǐng</button>
		</div>
	</div>
	<div class="box">
		<div>goodbye</div><div class="character">再见</div><div class="btn-group btn-group-lg">
			<button type="button" class="btn btn-huge btn-primary" onclick="play('zai4');">zài</button>
			<button type="button" class="btn btn-huge btn-primary" onclick="play('jian4');">jiàn</button>
		</div>
	</div>
	<div class="box">
		<div>gentle goodbye</div><div class="character">慢走</div><div class="btn-group btn-group-lg">
			<button type="button" class="btn btn-huge btn-primary" onclick="play('man2');">màn</button>
			<button type="button" class="btn btn-huge btn-success" onclick="play('zou3');">zǒu</button>
		</div>
	</div>
</div>
<script src="js/chinese.js"></script>
<script>$("#breadcrumb").html("&#9986;&nbsp;basics&nbsp;基本 > &#128513;&nbsp;greetings&nbsp;问候 >");</script>
</body>
</html>
