<html lang="ru">
<head>
<title>Hello world page</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
<h1>Таблица аренды книг</h1>
<table>
    <tr><th>Id</th><th>Book Id</th><th>End date</th><th>User Id</th></tr>
<?php
$mysqli = new mysqli("db", "user", "password", "appDB");
$result = $mysqli->query("SELECT * FROM orders");
foreach ($result as $row){
    echo "<tr><td>{$row['ID']}</td><td>{$row['book_id']}</td><td>{$row['date_end']}</td><td>{$row['user_id']}</td></tr>";
}
?>
</table>
</body>
</html>
