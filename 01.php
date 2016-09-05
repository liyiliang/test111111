<?php 

echo '1233';

$link=mysql_connect('localhost','root','');

if($link)
{
	echo "connection OOK";

}else{
	echo 'connect fail '.mysql_error();
}
