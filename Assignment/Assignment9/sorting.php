<?php
$age = array("ram"=>"35", "shyam"=>"37", "hari"=>"43");
krsort($age);
arsort($age);        

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>