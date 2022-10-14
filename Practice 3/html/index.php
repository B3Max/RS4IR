<html lang="en">

<head>
    <title>Books page</title>
</head>

<body>
    <h1>Таблица книг</h1>
    <table>
        <tr>
            <th>Id</th>
            <th>Автор</th>
            <th>Название</th>
        </tr>
        <?php
        $mysqli = new mysqli("mysql", "user", "sayhi", "appDB2");
        $result = $mysqli->query("SELECT * FROM books");
        foreach ($result as $row) {
            echo "<tr><td>{$row['id']}</td><td>{$row['author']}</td><td>{$row['name']}</td></tr>";
        }
        ?>
    </table>

</body>

</html>