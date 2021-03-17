<?php
//"School sucks!" Exercise
/**It would display a different message according to the number annotated :

note below 4 : "This work is really bad. What a dumb kid! "
note between 5 and 9 : "This is not sufficient. More studying is required."
note equals 10 : "barely enough!"
note is 11, 12, 13 or 14 : "Not bad!"
note is 15, 16, 17 or 18 : "Bravo, bravissimo!"
note is 19 or 20 : "Too good to be true : confront the cheater!"*/

$i = 10;

switch ($i) {
    case ($i <= 4) :
        echo "This work is really bad. What a dumb kid!";
        break;
    case ($i > 5 && $i < 9):
        echo "This is not sufficient. More studying is required.";
        break;
    case ($i == 10):
        echo "barely enough!";
        break;
    case ($i == 11 || $i == 12 || $i == 13 || $i == 14):
        echo "Not bad!";
        break;
    case ($i == 15 || $i == 16 || $i == 17 || $i == 18):
        echo "Bravo, bravissimo!";
        break;
    case ($i == 19 || $i == 20):
        echo "Too good to be true : confront the cheater!";
        break;
    default:
       echo "there is no options that would suit your choise";
}
