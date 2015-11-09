



<?php
	require('../header.php');
?>


<script type="text/javascript" src="player/js/hdwplayer.js"></script>
<style>


#iframe1
            {
                height:   100%;
                left:     0px;
                position: absolute;
                top:      0px;
                width:    100%;
            }
</style>
</head>
<body><div id="contents">
<p><h2> Live Streaming Of GUSTO 2015 </h2>
<div id="player"></div></div>
<script>
hdwplayer({ 
	id        : 'player',
	swf       : 'player/player.swf',
	width     : '705',
	height    : '400',
        type      : 'rtmp',
        streamer  : 'rtmp://172.22.12.165/live/',
        video     : 'livestream',
        autoStart : 'true'
});</script>



<?php
require('../footer.php');
?>