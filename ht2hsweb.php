<?php
header('Content-Type: text/html; charset=utf-8');
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<style media="screen,projection" type="text/css">/*<![CDATA[*/ @import "main.css"; /*]]>*/</style></head>
<style>
  #foo {
    position: fixed;
    bottom: 0;
    right: 0;
  }
</style>
<body bgcolor = "000000" text = "FFFFFF" background="bg.jpg" ><center><font face="Arial,Helvetica">

<?php
define("MEDIAWIKI_PATH", "/var/www/zhtools/mediawiki-1.13.3/");
require_once "mediawiki-zhconverter.inc.php";

$translated = MediaWikiZhConverter::convert($_POST['zh-hant'], "zh-sg");

echo "Original:<br><textarea style='width:80%;height:30%'>". htmlentities ($_POST['zh-hant']);
echo "</textarea><br><br>Translated:<br><textarea style='width:80%;height:30%'>". htmlentities ($translated);
echo "</textarea>";

?>
