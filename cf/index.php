<?php
$seed = time();
$num = rand(1,172);
$picpath = "https://phi-api.pages.dev/img/".$num.".png";
die(header("Location: $picpath"));
?>
