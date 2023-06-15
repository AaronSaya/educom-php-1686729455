<html>
    <body>
    <?php
    $favcolor = "red";

    switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
    }
?>

    exercise1
    <?php
    switch ($color) {
        case "red":
        echo "Hello";
        break;
        case "green":
        echo "Welcome";
        break;
    }

    ?>

    exercise2
    <?php
    switch ($color) {
        case "red":
        echo "Hello";
        break;
        case "green":
        echo "Welcome";
        break;
        default: "Neither";
    }
    ?>
    </body>
</html>