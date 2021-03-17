<?php

$str = "Fill out the information in the Create New Building Block dialog box. Most of the default values are fine, but including a unique name and description makes the AutoText easier for you to find and use.";

$str = explode(" ", $str);

foreach ($str as $word) {

    echo str_shuffle($word) . " ";
}
