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
