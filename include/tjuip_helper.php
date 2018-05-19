<?php
/**
 * Created by PhpStorm.
 * User: zcqian
 * Date: 15/9/16
 * Time: 上午10:18
 */

require_once("bittorrent.php");

function assert_tjuip()
{
    $ip = getip();
    $nip = ip2long($ip);
    if ($nip) {

        if (!check_tjuip($nip)) {
            stdhead("没有权限");
            stdmsg("没有访问权限", "你正在使用校外IP地址访问本站，不允许浏览本页面");
            stdfoot();
            exit;
        }
    }
}

function assert_tjuip_or_mod()
{
    $ip = getip();
    $nip = ip2long($ip);
    if ($nip) {

        if (!(get_user_class() >= UC_MODERATOR) && !check_tjuip($nip)) {
            stdhead("没有权限");
            stdmsg("没有访问权限", "你正在使用校外IP地址访问本站，不允许浏览本页面<hr><font size='3' color='red'>扫码调戏北洋媛(●'◡'●)</font><br><img src='images/qrcode-wx.php' width='30%'/><img src='images/qrcode-qq.php' width='30%'/><img src='images/qrcode-weibo.php' width='30%'/>");
            stdfoot();
            exit;
        }
    }
}