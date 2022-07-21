<?php
$file = fopen("loggeneratortimes.txt","r+");
$logtimes = fread($file,filesize("loggeneratortimes.txt"));
fclose($file);
$file = fopen("loggeneratortimes.txt","w");
fwrite($file,$logtimes+1);
fclose($file);
$command = $_POST['hologram_msg'];
$command = str_replace("§","\\\u00a7",$command);
echo '<html>
  <head>
    <title>
      哈哈指令團漂浮文字產生器
    </title>
  </head>
  </body>
<p><img style="float: left;" src="https://drive.google.com/uc?export=view&amp;id=1wxRWupm6qH-QvlM-YSKnCzklu7JloIHg" alt="" /> <img style="float: right;" src="https://drive.google.com/uc?export=view&amp;id=1Yjqdhs2am_6doHMH6kBB_iQUFhxJMqtx" alt="" /><br /><br /><br /></p>
<hr />
<p>以下是產生出來的指令：</p>';
echo "/summon area_effect_cloud ~ ~ ~ {Tags:[\"hologram\"],Invulnerable:1,Duration:2147483647,Age:-2147483647,Particle:\"block air\",CustomName:'\"".$command."\"',CustomNameVisible:1}<br><br><br>";
echo "你是第".$logtimes.'個使用這個產生工具的人<br><p><a href="index.php"><span style="color: #3366ff;"><u>點我回到主頁面</u></span></a></p>';
echo '
</body>
</html>';
?>