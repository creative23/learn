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
  <a class="active" href="http://localhost/is/index.php">Web</a>
  <a href="index.php">Networking</a>
  <a href="python\index.php">Python</a>
  <a href="linux\index.php">Linux</a>
  <a href="android\index.php">Android</a>
  <a href="tools\index.php">Tools</a>
  <a href="net\index.php">.Net</a>
  <a href="databases\index.php">Databases</a>
  <a href="erp\index.php">ERP</a>
  <a href="edi\index.php">EDI</a>
 
 
</div>
	<h2>Networking</h2>
	
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
    <td>EIGRP Basics</td>
    <td><a href="page1.php">page1</a></td>
    <td></td>
	<td></td>
	<td>Packet Tracer</td>
  </tr>
  
     <tr>
    <td>OSPF Basics</td>
    <td></td>
    <td></td>
	<td></td>
	<td>Packet Tracer</td>
  </tr>
  
  <tr>
    <td>VLANs</td>
    <td></td>
    <td></td>
	<td></td>
	<td>Packet Tracer</td>
  </tr>
  
  <tr>
    <td>CDP Basic Example</td>
    <td></td>
    <td></td>
	<td></td>
	<td>Packet Tracer</td>
  </tr>
  
   <tr>
    <td>DHCP Relay</td>
    <td></td>
    <td></td>
	<td></td>
	<td>Packet Tracer</td>
  </tr>
  
  <tr>
    <td>DHCP Server</td>
    <td></td>
    <td></td>
	<td></td>
	<td>Packet Tracer</td>
  </tr>
  
   <tr>
    <td>STP Basics</td>
    <td></td>
    <td></td>
	<td></td>
	<td>Packet Tracer</td>
  </tr>
  
   <tr>
    <td>Static Routing Configuration</td>
    <td></td>
    <td></td>
	<td></td>
	<td>Packet Tracer</td>
  </tr>
  
    <tr>
    <td>OSPF Configuration Step by Step Guide</td>
    <td></td>
    <td></td>
	<td></td>
	<td>Packet Tracer</td>
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
