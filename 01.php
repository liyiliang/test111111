<?php 

echo '1233';

$link=mysql_connect('localhost','root','');

echo 'test';

if($link)
{
	echo "connection success OK";
}

mysql_select_db('test');

$sql="show tables";
mysql_query($sql);

