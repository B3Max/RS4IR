<html lang="en">
<head>
<title>Hello world page</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
<h1>Таблица пользователей данного продукта</h1>
<table>
    <tr><th>Id</th><th>Name</th><th>Surname</th></tr>
<?php
$mysqli = new mysqli("db", "MYSQL_USER", "MYSQL_PASSWORD", "MYSQL_DATABASE");
$result = $mysqli->query("SELECT * FROM users");
foreach ($result as $row){
    echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['surname']}</td></tr>";
}
$a = 1;
$b = 2;
$c = $a . $b;
echo $c;
$d = 10.9 % 3;
echo $d
?>
</table>
<?php
phpinfo();
?>
</body>
</html>