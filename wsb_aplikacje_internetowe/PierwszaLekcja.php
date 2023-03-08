<?php
$first_name = "Filip";
$last_name = "Nowicki";

    echo "Imię i nazwisko: $last_name $first_name<br>";
    echo 'Imię i nazwisko: $last_name $first_name<br>';

    $DATA = <<< DATA
    <hr>
    imie: $first_name<br>
    nazwisko: $last_name
    <br>
    DATA;
    echo $DATA;

 

  $x = 1;
  $y = 1.0;
  echo gettype($x);//integer
  echo gettype($y);//double

  if  ($x == $y){
    echo "Równe";

  }
  else{
    echo "Różne";
  }


  if  ($x == $y){
    echo "Identyczne";

  }
  else{
    echo "Nieidentyczne";
  }




?>