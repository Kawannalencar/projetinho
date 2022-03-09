<?php
echo"<b>CONSUMO MÉDIO</B><br>";
$KM=$_GET["KM"];
$L=$_GET["L"];
$CM=$KM/$L;
echo" <b>O consumo mèdio foi:</b> $CM km/l<br><br> ";
?>