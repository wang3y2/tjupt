<?php
require_once("include/bittorrent.php");
dbconn();
if ($_SERVER['REQUEST_URI'] == '/logout.php')
    logoutcookie();
Header("Location: /");
