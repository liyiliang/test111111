<?php 

echo '1233';

$link=mysql_connect('localhost','root','');

echo 'test';

if($link)
{

	echo "connection OOK";

}else{
	echo 'connect fail '.mysql_error();

}

mysql_select_db('test');

$sql="show tables";
mysql_query($sql);

