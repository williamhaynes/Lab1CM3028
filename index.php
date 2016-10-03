<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <p>
            <?php
            /*$myname = "Frodo Baggins";
            $myage = 111;
                echo "My Name is " . $myname . " and I am" . $myage;
                echo "Hello World";
                echo 5 * 7;*/
            /*$name = "Edgar";

            if ($name=="Simon"){
                print "I know you";
            }
            else{
                print "I don't know you";
            }*/
            /*$myage = 18;

            if ($myage>=21) print "sausage rolls";
            else if ($myage>=18) print "mugs";
            else if ($myage>=16) print "specs";
            else print "nothing bitch";*/

            /*$wantedgoods = "specs";
            switch($wantedgoods){
                case "mugs":
                    echo "Over 18 for Mugs";
                    break;
                case "specs":
                    echo "Over 16 for Specs";
                    break;
                case "sausage rolls":
                    echo "Over 21 for Sausage Rolls";
                    break;
                default:
                    echo "Too young for anything";
            }*/

            $dateArray = array();
            $addedText = "";

            for($i=0; $i<31; $i++){
                $dateArray[$i] = $i+1;

                if ($dateArray[$i] % 4 == 0) $addedText = " specs and sausage rolls are available";
                else if ($dateArray[$i] % 3 == 0) $addedText = " mugs are available";
                else if ($dateArray[$i] % 2 == 0) $addedText = " specs are available";

                if ($dateArray[$i] == 1 || $dateArray[$i] == 21 || $dateArray[$i] == 31){
                    $dateArray[$i] = $i+1 . "st";
                }
                else if ($dateArray[$i] == 2 || $dateArray[$i] == 22){
                    $dateArray[$i] = $i+1 . "nd";
                }
                else if ($dateArray[$i] == 3 || $dateArray[$i] == 23){
                    $dateArray[$i] = $i+1 . "rd";
                }
                else{
                    $dateArray[$i] = $dateArray[$i] . "th";
                }
            }



            foreach ($dateArray as $date){
                print "<p>On the $date of the month $addedText</p>";
            }
            ?>
        </p>
    </body>
</html>

/**
 * Created by PhpStorm.
 * User: hype_
 * Date: 03/10/2016
 * Time: 14:13
 */