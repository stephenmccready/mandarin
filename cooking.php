<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>cooking 餐饮</title>
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
<audio controls="" id="peng1"><source src="audio/peng1.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="ren4"><source src="audio/ren4.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="kao3"><source src="audio/kao3.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="chao3"><source src="audio/chao3.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="jiang4"><source src="audio/jiang4.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="you2"><source src="audio/you2.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<audio controls="" id="jian1"><source src="audio/jian1.mp3" preload="metadata" type="audio/mpeg">No audio</audio>
<?php include 'navbar.html'; ?>
	<div class="container-fluid">
		<div class="box">
			<div>stir fry,saute</div><button type="button" class="btn btn-huge btn-success" onclick="play('kao3');"><div class="character">炒</div>kǎo</button>
		</div>
		<div class="box">
			<div>fried</div><button type="button" class="btn btn-huge btn-danger" onclick="play('jian1');"><div class="character">炸</div>jiān</button>
		</div>
		<div class="box">
			<div>bake,roast,toast</div><button type="button" class="btn btn-huge btn-success" onclick="play('chao3');"><div class="character">烤</div>chǎo</button>
		</div>
		<div class="box">
			<div>sauce,paste,jam</div><button type="button" class="btn btn-huge btn-primary" onclick="play('jiang4');"><div class="character">酱</div>jiàng</button>
		</div>
		<div class="box">
			<div>soy sauce</div><div class="btn-group btn-group-lg">
				<button type="button" class="btn btn-huge btn-primary" onclick="play('jiang4');"><div class="character">酱</div>jiàng</button>
				<button type="button" class="btn btn-huge btn-warning" onclick="play('you2');"><div class="character">油</div>yóu</button>
			</div>
		 </div>
	</div>
<script src="js/chinese.js"></script>
<script>$("#breadcrumb").html("&#127835;&nbsp;food&nbsp;<div class='btn-group'><button type='button' class='btn btn-nav btn-danger' onclick='play(&#39;can1&#39;);'>餐 cān</button><button type='button' class='btn btn-nav btn-primary' onclick='play(&#39;yin4&#39;);'>饮 yǐn</button>&nbsp;&#9658&nbsp;</div> &#127859;&nbsp;cooking&nbsp;<div class='btn-group'><button type='button' class='btn btn-nav btn-danger' onclick='play(&#39;peng1&#39;);'>烹 pēng</button><button type='button' class='btn btn-nav btn-primary' onclick='play(&#39;ren4&#39;);'>饪 rèn</button></div>");</script>
</body>
</html>
