<?php
require_once("include/bittorrent.php");
dbconn();
//设置页面编码
header("Content-type:text/html;charset=UTF-8");
$wantusername = trim($_GET["wantusername"]);
$sql = "select * from users where username = " . sqlesc($wantusername);
$query = sql_query($sql);
$rst = mysql_fetch_object($query);
echo $rst ? 'true' : 'false';
