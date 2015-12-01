<?php
print "<h1>".date("F")."</h1>";
print "Today: ".date("Y/m/d");
print "<br>";
$arrayweek=array("日", "月", "火", "水", "木", "金", "土");
print "<table border=1><tr>";
foreach($arrayweek as $value){
	print "<th>".$value."</th>";
}
print "</tr><tr>";
for($i=0;$i<date("t");$i++){
	$week_number=date("w", mktime(0,0,0, date("n"), $i+1, date("Y")));
	if($i==0){
		Print_Calendar::space_cell($week_number);
	}
	if($week_number==0&&$i!=0){
		print "<tr>";
	}
	print "<td>".($i+1)."</td>";
	if($i+1==date("t")){
		Print_Calendar::space_cell(6-$week_number);
		print "</tr>";
	}elseif($week_number==6){
		print "</tr>";
	}
}
print "</table>";

class Print_Calendar{
	function space_cell($count){
		if($count!=0){
			for($i=0; $i<$count; $i++){
				print "<td></td>";
}}}}
