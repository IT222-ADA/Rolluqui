<!-- <?php

$date = date("D");
echo $date;

if($date == "Mon"){
    echo "<br> its Monday ";
}elseif($date == "tue"){
    echo "<br> its tuesday ";
}else {
    echo "have a nice day";
}
?> -->

<html>
    <body>
        <?php
        switch ($date){
            case "Mon":
                echo "Today is Monday";
                break;
                case "Tue":
                    echo "Tuesday";
                    break;
                    case "Wed":
                        echo "Wednesday";
                        break;
                        default:
                        echo "Have a nice ";
        }
        ?>
    </body>
</html>