exercise1 Include
<?php
include 'footer.php';
?> 

exercise2 file handling
<?php
echo readfile("webdict.txt");
?>

exercise3 file open/read
<?php
$myFile = fopen("webdict.txt", "r");
    while(!feof ($myFile)) {
        echo fgetc($myFile);
    }
?>
exercise4 Cookies
<?php
setcookie("username", "John", time() + (86400 * 30), "/")
?>

exercise5 Sessions
<?php
session_start();
$_SESSION["favcolor"] = "green";
?>

exercise6 
<?php
echo 
$_SESSION["favcolor"];
?>