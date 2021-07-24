<?php
include "VideoStream.php";
$fn=$_GET['fn'];
$stream = new VideoStream("./".$fn);
$stream->start();
exit;
?>