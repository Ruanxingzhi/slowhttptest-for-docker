<?php

$place=rand();

$cmd = "slowhttptest -c 65535 -l 600 -u ".$_GET['url']." -X -g -o reports/".$place." >/tmp/tmp_test";
if($_GET['time']) $cmd = "slowhttptest -c 65535 -l ".$_GET['time']." -u ".$_GET['url']." -X -g -o reports/".$place." >/tmp/tmp_test";

system($cmd,$flag);

if($flag!=0)
	echo "[Error] Please check your input.<br>\"http://\" is required.";
else echo "Attack finished.<br>","<a href=reports/".$place.".html>Report</a>";
?>
