<!DOCTYPE HTML>
<html>
<?php
  function runMyFunction() {
    echo 'I just ran a php function';
  }
  
  function runMyFunction2() {
    echo 'I just ran a php function2';
  }

  if (isset($_GET['world'])) {
    runMyFunction();
  }
  
 if (isset($_GET['call_this'])) {
    runMyFunction2();
  }
	
?>

world there!
<a href='index.php?world=true'>Run PHP Function</a>

<a href='index.php?call_this=true'>Run PHP Function2</a>

</html>