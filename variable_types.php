<html>

<head>
  <title>Hi!</title>
</head>

<body>
  <?php $name = 'Julia'; ?>
  <p>Hi! My name is <?php
                    echo $name; ?>!</p>

  <p>I am <?php $age = 20;
          echo $age; ?> years old.</p>

  <p>My eyes are <?php $eyes = 'blue';
                  echo $eyes; ?>.</p>

  <?php $family_members = array(
    0 => 'Galina',
    1 => 'Alina',
    2 => 'Ksenia',
    3 => 'Eric',
  ); ?>

  <p>The first person in my family is
    <?php
    echo $family_members[0];
    ?>.
  </p>


  <p>Am I - <?php

            $hungry = true;
            echo '"hungry": ' . (boolval($hungry) ? 'true' : 'false') . "\n";




            ?>
  </p>

</body>

</html>