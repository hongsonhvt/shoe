<?php
$host = "ec2-54-87-112-29.compute-1.amazonaws.com";
$port = "5432";
$dbname = "d81h7m17t2ju55";
$user = "xbfdbykydcdqey";
$password = "72076682bd6d235a22ba49743a4822f1a592f4634c46a9d546c4e2d3298ee0f2"; 
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
$dbconn = pg_connect($connection_string);
if(!$dbconn){
    echo "loi";
}
?>
