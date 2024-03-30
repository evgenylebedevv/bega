<?
if(file_exists($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/include/functions.php"))
    require_once($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/include/functions.php");


if(file_exists($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/include/event_handler.php"))
    require_once($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/include/event_handler.php");

if(file_exists($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/vendor/autoload.php"))
    require_once($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/vendor/autoload.php");

?>