<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" content=""/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>&#9925; seasons 季节</title>
	<link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<!--[if IE]>
	<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="css/chinese.css">
</head>
<body>
<audio controls="" id="chun1"><source src="audio/chun1.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="xia4"><source src="audio/xia4.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="qiu1"><source src="audio/qiu1.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="dong1"><source src="audio/dong1.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<?php include 'navbar.html'; ?>
<div class="container-fluid">
	<div class="box">
		<div>spring</div><div class="character">春</div><div class="btn-group btn-group-lg">
			<button type="button" class="btn btn-huge btn-danger" onclick="play('chun1');">chūn</button>
		</div>
	</div>
	<div class="box">
		<div>summer</div><div class="character">夏</div><div class="btn-group btn-group-lg">
			<button type="button" class="btn btn-huge btn-primary" onclick="play('xia4');">xià</button>
		</div>
	</div>
	<div class="box">
		<div>autumn</div><div class="character">秋</div><div class="btn-group btn-group-lg">
			<button type="button" class="btn btn-huge btn-danger" onclick="play('qiu1');">qiū</button>
		</div>
	</div>
	<div class="box">
		<div>winter</div><div class="character">冬</div><div class="btn-group btn-group-lg">
			<button type="button" class="btn btn-huge btn-danger" onclick="play('dong1');">dōng</button>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="box">
		<div>the four seasons</div><div class="character">春夏秋冬</div><div class="btn-group btn-group-lg">
			<button type="button" class="btn btn-huge btn-danger" onclick="play('chun1');">chūn</button>
			<button type="button" class="btn btn-huge btn-primary" onclick="play('xia4');">xià</button>
			<button type="button" class="btn btn-huge btn-danger" onclick="play('qiu1');">qiū</button>
			<button type="button" class="btn btn-huge btn-danger" onclick="play('dong1');">dōng</button>
		</div>
	</div>
</div>
<script src="js/chinese.js"></script>
<script>$("#breadcrumb").html("&#128507;&nbsp;geography&nbsp;地理 > &#9808;&nbsp;seasons&nbsp;季节 >");</script>
</body>
</html>
