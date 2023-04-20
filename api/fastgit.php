<?php
$seed = time();
$num = rand(1,172);
$picpath = "https://raw.fgit.ml/hatsuyuki2333/phi-api/resource/img/".$num.".png";
die(header("Location: $picpath"));
?>
