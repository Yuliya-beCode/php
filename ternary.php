<?php

//In a new file ternary.php declare a $hello variable which value is a greeting message. That greeting message depends on another variable $gender, which can either be "M" or "F". Finish by displaying the resulting message.

$gender = "M";

$hello_gender = ($gender == 'F') ? "Hello Miss" : 'Hello Mister';

echo $hello_gender;
