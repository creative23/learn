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
  height: 300px; /* Should be removed. Only for demonstration */
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
  <a href="#news">Networking</a>
  <a href="#contact">Python</a>
  <a href="#contact">Linux</a>
  <a href="#contact">Android</a>
  <a href="#contact">Tools</a>
  <a href="#contact">.NET</a>
  <a href="#contact">Databases</a>
  <a href="#contact">ERP</a>
  <a href="#about">EDI</a>
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
    <td><a href="login\login.php">Login </a></td>
    <td>Folder</td>
	<td>XML HTML PHP MYSQL</td>
	<td>Methods</td>
  </tr>

  <tr>
    <td>Re-Direct To Login Page</td>
    <td><a href="redirectlogin\index.php">Login</a></td>
    <td>Folder</td>
	<td>PHP MYSQL</td>
	<td>Methods</td>
  </tr>

   <tr>
    <td>Include Header and Footer</td>
    <td><a href="header\index.php">Header and Footer</a></td>
    <td>Folder</td>
	<td>HTML PHP</td>
	<td>Methods</td>
   </tr>
   
  <tr>
    <td>Sidebar</td>
    <td><a href="sidebar\index.php">Sidebar</a></td>
    <td>Folder</td>
	<td>HTML PHP</td>
	<td>Methods</td>
   </tr>
 
  <tr>
    <td>Button HTML Ajax Javascript PHP</td>
    <td><a href="multiplexml\">GET POST</a></td>
    <td>Folder</td>
	<td>HTML Javascript PHP</td>
	<td>Methods</td>
  </tr>

  <tr>
    <td>Parse Many xml Files to Mysql</td>
    <td><a href="multipleXML\index.php">multipleXML</a></td>
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
    <td><a href="multiplexml\">Charts Line Pie 24hr Table</a></td>
    <td>Folder</td>
	<td>HTML AJAX Javascript PHP</td>
	<td>Methods</td>
</tr>  


<tr>
    <td>Image Filter </td>
    <td><a href="imagefilter/index.php">Image Filter</a></td>
    <td>Folder</td>
	<td>HTML AJAX Javascript PHP</td>
	<td>Methods</td>
</tr>   

<tr>
    <td>Layout</td>
    <td><a href="layout/index.php">Layout</a></td>
    <td>Folder</td>
	<td>HTML</td>
	<td>Methods</td>
</tr>  


<tr>
    <td>API</td>
    <td><a href="api/index.php">API</a></td>
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


<textarea rows="30" cols="50" name="comment" form="usrform">
FTP
FileZilla Server
Filezilla Client
Port Forward

Network
arp table / arp request
ping 192.168.1.1
ipconfig / all
ipconfig /release
ipconfig /flushdns
ipconfig /renew
public vs private address	

nslookup
tracert
pathping
netstat
nslookup
route
getmac
write cmd output to text files example ipconfig >>c:\ipaddresses.txt
ctrl+c to cancel cmd

.bat files

Task Scheduler
Services

Python

Android

EDI

VB.NET
C# API

API

Virtualisation

Linux
Installing and Running Xammp


</textarea>



</body>
</html>
