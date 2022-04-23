<!DOCTYPE html>
<html>


<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>







<!-- JQUERY -->
<script type="text/javascript" language="javascript" src="jquery/jquery.js"></script>

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

td, th {
  border: 1px solid #f1f1f1;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #f1f1f1;
}



textarea {
  resize: none;
}

</style>
</head>



<body>



<h1>Parse Mutiple XML Files into MYSQL  and Reset Files from Archive</h1>


<center>
<input type="button" id="clickMe"  value="Import" onclick="parseXMLFiles();" />
</center>

<center>
<input type="button" id="clickMe"  value="Reset " onclick="resetXMLFiles();" />
</center>








<center><img src="img\ss.png" alt="device" width="450" height="150"></center>



<div class="container-fluid">
  
  
  
  <div class="container-fluid">
  
    <div class="row">
      <div class="col-sm-6" style="background-color:#e6ffff;">50%
			
		<p>Instructions</p>
			<textarea id="w3review" name="w3review" rows="32" cols="110">

				1. Ensure db and table are created in mysql using the script in the mysqlscript folder
				2. Files need to be in the right directory
				3. Run using the Import button
				   i. Loops through one by one using Simplexml_loadFile class
				   ii. Insert into mysql using sql query
				   iii. Files moved into Archive directory inthe relevant dated folder
				   iv.  A log file is updated

				4. Return files to root directory via the Reset button

				FILES:
				index.php
					parseXMLFiles.php
					resetFiles.php

				Log.txt

				books1.xml
				books2.xml
				books3.xml

				FOLDER:
				Archive
					2021-02-21
						books1.xml
						books2.xml
						books3.xml
						
			</textarea>
	
	  </div>
	  
	  
	  
	  
      <div class="col-sm-6" style="background-color:#f1f1f1;">50%
		<center>
			<p>Sample XML  file</p>
				<textarea id="w3review" name="w3review" rows="28" cols="75">
					 <?xml version="1.0" encoding="utf-8"?>
					<bookstore>
					  <book category="COOKING">
						<title lang="en">Everyday Italian</title>
						<author>Giada De Laurentiis</author>
						<year>2005</year>
						<price>30.00</price>
					  </book>
					  <book category="CHILDREN">
						<title lang="en">Harry Potter</title>
						<author>J K. Rowling</author>
						<year>2005</year>
						<price>29.99</price>
					  </book>
					  <book category="WEB">
						<title lang="en-us">XQuery Kick Start</title>
						<author>James McGovern</author>
						<year>2003</year>
						<price>49.99</price>
					  </book>
					  <book category="WEB">
						<title lang="en-us">Learning XML</title>
						<author>Erik T. Ray</author>
						<year>2003</year>
						<price>39.95</price>
					  </book>
					</bookstore>
				</textarea>
		</center>
	 
	  
	  </div>
    </div>
    <br>
    
  </div>
</div>












<script>  
   
 function parseXMLFiles() {
      $.ajax({
           type: "POST",
           url: 'parseXMLFiles.php',
           data:{action:'call_this'},
           success:function(html) {
             //alert(html);
           }

      });
 }	

</script>



<script>  
	  
 function resetXMLFiles() {
      $.ajax({
           type: "POST",
           url: 'resetFiles.php',
           data:{action:'call_this'},
           success:function(html) {
             //alert(html);
           }

      });
 }				  
   

</script>