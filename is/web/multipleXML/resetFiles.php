<p> Moves XML files back <u>xml reset</u></p>

<?php


$date =  date("Y-m-d") ;
$files = "";

$files = scandir("archive/" . $date . '/' );
 
$newfolder = "";
$oldfolder = "archive/";
  
  foreach($files as $fname) {
      if($fname != '.' && $fname != '..') {
          //rename($oldfolder, $newfolder);
		  rename($oldfolder . $date . "/$fname"  , $newfolder . "$fname" );
		 
		  echo $fname;
		  echo " <br>";
      }
  }
?>

