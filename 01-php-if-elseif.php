<html>
    <body>
    <?php
    $t = date("H");

    if ($t < "20") {
    echo "Have a good day!";
    }
    ?>

    <?php
    $t = date("H");

    if ($t < "20") {
    echo "Have a good day!";
    } else {
    echo "Have a good night!";
    }
    ?>

    <?php
    $t = date("H");

    if ($t < "10") {
    echo "Have a good morning!";
    } elseif ($t < "20") {
    echo "Have a good day!";
    } else {
    echo "Have a good night!";
    }
?>

    exercise1
    <?php
     $a = 50;
     $b = 10;

     if($a > $b) {
        echo "Hello World";
     }
    ?>

    exercise2
    <?php
     $a = 50;
     $b = 10;
     if($a != $b) {
             echo "Hello World";
          }
     ?>

     exercise3
     <?php
     $a =50;
     $b =10;
     if($a==$b) {
        echo "Yes";
     } else {
        echo "No";
     }
     ?>

     exercise4
     <?php
     $a = 50;
     $b = 10;

     if($a == $b) {
        echo "1";
     } elseif ($a > $b) {
        echo "2";
     } else {
        echo "3";
     }
     ?>
    </body>
</html>