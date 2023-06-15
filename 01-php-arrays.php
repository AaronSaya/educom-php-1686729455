<html>
    <body>
        exercise1
        <?php
        $fruits = array("Apple", "Banana", "Orange");
        echo 
        count($fruits);
        ?>

        exercise2
        <?php
        $fruits = array("Apple", "Banana", "Orange");
        echo 
        $fruits[1];
        ?>

        exercise3
        <?php
         $age = array("Peter"=>"35", "Ben" => "37", "Joe" => "43");
         echo "Peter is" .$age['Peter']. "years old";
        ?>

        exercise4
        <?php
        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        echo "Ben is " .$age["Ben"]. " years old.";
        ?>

        exercise5
        <?php
        
        foreach($age as $x => $y) {
        echo "Key=" .$x. ", Value=" .$y;
        }
        ?>

        exercise6
        <?php
        $colors = array("red", "green", "blue", "yellow"); 
        sort($colors);
     
        ?>

        exercise7
        <?php
       $colors = array("red", "green", "blue", "yellow"); 
       rsort($colors);
        ?>

        exercise8
        <?php
        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        asort($age);
       ?>
    </body>
</html>