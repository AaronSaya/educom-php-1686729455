<!DOCTYPE HTML>
<html>  
<body>

<form action="welcome.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

exercise1
<form action="welcome.php" method="get">
First name: <input type="text" name="fname">
</form>

Welcome <?php echo $_GET["fname"];?>

exercise2
<form action="welcome.php" method="get">
First name: <input type="text" name="fname">

Welcome <?php echo $_GET["fname"];?>

</body>
</html>