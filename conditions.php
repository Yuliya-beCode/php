<?php // 1.1 Clean your room Exercise 

$room_is_filthy = true;

if ($room_is_filthy = true) {
	echo "Yuk, Room is dirty : let's clean it up !";

	echo "<br>Room is now clean!";
	$room_is_filthy = false;
} else {
	echo "<br>Nothing to do, room is neat.";
}

?>

<br>
<br>
<br>

<?php

// 2. "Different greetings according to time" Exercise

ini_set('date.timezone', 'UTC');
print 'UTC<br>';
$now  = date('H:i:s', time() - date('Z')); // 12:50:29
print $now . '<br>';

// Test the value of $now and display the right message according to the specifications.

//If the time is between 05h00 and 09h00, display "Good morning !".
if ($now > "05:00" && $now < '09:00') {
	echo "Good morning !";
}

//If the time is between 09h01 and 12h00, display "Good day !".
elseif ($now > "09:01" && $now < '12:00') {
	echo "Good day !";
}
//If the time is between 12h01 and 16h00, display "Good afternoon !".
elseif ($now > "12:01" && $now < '16:00') {
	echo "Good afternoon !";
}
//If the time is between 16h01 and 21h00, display "Good evening !".
elseif ($now > "16:01" && $now < '21:00') {
	echo "Good evening !";
}

//If the time is between 21h01 and 04h59, display "Good night !".
elseif ($now > "21:01" && $now < '04:59') {
	echo "Good night !";
}

?>

<br>
<br>
<br>
<?php
// 3. "Different greetings according to age" Exercise

$age = $_GET['age'];
$gender = $_GET["gender"];
$boolean = $_GET["boolean"];

//If age is below 12 and the user replies "yes", display : "Hello boy!" or "Hello Girl!" according to the gender indicated.

if ($age < 12 && $gender ==  'man' && $boolean == 'yes') {

	echo "Hello boy!";
} elseif ($age < 12 && $gender ==  'man' && $boolean == 'no') {

	echo "Aloha boy!";
} elseif ($age < 12 && $gender == 'woman' && $boolean == 'yes') {

	echo "Hello Girl!";
} elseif ($age < 12 && $gender ==  'woman' && $boolean == 'no') {

	echo "Aloha Girl!";
}
//if age is between 12 and 18 years old, display "Hello Teenager !"
elseif ($age > 12 && $age < 18 && $gender ==  "man") {
	echo "Hello Mr Teenager !";
} elseif ($age > 12 && $age < 18 && $gender ==  "woman") {
	echo "Hello Ms Teenager !";
}
//if age is between 18 and 115 years old, display Hello Adult !"
elseif ($age > 18 && $age < 115) {
	echo "Hello Adult !";
}
//if age is beyond 115 years old, display "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?"
elseif ($age > 115) {
	echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
}
?>


<p style="color:blue">Please type your age : </p>
<form method="get" action="">
	<label for="age">...</label>
	<input type="" name="age">

	<p style="color:blue">Please type your gender : </p>
	<label for="gender">Man</label>
	<input type="radio" name="gender" value="man">

	<label for="gender">Woman</label>
	<input type="radio" name="gender" value="woman">

	<p style="color:blue">"Do you speak English ? "</p>
	<label for="boolean">Yes</label>
	<input type="radio" name="boolean" value="yes">

	<label for="boolean">No</label>
	<input type="radio" name="boolean" value="no">

	<br>

	<br>

	<input type="submit" name="submit" value="Greet me now">
</form>