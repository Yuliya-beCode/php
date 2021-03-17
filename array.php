<p style="color: red;">Create an array representing your family members</p>

<?php $family_members = array(
    0 => 'Galina',
    1 => 'Alina',
    2 => 'Ksenia',
    3 => 'Eric',
); ?>

<p>My family consists of
    <?php
    print_r($family_members);
    ?>. </p>


<hr>

<?php
var_dump($family_members);
?>

<hr>

<p style="color: red;">Retrieve and display an element</p>

<?php
echo $family_members[2];
?>

<hr>

<p style="color: red;">Add an element</p>

<?php
array_push($family_members, 'Julia');
print_r($family_members);

?>

<hr>

<p style="color: red;">And the short way :</p>

<?php
$family_members[] = 'Julia';
print_r($family_members);

?>

<hr>

<p style="color: red;">If you want to use an associative key (more on this in a bit):</p>

<?php
$person['function'] = 'Junior Web Developer';
print_r($family_members);
?>

<hr>

<p style="color: red;">Replace the value of a key by another one. Say $person describes, Jeanne, a Junior Web Developer :</p>

<?php
$person['function'] = 'Junior Web Developer';

$person['function'] = 'Junior Web Developer';
echo $person['function'];
// returns 'Junior Web Developer'

?>

<hr>

<p style="color: red;">After a few years in the industry, she's promoted to Senior.</p>

<?php
$person['function'] = 'Junior Web Developer';
$person['function'] = 'Senior Web Developer';
echo $person['function'];
// returns 'Senior Web Developer'

?>


<hr>

<p style="color: red;">Associative Array.</p>

<?php
$person[0] = '02/2198445';
$person[1] = 'Cantersteen 10';
$person[2] = 'Brussels';

// compare this
echo $person[1];
// with this
echo $person['street'];

?>

hr>

<p style="color: red;">Coding an Associative Array.</p>

<?php
$user = array(
    'firstname' => 'Juan',
    'lastname' => 'Pablo',
    'adress' => '3 Paradijsestraat',
    'city' => 'Antwerpen'
);

echo $user['lastname'];

?>

<p style="color: red;">Exercise
    Describe yourself using an associative array: $me. Specify your age, your favourite season of the year, wether you like soccer or not (boolean). Try to use the right variable type for each value.</p>
Add your hobbies using an array to your $me array.
<?php
$me = array('firstname' => 'Julia', 'age' => '35', 'favourite season' => 'summer', 'soccer' => true, 'hobbies'     => array('dance', 'politics', 'culture'));


echo '<pre>';
print_r($me);
echo '</pre>';

?>


<p style="color: red;">Then, after the $me array, create a second array with the same keys as yours, to describe your mother : the $mother array (make it someone else if you prefer).
    <?php
    $me = array('firstname' => 'Julia', 'age' => '35', 'favourite season' => 'summer', 'soccer' => true, 'hobbies'     => array('dance', 'politics', 'culture'));

    $alina = array('firstname' => 'Alina', 'age' => '8', 'favourite season' => 'summer', 'soccer' => true, 'hobbies'     => array('guitar', 'gymnastics', 'playing'));



    echo '<pre>';
    print_r($me);
    print_r($alina);
    echo '</pre>';

    ?>

<p style="color: red;">Then, below that, assign the $mother array to a new key in your $mearray : let's call that key 'mother'.</p>
<?php
echo '<pre>';

array_push($me, $alina);
$me['alina'] = $me[0];
unset($me[0]);
print_r($me);
echo '</pre>';


?>

<p style="color: red;">Say you want to know how many hobbies your mother has. Try to guess the native php function that allows you to count the number of elements in an array.</p>
<?php
echo '<pre>';
var_dump(count($me['alina']['hobbies']));
echo '</pre>';

?>


<p style="color: red;">Below, count your own hobbies</p>
<?php
echo '<pre>';
var_dump(count($me['hobbies']));
echo '</pre>';

?>


<p style="color: red;">Below, add both totals and display the total amount of hobbies.</p>
<?php
echo '<pre>';
$a = number_format(var_dump(count($me['hobbies'])));
$b = number_format(var_dump(count($me['alina']['hobbies'])));

echo ($a + $b);

echo '</pre>';

?>


<p style="color: red;">A friend introduced you to the joys of Taxidermy : it quickly becomes your new hobby. Try to find the right way to add that new hobby to your array's 'hobbies' key.</p>
<?php
echo '<pre>';

$me['hobbies'][] = 'taxidermy';
print_r($me);
echo '</pre>';

?>

<p style="color: red;">Replace
You decide you need a reset and change your firstname to Lucy. How would you update your array ?</p>
<?php
echo '<pre>';

$me['firstname'] = 'Lucy';
print_r($me);
echo '</pre>';

?>