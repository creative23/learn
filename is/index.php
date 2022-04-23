<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Arial, sans-serif;
}

/* Style the header */
.header {
  grid-area: header;
  background-color: #f1f1f1;
  padding: 30px;
  text-align: center;
  font-size: 35px;
}

/* The grid container */
.grid-container {
  display: grid;
  grid-template-areas: 
    'header header header header header header' 
    'left middle middle middle middle right' 
    'footer footer footer footer footer footer';
  /* grid-column-gap: 10px; - if you want gap between the columns */
} 

.left,
.middle,
.right {
  padding: 10px;
  height: 550px;
}

/* Style the left column */
.left {
  grid-area: left;
}

/* Style the middle column */
.middle {
  grid-area: middle;
}

/* Style the right column */
.right {
  grid-area: right;
}

/* Style the footer */
.footer {
  grid-area: footer;
  background-color: #f1f1f1;
  padding: 10px;
  text-align: center;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
  .grid-container  {
    grid-template-areas: 
      'header header header header header header' 
      'left left left left left left' 
      'middle middle middle middle middle middle' 
      'right right right right right right' 
      'footer footer footer footer footer footer';
  }
}







</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
</div>

<h2>Useful Stuff</h2>


<div class="grid-container">
  <div class="header">
    
<div class="topnav">
  <a class="active" href="#home">Web</a>
  <a href="networking\index.php">Networking</a>
  <a href="python\index.php">Python</a>
  <a href="linux\index.php">Linux</a>
  <a href="android\index.php">Android</a>
  <a href="tools\index.php">Tools</a>
  <a href="net\index.php">.Net</a>
  <a href="databases\index.php">Databases</a>
  <a href="erp\index.php">ERP</a>
  <a href="edi\index.php">EDI</a>
 
 
</div>
	<h2>Web</h2>
	
  </div>
  
  
  
  <div class="left" style="background-color:#aaa;">Column</div>
  
  
  <div class="middle" style="background-color:#bbb;">

<table>
  <tr>
    <th>Topic</th>
    <th>Link</th>
    <th>Folder Location</th>
	<th>Languages</th>
	<th>Methods</th>
  </tr>

  <tr>
    <td>Login Page Using Mysql</td>
    <td><a href="web\login\login.php">Login </a></td>
    <td>Folder</td>
	<td>XML HTML PHP MYSQL</td>
	<td>Methods</td>
  </tr>

  <tr>
    <td>Re-Direct To Login Page</td>
    <td><a href="web\redirectlogin\index.php">Login</a></td>
    <td>Folder</td>
	<td>PHP MYSQL</td>
	<td>Methods</td>
  </tr>

   <tr>
    <td>Include Header and Footer</td>
    <td><a href="web\header\index.php">Header and Footer</a></td>
    <td>Folder</td>
	<td>HTML PHP</td>
	<td>Methods</td>
   </tr>
   
  <tr>
    <td>Sidebar</td>
    <td><a href="web\sidebar\index.php">Sidebar</a></td>
    <td>Folder</td>
	<td>HTML PHP</td>
	<td>Methods</td>
   </tr>
 
  <tr>
    <td>Button HTML Ajax Javascript PHP</td>
    <td><a href="web\multiplexml\">GET POST</a></td>
    <td>Folder</td>
	<td>HTML Javascript PHP</td>
	<td>Methods</td>
  </tr>
  
  <tr>
    <td>Get Filenames</td>
    <td><a href="web\filenames\index.php">Filenames</a></td>
    <td>Folder</td>
	<td>PHP</td>
	<td>Methods</td>
  </tr>
  

  <tr>
    <td>Parse Many xml Files to Mysql</td>
    <td><a href="web\multipleXML\index.php">Multiple XML</a></td>
    <td>Folder</td>
	<td>XML HTML AJAX PHP MYSQL</td>
	<td>Methods</td>
  </tr>
  
  <tr>
    <td>W3Schools</td>
    <td><a href="https://www.w3schools.com">Visit W3Schools</a></td>
    <td>Folder</td>
	<td>XML HTML PHP MYSQL</td>
	<td>Methods</td>
  </tr>
  

   <tr>
    <td></td>
    <td></td>
    <td></td>
	<td></td>
	<td></td>
  </tr>
  
     <tr>
    <td></td>
    <td></td>
    <td></td>
	<td></td>
	<td></td>
  </tr>
  
     <tr>
    <td></td>
    <td></td>
    <td></td>
	<td></td>
	<td></td>
  </tr>
  

<tr>
    <td>Charts </td>
    <td><a href="web\charts\">Charts Line Pie 24hr Table</a></td>
    <td>Folder</td>
	<td>HTML AJAX Javascript PHP</td>
	<td>Methods</td>
</tr>  


<tr>
    <td>Image Filter </td>
    <td><a href="web\imagefilter\index.php">Image Filter</a></td>
    <td>Folder</td>
	<td>HTML AJAX Javascript PHP</td>
	<td>Methods</td>
</tr>   

<tr>
    <td>Layout</td>
    <td><a href="web\layout\index.php">Layout</a></td>
    <td>Folder</td>
	<td>HTML</td>
	<td>Methods</td>
</tr>  

<tr>
    <td>Bat File</td>
    <td><a href="web\batfile\index.php">Bat File</a></td>
    <td>Folder</td>
	<td>HTML</td>
	<td>Methods</td>
</tr>  


<tr>
    <td>Import JSON</td>
    <td><a href="web\importjson\index.php">Import JSON</a></td>
    <td>Folder</td>
	<td>PHP</td>
	<td>Methods</td>
</tr> 

<tr>
    <td>Export JSON</td>
    <td><a href="web\exportjson\index.php">Export JSON</a></td>
    <td>Folder</td>
	<td>PHP</td>
	<td>Methods</td>
</tr> 


<tr>
    <td>API</td>
    <td><a href="web\api\index.php">API</a></td>
    <td>Folder</td>
	<td>HTML</td>
	<td>Methods</td>
</tr>  


</table>



  </div> 

  
  <div class="right" style="background-color:#ccc;">Column</div>
  
  <div class="footer">
    <p>Footer</p>
  </div>
</div>





</body>
</html>
