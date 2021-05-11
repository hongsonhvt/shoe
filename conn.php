<?php 
$servername="ec2-54-87-112-29.compute-1.amazonaws.com";
$username ="xbfdbykydcdqey";
$password="72076682bd6d235a22ba49743a4822f1a592f4634c46a9d546c4e2d3298ee0f2";
$dbname= "d81h7m17t2ju55";
$conn= mysqli_connect($servername,$username,$password,$dbname);
  if(!$conn)
  {
    die("Error Connection". mysqli_connect_error());
  }
  
 ?>
