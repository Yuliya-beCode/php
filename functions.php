<p style="color: blue;">Use a function that capitalizes the first letter of the provided argument. Example: should return "émile""Émile"
</p>
<?php

$name = "émile";

$name = ucfirst($name);

echo $name;
?>

<hr>

<p style="color: blue;">Use the native function allowing you to display the current year.</p>

<?php

echo date("Y");

?>

<hr>

<p style="color: blue;">Now display the date, time, minutes and seconds, using the same function, by playing with the arguments.</p>

<?php

$today = date("F j, Y, g:i a");

echo $today;
?>

<hr>

<p style="color: blue;">Create a "Sum" function that takes 2 numbers and returns their sum.</p>

<?php

$a = 1;
$b = 2;
echo $a + $b;
?>

<hr>


<p style="color: blue;">Improve that function so that it checks whether the argument is indeed a Number. If not, it should display : "Error: argument is not a number."</p>

<?php

$a = 1;
$b = 2;

$tests = array(
    $a,
    $b
);


foreach ($tests as $element) {
    if (is_numeric($element)) {
        echo var_export($element, true) . " is numeric";
    } else {
        echo var_export($element, true) . "Error: argument is not a number";
    }
}


?>

<hr>