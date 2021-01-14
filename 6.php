<?php
print "<h3>REFRESH THE PAGE</h3>";
$name = "sai.txt";
$file = fopen($name,"r");
$hits = fscanf($file,"%d");
fclose($file);
$hits[0]++;
$file = fopen($name,"w");
fprintf($file,"%d",$hits[0]);
fclose($file);
print "Total no.of views :".$hits[0];
?>