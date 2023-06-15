<html>
    <body>

    exercise1
        <?php

         $i = 1;

        while ($i < 6) {
            echo $i;
            $i++;
        }
        ?>
    exercise2
     <?php
    $i = 1;

    do {
        echo $i;
        $i++;
    } while ($i < 6 );

        ?>

    exercise3
    <?php
    for ($i = 1; $i < 6; $i++) {
        echo $i;
    }
    ?>

    exercise4
    <?php
    $colors = array("red", "green", "blue", "yellow"); 

    foreach
     ($colors as $x) {
      echo $x;
    }
    ?>
    </body>
</html>