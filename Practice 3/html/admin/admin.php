<html lang="en">

<head>
  <title>Admin page</title>
</head>

<body>
  <h1>Управление библиотекой</h1>
  <h2>Добавить книгу</h2>
  <form action="add.php" method="get">
    <div class="flex-row logo">
    </div>
    <div class="flex-row">
      <input id="author" class='input' placeholder='Автор' type='text' name="author" autocomplete="off" required>
    </div>
    <div class="flex-row">
      <input id="name" class='input' placeholder='Книга' type='text' name="name" autocomplete="off" required>
    </div>
    <input class='submit' type='submit' value='Добавить'>
  </form>
  <h2>Удалить книгу</h2>
  <form action="del.php" method="get">
    <div class="flex-row logo">
    </div>
    <div class="flex-row">
      <input id="id" class='input' placeholder='ID книги' type='text' name="id" autocomplete="off" required>
    </div>
    <input class='submit' type='submit' value='Удалить'>
  </form>

</body>

</html>