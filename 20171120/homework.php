<?php
$data=array(
   array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)   
);
echo "<table border=1>";
for($i=0;$i<count($data);$i++)
  { 
   for($j=0;$j<count($data[$i]);$j++)
   {
    echo "<td>";
    echo $data[$i][$j];
   }
    echo "<tr>" ;
  }
echo "<table border=1>";
foreach($data as $v1){
  foreach($v1 as $v2){
    echo "<td>";
    echo "$v2";
   }
    echo "<tr>";
  }
function Row($row){
  $r=join("",array_map("Col",$row));
  return"<tr>$r</tr>";
}
function Col($col){
  return "<td>$col</td>";
}
$v3=join("",array_map("Row",$data));
echo "$v3";
?>