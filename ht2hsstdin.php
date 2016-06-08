<?php
define("MEDIAWIKI_PATH", "/var/www/zhtools/mediawiki-1.13.3/");
require_once "mediawiki-zhconverter.inc.php";
while($line = fgets(STDIN)){
echo MediaWikiZhConverter::convert($line, "zh-sg");
}
?>
