<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mandarin 普通话</title>
	<link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<!--[if IE]>
	<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="css/chinese.css">
</head>
<body>
<audio controls="" id="ma1"><source src="audio/ma1.mp3" type="audio/mpeg">No audio</audio>
<audio controls="" id="ma2"><source src="audio/ma2.mp3" type="audio/mpeg">No audio</audio>
<audio controls="" id="ma3"><source src="audio/ma3.mp3" type="audio/mpeg">No audio</audio>
<audio controls="" id="ma4"><source src="audio/ma4.mp3" type="audio/mpeg">No audio</audio>
<?php include 'navbar.html'; ?>
<div class="container-fluid">
	<div class="box"><div>mother</div><div class="character">媽</div><div><button type="button" class="btn btn-huge btn-danger" onclick="play('ma1');">mā 1</button></div></div>
	<div class="box"><div>hemp</div><div class="character">麻</div><div><button type="button" class="btn btn-huge btn-warning" onclick="play('ma2');">má 2</button></div></div>
	<div class="box"><div>horse</div><div class="character">馬</div><div><button type="button" class="btn btn-huge btn-success" onclick="play('ma3');">mǎ 3</button></div></div>
	<div class="box"><div>scold</div><div class="character">罵</div><div><button type="button" class="btn btn-huge btn-primary" onclick="play('ma4');">mà 4</button></div></div>
</div>
<script src="js/chinese.js"></script>
<script>$("#breadcrumb").html("&#127968;&nbsp;home&nbsp;家");</script>
</body>
</html>
