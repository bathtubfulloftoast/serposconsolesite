<?php
$test = 0;
?>
<head>
<!---Discord embed--->
<meta property="og:title" content="Quartz's' Console" />
<meta property="og:type" content="website" />
<meta property="og:description" content="Quartz's Console is a modpack that aims to recreate Minecraft Legacy Console in Java." />
<meta name="theme-color" content="#bdbdbd" />

<title>Quartz's Console</title>

        <link rel="icon" href="favicon.ico">


<link rel="stylesheet" href="style.css">
<link rel="preload" as="image" href="media/bootonhover.png">
<link rel="preload" as="image" href="media/booton.png">
<link rel="preload" as="audio" href="media/hover.mp3">
<link rel="preload" as="audio" href="media/click.mp3">


<script src="sound.js"></script>

<audio id="hover">
		<source src="media/hover.mp3" type="audio/mpeg">
	</audio>

	<audio id="click">
		<source src="media/click.mp3" type="audio/mpeg">
	</audio>

</head>


<?php if (isset($_GET['about'])): $test = 1; ?>

<body>
<div id="center-screen">
<div class="boxteal">
<h1 style="font-family:minecraf-bold;">About Quartz's Console</h1>
<br>

<h2 class="about">Quartz's Console [Currently in beta]</h2>
<br>
<h3 class="about">Modpack by <a target="blank" href="https://www.planetminecraft.com/member/quartzmaven/" class="link">Quartzmaven</a><img src="media/Quartzmaven.png" width="20"><br>
Original modpack by <a target="blank" href="https://modrinth.com/modpack/console-idated" class="link">N00B</a><img src="media/N00B.png" width="20"><br>Website by <a target="blank" href=" http://novassite.net:90/misc/Carrd"class="link">bathtubfulloftoast</a><img src="media/bathtubfulloftoast.png" width="20"><br> Design inspired by <a target="blank" href="https://lemsite.derpbox.xyz/" class="link">DBTDerpbox</a><img src="media/DBTDerpbox.png" width="20"><br>
Extra button icons made by <a target="blank" href="https://www.youtube.com/@Laffy_Taffy" class="link">LaffyTaffy</a><img src="media/LaffyTaffy.png" width="20"><br><br>
Generic icons taken from <a target="blank" href="https://mcpedl.com/user/agentmindstorm/" class="link">AgentMindStorm</a>'s <img src="media/AgentMindStorm.png" width="20"><br><a target="blank" href="https://mcpedl.com/controller-tooptip-selector/" class="link">Controller Tooltip Selector Pack.</a> (Bedrock Addon)<br><br>
Developer Art+ by <a target="blank" href="https://www.planetminecraft.com/member/shmoobalizer/" class="link">shmoobalizer</a><img src="media/shmoobalizer.png" width="20"><br><br>Original console UI design by <b> Julie "Danger" Kennedy</b><br><br> <b style="color:#a80000">WARNING:</b><span style="color:fc5454">
This modpack is currently work-in-progress! Expect some bugs and issues.
</span><br><br>You can read the Gitbook <a target="blank"  href="https://qconsoles-organization.gitbook.io/quartzs-console-wiki/" class="link">here</a>.</h3>



</div>

</body>


<?php endif ?>

<?php if (isset($_GET['download'])): $test = 1; ?>

<body>
<div id="center-screen">
<div class="box">
<h1 style="font-family:minecraf-bold;">Download Quartz's Console</h1>
<h2 class="about">
<b style="color:#a80000">Requirements</b><br><span style="color:fc5454">
1080p fullscreen, at least 16GB of RAM, and PrismLauncher
</span>
</h2>
<br>
<div class="list">
<?php

$files = scandir('downloads/', SCANDIR_SORT_DESCENDING);
$newest_file = $files[0];

echo '<a class="latest" href="downloads/'.$newest_file.'" download="'.$newest_file.'" onmouseover="hoverSound()" onclick="clickSound()" >Latest</a>';

?>
</div>
<br>
<div class="list">
<?php
$dir    = 'downloads/';

$flies = array_values(array_diff(scandir($dir), array('..', '.')));

for ($i = 0; $i < count($flies); $i++) {
	$nozip = str_replace('.zip', '', $flies[$i]);
    $shit = '<a class="mcbutton" href="downloads/' . $flies[$i] . '" onmouseover="hoverSound()" onclick="clickSound()" >'. $nozip .'</a><br><br>';



echo $shit;


}



?>
</div>
</div>

</body>


<?php endif ?>



<?php if ($test == 0): ?>

<body>
<div id="center-screen">
<div class="box">
<img id="meanie" src="media/logo.png">
<br>
<br>
<!--<iframe id="meanie" width="560" height="315" src="https://www.youtube-nocookie.com/embed/rvlwWiskcLk?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>-->
<br><br>

<img class="gallery" src="media/gallery.png">




<br><br>
<a href="?download" class="mcbutton" onmouseover="hoverSound()" onclick="clickSound()" >Downloads</a>
<a href="?about" class="mcbutton" onmouseover="hoverSound()" onclick="clickSound()" >About</a>
</div>
</body>
<?php endif ?>



