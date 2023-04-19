<?php
$seed = time();
$num = rand(1,172);
$picpath = "https://cdn.jsdelivr.net/hatsuyuki2333/phimg/api/img/".$num.".png";
die(header("Location: $picpath"));
?>
