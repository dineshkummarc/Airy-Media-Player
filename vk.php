﻿<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>Yet Another Music Player</title>
<meta name="description" content="Online Music Player that brings top tracks of all performers and artists in the world to your computer. Mashup of Last.fm and VK social services allows for free music search and listening." /> 
<meta name="keywords" content="internet,media,online player,media player,internet player,internet media,free music,music,songs,top 100,top songs,radio charts,radio top,downloads,movies,streaming,flicks,tv shows,episodes,lastfm,discogs,releases,vinyls,labels,radio,charts,streaming,youtube,rutube,vkontakte,facebook,video,audio,remixes,adobe,air,airy" />
<link rel="stylesheet" href="lib/jplayer/css/jplayer.css" type="text/css">
<link rel="stylesheet" href="lib/jqueryui/darkness.css" type="text/css">
<link rel="stylesheet" href="assets/global.css" type="text/css">
<link rel="stylesheet" href="assets/social.css" type="text/css">
<link rel="stylesheet/less" href="assets/css3.less" type="text/css">

<script src="http://cdn.airy.me/jquery.js"></script>
<script src="http://cdn.airy.me/modernizr.js"></script>
<script src="http://vkontakte.ru/js/api/openapi.js"></script>
<script src="http://cdn.airy.me/less.js"></script>
<script src="https://github.com/salesking/jquery-dragout/raw/master/jquery-dragout.js"></script>
<script src="lib/php.js"></script>
</head>
<body>
<div class="wrap audio">
		
	<div class="search">
		<input type="text" class="query" placeholder="вводите имя исполнителя">
	</div>
	<div class="live"></div>
	
	<div class="artists"></div>
	<div class="player">
		<div id="jp"></div>
		<div class="jp-player">
			<div id="jp-interface">
				<ul class="jp-controls">
					<li><a href="#" class="jp-play" tabindex="1">play</a></li>
					<li><a href="#" class="jp-pause" tabindex="1">pause</a></li>
					<li><a href="#" class="jp-stop" tabindex="1">stop</a></li>
					<li><a href="#" class="jp-mute" tabindex="1">min volume</a></li>
					<li><a href="#" class="jp-unmute" tabindex="1">max volume</a></li>
				</ul>
				<div class="jp-current-time"></div>
				<div class="jp-progress">
					<div id="jplayer_load_bar" class="jp-seek-bar">
						<div id="jplayer_play_bar" class="jp-play-bar"></div>
					</div>
				</div>
				<div class="jp-duration"></div>
				<div id="jplayer_volume_bar" class="jp-volume-bar">
					<div id="jplayer_volume_bar_value" class="jp-volume-bar-value"></div>
				</div>
				
			</div>
		</div>
		<div id="accordion">
			<h3>Результаты</h3>
	    <div class="results"></div>
	
	    <h3>Плейлист</h3>
		  <div id="playlist">
				<div class="list">
					
				</div>			
			</div>
		</div>
	</div>
</div>
<div id="vk_api_transport"></div>
<div id="vk-login" class="hide">
	<div class="container" style="text-align:center; padding: 30px 80px;">
		<button onclick="authVK()" style="padding:10px">НАЧАТЬ</button>
	</div>
</div>
<script src="lib/flowplayer/flowplayer.js"></script>
<script src="lib/jplayer/jplayer.js"></script>
<script src="lib/jqueryui/jqueryui.js"></script>
<script src="assets/AudioSearch.js"></script>
<script src="assets/Playlist.js"></script>
<script src="assets/utils.js"></script>
<script src="assets/init.js"></script>
<!--[if IE]><script src="assets/ie.js"></script><![endif]-->
</body>
</html>
