<?php

$desc = $_POST['desc'];
$n = $_GET['idpost'];

$cn = mysql_connect("localhost","deelf_colcali","colcali123");
mysql_select_db("deelf_colcali", $cn);

if(mysql_query("UPDATE smf_messages SET des_post = '$desc' WHERE ID_TOPIC = '$n'",$cn))
{
	echo 0;
}
else 
{
	echo 1;
}

?>
