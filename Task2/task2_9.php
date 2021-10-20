Program to calculate the time given in Seconds into hours, minutes and seconds.
<br>
<hr>
<?php
$seconds = 102055;

$secs = $seconds % 60;
$hrs = $seconds / 60;
$mins = $hrs % 60;

$hrs = $hrs / 60;

echo ("HH:MM:SS------ " . (int)$hrs . ":" .(int)$mins . ":" .(int)$secs);

?>