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
<audio controls="" id="jia1"><source src="audio/jia1.mp3" type="audio/mpeg">No audio</audio>
<?php include 'navbar.html'; ?>
<div class="container-fluid">
	<header><h2>The 4 tones of Mandarin</h2></header>
	<div class="clearfix"></div>
	<div class="box"><div>mother</div><div><button type="button" class="btn btn-huge btn-danger" onclick="play('ma1');"><div class="character">媽</div>mā 1</button></div></div>
	<div class="box"><div>hemp</div><div><button type="button" class="btn btn-huge btn-warning" onclick="play('ma2');"><div class="character">麻</div>má 2</button></div></div>
	<div class="box"><div>horse</div><div><button type="button" class="btn btn-huge btn-success" onclick="play('ma3');"><div class="character">馬</div>mǎ 3</button></div></div>
	<div class="box"><div>scold</div><div><button type="button" class="btn btn-huge btn-primary" onclick="play('ma4');"><div class="character">罵</div>mà 4</button></div></div>
	<div class="clearfix">&nbsp;</div>
	<header><h2>Play any Pinyin</h2></header>
	Enter pinyin: <input type="text" id="pinyin" maxlength="5">
	<div class="clearfix"></div>
	<div class="box"><button type="button" id="1" class="btn btn-huge btn-danger trigger" href="#">1</button></div>
	<div class="box"><button type="button" id="2" class="btn btn-huge btn-warning trigger" href="#">2</button></div>
	<div class="box"><button type="button" id="3" class="btn btn-huge btn-success trigger" href="#">3</button></div>
	<div class="box"><button type="button" id="4" class="btn btn-huge btn-primary trigger" href="#">4</button></div>
</div>
<div id="audio_player_container"></div>
<script src="js/chinese.js"></script>
<script>$("#breadcrumb").html("&#127968;&nbsp;home&nbsp;<button type='button' class='btn btn-nav btn-danger' onclick='play(&#39;jia1&#39;);'>家 jiā</button>");

$(".trigger").on("click", function(e) {
   e.preventDefault();
   var audio_markup = '<audio id="audio_player" controls preload="auto">';
   audio_markup += '<source id="audio_src" src="audio/'+$("#pinyin").val()+this.id+'.mp3" type="audio/mpeg">';
   audio_markup += '</audio>';
   $("#audio_player_container").html(audio_markup);
   var player = $("#audio_player"); 
   player[0].load();
   player[0].play();
});
</script>
</body>
</html>
