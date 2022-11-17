<?php
session_start();
echo "Your Login is: ";
echo $_SESSION["login"];
if (!strcmp($_SESSION["backgr"], "dark")) {
    echo '<body style="background-color:grey;color:white">';
} else {
    echo '<body style="background-color:white">';
}
?>


<html lang="ru">

<head>
    <title>Hello world page</title>
</head>

<body>
    <p>Hello world!!!</p>
</body>

</html>