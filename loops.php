<!DOCTYPE html>
<html>
<body>

<?php
$arrInt = array(1,2,4,5,12,15,22,24,31);
$increment = 1;
for($i = 0; $i < sizeOf($arrInt); $i+=$increment){
  if($arrInt[$i] % 2 == 0){
  	echo $arrInt[$i];
    echo "<br>\n";
  }
}
?>

</body>
</html>
