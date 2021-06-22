<?php
$myfile = fopen("newfile.txt","w") or die ("Unable to open file!");
$txt="Sajjad Hossain\n";
fwrite($myfile,$txt);
$txt="Sajjad Hossain\n";
fwrite($myfile,$txt);
fclose($myfile)
?>
