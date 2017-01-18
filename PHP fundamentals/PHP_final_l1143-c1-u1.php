<?php



$towns = array("Athens","Rome","Chicago","Cleveland","Miami","Portland","Oklahoma","Egypt","Moscow" ,"Saint_Petersburg");

$temperature;
$towns[0].$temperature= array("January" => 30,"February "=> 28,"March" => 32,
    "April "=> 31,"May" => 33,"June" =>32,"July" => 35,"August "=> 36,
  "September "=> 27,"October "=> 20,"November" => 18,"December" => 14
);









foreach ($temperature as $x => $x_value ){
    echo "To μήνα ".  $x ." η μέγιστη θερμοκρασία της πόλης " .$towns[0] ." ήταν ". $x_value;
   echo "<br>";
}



?>