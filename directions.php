<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" content=""/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>&#9808; directions</title>
	<link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<!--[if IE]>
	<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="css/chinese.css">
</head>
<body>
<audio controls="" id="nan2"><source src="audio/nan2.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="bei3"><source src="audio/bei3.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="xi1"><source src="audio/xi1.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="dong1"><source src="audio/dong1.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="zuo3"><source src="audio/zuo3.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="zhi2"><source src="audio/zhi2.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="dui4"><source src="audio/dui4.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="shang4"><source src="audio/shang4.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="xia4"><source src="audio/xia4.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<?php include 'navbar.html'; ?>
<div class="container-fluid">
	<div class="clearfix directions">
	<table class="compass">
		<tr>
			<td rowspan="2">
				<div class="box">
					<div>west</div><div class="character">&nbsp;&nbsp;西&nbsp;&nbsp;</div><div class="btn-group btn-group-lg">
						<button type="button" class="btn btn-huge btn-danger" onclick="play('xi1');">&nbsp;&nbsp;xī&nbsp;&nbsp;</button>
					</div>
				</div>
			</td>
			<td>
				<div class="box">
					<div>north</div><div class="character">北</div><div class="btn-group btn-group-lg">
						<button type="button" class="btn btn-huge btn-success" onclick="play('bei3');">běi</button>
					</div>
				</div>
			</td>
			<td rowspan="2">
				<div class="box">
					<div>east</div><div class="character">東 (东)</div><div class="btn-group btn-group-lg">
						<button type="button" class="btn btn-huge btn-danger" onclick="play('dong1');">dōng</button>
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="box">
					<div>south</div><div class="character">南</div><div class="btn-group btn-group-lg">
						<button type="button" class="btn btn-huge btn-warning" onclick="play('nan2');">nán</button>
					</div>
				</div>
			</td>
		</tr>
	</table>
	</div>
	<div class="clearfix"></div>
	<div class="clearfix directions">
	<table class="compass">
		<tr>
			<td>
				<div class="box">
					<div>left</div><div class="character">左</div><div class="btn-group btn-group-lg">
						<button type="button" class="btn btn-huge btn-success" onclick="play('zuo3');">zuǒ</button>
					</div>
				</div>
			</td>
			<td>
				<div class="box">
					<div>straight</div><div class="character">直</div><div class="btn-group btn-group-lg">
						<button type="button" class="btn btn-huge btn-warning" onclick="play('zhi2');">zhí</button>
					</div>
				</div>
			</td>
			<td>
				<div class="box">
					<div>right</div><div class="character">北</div><div class="btn-group btn-group-lg">
						<button type="button" class="btn btn-huge btn-primary" onclick="play('dui4');">duì</button>
					</div>
				</div>
			</td>
		</tr>
	</table>
	</div>
	<div class="clearfix"></div>
	<div class="box">
		<div>up</div><div class="character">上</div><div class="btn-group btn-group-lg">
			<button type="button" class="btn btn-huge btn-primary" onclick="play('shang4');">shàng</button>
		</div>
	</div>
	<div class="box">
		<div>down</div><div class="character">下</div><div class="btn-group btn-group-lg">
			<button type="button" class="btn btn-huge btn-primary" onclick="play('xia4');">xià</button>
		</div>
	</div>
</div>
<script src="js/chinese.js"></script>
<script>$("#breadcrumb").html("&#128507;&nbsp;geography&nbsp;地理 > &#9808;&nbsp;directions&nbsp;数 >");</script>
</body>
</html>
