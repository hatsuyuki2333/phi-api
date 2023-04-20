<?php
$seed = time();
$num = rand(1,172);
$picpath = "https://ghproxy.com/https://raw.githubusercontent.com/hatsuyuki2333/phi-api/resource/img//".$num.".png";
die(header("Location: $picpath"));
?>
