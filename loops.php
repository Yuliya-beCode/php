<h1>Loops are a logic structure that is useful to repeat a block of instructions several times. foreach, while, for are the three different looping structures.</h1>

<p style="color: red;">For each element of the array $plates, call it $plate then apply the instruction : wash_plate().</p>

<?php
$names = array('John', 'jeanne', 'Joan', 'émile');
foreach ($names as $name) {
    echo ucfirst($name);
}
?>

<hr>

<p style="color: red;">Foreach, with the key index.</p>

<?php
$names = array('John', 'jeanne', 'Joan', 'émile');
var_dump($names);

foreach ($names as $key => $value) {
    $names[$key] = ucfirst($value);
}
var_dump($names);
?>

<hr>

<p style="color: red;">Using foreach, build a loop that displays each element of the array.</p>

<?php
$pronouns = array('I', 'You', 'He/She', 'We', 'You', 'They');


foreach ($pronouns as $key => $value) {
    $pronouns[$key] = print_r($pronouns);
}

?>

<hr>
<p style="color: red;">Then, modify your loop so as to conjugate the verb "to code" in the present tense. Use a <br> to go to the next line. The result should be :
    I code
    You code
    He/She codes
    We code
    You code
    They code</p>

<?php
$pronouns = array('I', 'You', 'He/She', 'We', 'You', 'They');


foreach ($pronouns as $key => $value) {
    $pronouns[0] = 'I code';
    $pronouns[1] = 'You code';
    $pronouns[2] = 'He/She codes';
    $pronouns[3] = 'We code';
    $pronouns[4] = 'You code';
    $pronouns[5] = 'They code';
}

print_r($pronouns)

?>

<hr>

<p style="color: red;">You can also loop inside a string
    While loop
    Bart Simpson has been (again) punished : he must copy 100 times "I shall not watch flies fly when I'm learning PHP".

    Let's use another loop structure to do just that: the Whileloop</p>

<?php
$amount_of_lines = 1;

while ($amount_of_lines <= 100) {
    echo $amount_of_lines . '. : I shall not watch flies fly when I am learning PHP.';
    // shorthand writing for 
    // $amount_of_lines = $amount_of_lines +1;
    $amount_of_lines++;
}
?>

?>

<hr>

<p style="color: red;">For loop
    Here is a third looping structure: the For loop. Check this out :</p>

<?php
for ($amount_of_lines = 1; $amount_of_lines <= 100; $amount_of_lines++) {
    echo $amount_of_lines . '. : I shall not watch flies fly when I am learning PHP.<br />';
}
?>

<hr>

<h1>Exercises</h1>

<p style="color: red;">Write a script that prints the numbers from 1 to 120 using  while
</p>
<?php

$n = 1;

while ($n <= 120)
{
    echo $n++;
    
}
?>

<hr>