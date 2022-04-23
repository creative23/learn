

<?php

?>


<!DOCTYPE html>
<html>
<head>
<style>


table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>




<h2>Command Line</h2>

<h2>OSPF</h2>

<h2>IP ACL types</h2><p>Two types of IP ACL can be configured in Cisco Packet Tracer 7.2 :</p>


<ul> <li><strong>Standard ACLs</strong> : This is the oldest ACL type which can be configured on Cisco routers. Traffic is filtered based on the source IP address of IP packets. The access-list number can be any number from 1 to 99. This kind of ACL has to be placed near the destination to avoid blocking legitimate trafic from the source.</li> </ul>

<p><samp>access-list 1 permit 10.2.25.0 0.0.0.255</samp><br><samp>access-list 1 deny any</samp></p><ul> <li><strong>Extended ACLs :</strong> Introduced in IOS version 8.3, the extended ACLs are more complex and allow filtering of the IP traffic based on a combination of multiple criterias : source IP address, destination IP address, TCP or UDP port, protocol, .... In numbered ACLs, the access-list number can be any number from 100 to 199 or 2000 to 2699 (available in IOS versions &gt;12.0.1). Such ACLs can also be named access lists in which the ACL number is replaced by a keyword. This kind of ACL has to be placed near the source as it allows fine grained control to ressources accessed. Placing the ACL near the destination will make the trafic travel through the network before beeing blocked, resulting in bandwidth waste.</li> </ul>

<p><samp>access-list 1 permit ip 10.2.25.0 0.0.0.255 10.1.0.0 0.0.255.255</samp><br><samp>access-list 101 permit icmp any 10.1.0.0 0.0.255.255 echo</samp><br><samp>access-list 1 deny ip any any</samp><samp></samp></p>

<h2>&nbsp;</h2><h2>Configuration on Cisco 2911 ISR Router</h2><h3>Restrict remote telnet or SSH access to the ISR router</h3>

<p>Access lists can be used to restrict remote SSH or Telnet access to the ISR router management interface (VTY) from specific networks only. Only numbered access-lists are supported on the Virtual Terminal Line.</p>

<p>The <strong>access-class</strong> command is used to apply the access list on the Virtual Terminal Line. The following configuration deny administrative access to the router except for the 192.168.1.0/24 network hosting admin workstations. Note the wildcard mask used in the access-list configuration for the /24 network.</p>





<img src="img/ospf.png" alt="this img" width="1250" height="500">


<center>
<table>
  <tr>
    <th>Command</th>
    <th>Purpose</th>
  </tr>

  <tr>
    <td>ping 192.168.1.1</td>
    <td>Send 4 packets to end node for connectivity</td>
  </tr>
  
  <tr>
    <td>ipconfig /release</td>
    <td>Clears tcp/ip cache</td>
  </tr>
  
  <tr>
    <td>ipconfig /all</td>
    <td>Displays all details of network cards</td>
  </tr>

  <tr>
    <td>ipconfig /flushdns</td>
    <td>Clears dns cache</td>
  </tr>
  
  <tr>
    <td>ipconfig /renew</td>
    <td>Request for ip dns gateway</td>
  </tr>
  
  <tr>
    <td>winsoc</td>
    <td>Reset</td>
  </tr>
  
  <tr>
    <td>nslookup google.com</td>
    <td>Name server lookup ip of hostname</td>
  </tr>
  
  <tr>
    <td>tracert  or trace route</td>
    <td>Counts routers (hops)</td>
  </tr>

  <tr>
    <td>pathping</td>
    <td>Checks quality of connection</td>
  </tr>
  
   <tr>
    <td>netstat</td>
    <td>Shows all open ports listhening on</td>
  </tr>
  
    <tr>
    <td>nbtstat</td>
    <td>Net bios over tcp/ip details stats and current TCP/IP connections</td>
  </tr>
  
   <tr>
    <td>arp</td>
    <td>Shows arp table</td>
    </tr>
  
    <tr>
    <td>route</td>
    <td>Edit arp tale</td>
    </tr>
	
	<tr>
    <td>hostname</td>
    <td>Returns hostname</td>
    </tr>
  
   <tr>
    <td>getmac</td>
    <td>Returns mac address</td>
  </tr>
  
 </table>
</center>


	



<textarea rows="30" cols="50" name="comment" form="usrform">
FTP
FileZilla Server
Filezilla Client
Port Forward

Network
arp table / arp request

public vs private address	


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