<?php
require_once("include/bittorrent.php");
dbconn();
global $CURUSER, $saythanks_bonus, $receivethanks_bonus;
loggedinorreturn();

$userid = $CURUSER["id"];
$torrentid = 0 + $_POST["id"];
$tsql = sql_query("SELECT owner FROM torrents where id=$torrentid");
$arr = mysql_fetch_array($tsql);
if (!$arr)
    stderr("Error", "Invalid torrent id!");
$torrentowner = $arr['owner'];
$tsql = sql_query("SELECT COUNT(*) FROM thanks where torrentid=$torrentid and userid=$userid");
$trows = mysql_fetch_array($tsql);
$t_ab = $trows[0];
if ($t_ab != 0)
    stderr("Error", "You already said thanks!");
if (isset($userid) && isset($torrentid)) {
    $res = sql_query("INSERT INTO thanks (torrentid, userid) VALUES ($torrentid, $userid)");
    KPS("+", $saythanks_bonus, $CURUSER['id']);//User gets bonus for saying thanks
    KPS("+", $receivethanks_bonus, $torrentowner);//Thanks receiver get bonus
}
