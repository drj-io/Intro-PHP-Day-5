<?php

$filename = "file.log";
$file = fopen($filename, 'r');

while(!feof($file)){

  $data = fgetc($file). "\r\n";
  print $data;
  // if(feof($file)){
  //   fseek($file, 0);
  // }
}

fclose($file);


$filename = "info.txt";


$s ="ljdfsklfsajlfksdjflsdkafjslfjdslkfdsjf";
$file = fopen($filename, 'a');
fwrite($file, $s, 2);

fclose($file);








 ?>
