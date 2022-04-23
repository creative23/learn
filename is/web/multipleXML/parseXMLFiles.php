<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myxml";




$files = glob("*xml");


$number = 0;

$my_category = "";
$language = "";
$bk_title = "";
$author = "";
$year = "";
$price = "";
$filename = "";

$date =  date("Y-m-d") ;

$mylogfile = "";

$NumberofFilesImported = "";




if (is_array($files)) {

     foreach($files as $filename) {
        $xml_file = file_get_contents($filename, FILE_TEXT);
        
		
		$xml=simplexml_load_file($filename) or die("Error: Cannot create object");
		
		echo " <br>";
		echo " <br>";
		
		foreach($xml->children() as $books) {
			
			echo $my_category =	 $xml->book[$number]['category']  ;
			echo " ";
			echo $language = $xml->book[$number]->title['lang'] ; 
			echo " ";
			echo $bk_title = $books->title ;
			echo " ";			
			echo $author =  $books->author ; 
			echo " ";
			echo $year = $books->year;   
			echo " ";
			echo $price = $books->price;
			echo " ";
			
			
			
			
		//CONNECT, CHECK, INSERT, CLOSE
			
		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		// Check connection
		if (!$conn) {
		  die("Connection failed: " . mysqli_connect_error());
		}

		//echo "Connected successfully";
		echo " <br>";
		
	  
	  //insert into db
	  $sql = "INSERT INTO xmlTable (Category, Language, Title, Author, Year, Price, Filename) 
		VALUES ('" . $my_category . "','" . $language . "','" . $bk_title . "','" . $author . "','" . $year . "','" . $price . "','" . $filename . "'    )";

			if ($conn->query($sql) === TRUE) {
			echo "New record created successfully";
				  echo " <br>";
				} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
				  echo " <br>";
				}

			$conn->close();
	  
		
			
			
			$number++;	
			echo " <br>";
			
			
		}
	  
	  
	 
	  //function insertDB($category, $language, $title, $author, $year, $price, $filename) {
	 // }

	  
	  
	  $number = 0;
	  echo $filename. "<br>";
	  echo " <br>";
	  
	  
	  //check if folder for today exists 
	  if (!file_exists("archive/" . $date )) {
			mkdir("archive/" . $date , 0777, true);
			echo "Folder Created";


		}
		
		
		//check for duplicates, 
		//then, move files
	  if (file_exists("archive/" . $date . '/' . $filename )) {
			
			echo "Duplicate File". " " . $filename;
	  }	
		else{
			
			rename($filename, 'archive/' .$date . '/' . $filename);
			//copy($filename, 'archive/' .$date . '/' . $filename);
		}
	  
	  
	  
	  //update log file
	  $mylogfile = fopen("logs.txt", "a") or die("Unable to open file!");
		$txt =  $my_category . "user id : " . $language . "date: ". $date;
		fwrite($mylogfile, "\n". $txt);
		fclose($mylogfile);
	  
	  

     }

}


		//SQL
		


	




?>
