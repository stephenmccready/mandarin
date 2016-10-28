<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" content=""/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>&#128197; dates 日期</title>
	<link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<!--[if IE]>
	<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="css/chinese.css">
</head>
<body>
<audio controls="" id="zhou1"><source src="audio/zhou1.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="yi1"><source src="audio/yi1.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="er4"><source src="audio/er4.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="san1"><source src="audio/san1.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="si4"><source src="audio/si4.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="shi2"><source src="audio/shi2.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="wu3"><source src="audio/wu3.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="liu4"><source src="audio/liu4.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="ri4"><source src="audio/ri4.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="nian2"><source src="audio/nain2.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="yue4"><source src="audio/yue4.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="ming2"><source src="audio/ming2.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="dian3"><source src="audio/dian3.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="hou4"><source src="audio/hou4.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<?php include 'navbar.html'; ?>
	<div class="container-fluid">
		<div class="box">
			<div>Monday</div><div class="character">周一</div><div class="btn-group btn-group-lg">
				<button type="button" class="btn btn-huge btn-danger" onclick="play('zhou1');">zhōu</button>
				<button type="button" class="btn btn-huge btn-danger" onclick="play('yi1');">yī</button>
			</div>
		</div>
		<div class="box">
			<div>Tuesday</div><div class="character">周二</div><div class="btn-group btn-group-lg">
				<button type="button" class="btn btn-huge btn-danger" onclick="play('zhou1');">zhōu</button>
				<button type="button" class="btn btn-huge btn-primary" onclick="play('er4');">'èr</button>
			</div>
		</div>
		<div class="box">
			<div>Wednesday</div><div class="character">周三</div><div class="btn-group btn-group-lg">
				<button type="button" class="btn btn-huge btn-danger" onclick="play('zhou1');">zhōu</button>
				<button type="button" class="btn btn-huge btn-danger" onclick="play('san1');">sān</button>
			</div>
		</div>
		<div class="box">
			<div>Thursday</div><div class="character">周四</div><div class="btn-group btn-group-lg">
				<button type="button" class="btn btn-huge btn-danger" onclick="play('zhou1');">zhōu</button>
				<button type="button" class="btn btn-huge btn-primary" onclick="play('si4');">sì</button>
			</div>
		</div>
		<div class="box">
			<div>Friday</div><div class="character">周五</div><div class="btn-group btn-group-lg">
				<button type="button" class="btn btn-huge btn-danger" onclick="play('zhou1');">zhōu</button>
				<button type="button" class="btn btn-huge btn-success" onclick="play('wu3');">wǔ</button>
			</div>
		</div>
		<div class="box">
			<div>Saturday</div><div class="character">周六</div><div class="btn-group btn-group-lg">
				<button type="button" class="btn btn-huge btn-danger" onclick="play('zhou1');">zhōu</button>
				<button type="button" class="btn btn-huge btn-primary" onclick="play('liu4');">liù</button>
			</div>
		</div>
		<div class="box">
			<div>Sunday</div><div class="character">周日</div><div class="btn-group btn-group-lg">
				<button type="button" class="btn btn-huge btn-danger" onclick="play('zhou1');">zhōu</button>
				<button type="button" class="btn btn-huge btn-primary" onclick="play('ri4');">rì</button>
			</div>
		</div>
		<div class="box">
			<div>Year</div><div class="character">年</div><div class="btn-group btn-group-lg">
				<button type="button" class="btn btn-huge btn-warning" onclick="play('nian2');">nián</button>
			</div>
		</div>
		<div class="box">
			<div>Month</div><div class="character">月</div><div class="btn-group btn-group-lg">
				<button type="button" class="btn btn-huge btn-primary" onclick="play('yue4');">yuè</button>
			</div>
		</div>
		<div class="box">
			<div>Day</div><div class="character">日</div><div class="btn-group btn-group-lg">
				<button type="button" class="btn btn-huge btn-primary" onclick="play('ri4');">rì</button>
			</div>
		</div>
		<div class="box">
			<div>December</div><div class="character">十二月</div><div class="btn-group btn-group-lg">
				<button type="button" class="btn btn-huge btn-warning" onclick="play('shi2');">shí'</button>
				<button type="button" class="btn btn-huge btn-primary" onclick="play('er4');">èr</button>
				<button type="button" class="btn btn-huge btn-primary" onclick="play('yue4');">yuè</button>
			</div>
		</div>

		<div class="box">
			<div>Bright</div><div class="character">明</div><div class="btn-group btn-group-lg">
				<button type="button" class="btn btn-huge btn-warning" onclick="play('ming2');">míng</button>
			</div>
		</div>
		<div class="box">
			<div>Tomorrow</div><div class="character">明日</div><div class="btn-group btn-group-lg">
				<button type="button" class="btn btn-huge btn-warning" onclick="play('ming2');">míng</button>
				<button type="button" class="btn btn-huge btn-primary" onclick="play('ri4');">rì</button>
			</div>
		</div>
		<div class="box">
			<div>O'clock</div><div class="character">点钟</div><div class="btn-group btn-group-lg">
				<button type="button" class="btn btn-huge btn-success" onclick="play('dian3');">diǎn</button>
			</div>
		</div>
		<div class="box">
			<div>Time</div><div class="character">候</div><div class="btn-group btn-group-lg">
				<button type="button" class="btn btn-huge btn-primary" onclick="play('hou4');">hòu</button>
			</div>
		</div>
	</div>
<script src="js/chinese.js"></script>
<script>$("#breadcrumb").html("&#9986;&nbsp;basics&nbsp;基本 > &#128197;&nbsp;dates&nbsp;日期 >");</script>
</body>
</html>
