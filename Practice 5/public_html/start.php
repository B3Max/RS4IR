<?php
session_start();
require '/home/public_html/phpmyadmin/vendor/autoload.php';
echo $_SESSION["lang"];
echo $_SESSION;
print_r($_SESSION);
if (!strcmp($_SESSION["lang"], "ru")) {
    include("phpinforu.php");
} else {
    include("phpinfo.php");
}
