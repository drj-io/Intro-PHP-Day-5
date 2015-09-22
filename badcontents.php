<form method="POST">
<input placeholder = "what kind file do you want to get" name = "filename" />
<input type="submit" value="go">
</form>







<?php
if(isset($_POST['filename'])){

  $f = "ls ". $_POST['filename'] . " ";

  print escapeshellarg($f);

  print "<pre>". shell_exec("ffmpeg ". escapeshellarg($f))."</pre>";

}
//print file_get_contents($_POST['filename']);



 ?>
