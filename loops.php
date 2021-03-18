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
$names= array('John', 'jeanne', 'Joan', 'émile');
var_dump($names);

foreach ($names as $key=> $value){
	$names[$key] = ucfirst($value);
}
var_dump($names);
?>

<hr>

<p style="color: red;">Using foreach, build a loop that displays each element of the array.</p>

<?php
$pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');


foreach ($pronouns as $key=> $value){
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
$pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');


foreach ($pronouns as $key=> $value){
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

