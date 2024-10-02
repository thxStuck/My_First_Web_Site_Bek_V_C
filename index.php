<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bek Vladislav</title>
    <link rel="stylesheet" href="style.css">
</head>
<body><?php
if (!isset($_COOKIE['User'])) {
       ?>
           <a href="/registration.php">Зарегистрируйтесь</a> или <a href="/login.php">войдите</a>, чтобы просматривать контент!
       <?php
       } else {
           // подключение к БД
       }
?>
<footer class="footer">
    <p>&copy; 2024 Positive Start. All rights dont reserved.</p>
</footer>

</body>
</html>