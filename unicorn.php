<?php
//In a new file unicorn.php, create an html form asking "Are you a human, a cat or a unicorn ?". When submitted, the screen displays an animated Gif showing either a human, a cat or a unicorn, as per the user input (you can find gifs here). Use GET or POST as method, whichever you like. Use a ternary operation to evaluate the condition.


?>

<p style="color: blueviolet;">"Are you a human, a cat or a unicorn ?"</p>

<form method="get" action="">
	<label for="image">...</label>
	<input type="" name="image">

	<input type="submit" name="submit" value="Choose">
</form>


<?php

$image = $_GET['image'];
$image_unicorn = "https://media.giphy.com/media/l2Jho5fnv7sfNAAZq/giphy.gif";
$image_human = "https://media.giphy.com/media/l0HlSNOxJB956qwfK/giphy.gif";
$image_cat = "https://media.giphy.com/media/3o6Zt481isNVuQI1l6/giphy.gif";


$change_image = ($image == 'unicorn') ? $image_unicorn : (($image == 'human') ? $image_human : $image_cat);


?>

<img src="<?php echo $change_image; ?>">