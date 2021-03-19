



<?php
//CRUD**: Create, Read, Update, Delete.
// 1. Sanitisation
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

// 2. Validation
if (true === filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "This cleaned email address is considered valid.";
} else {
    echo "This cleaned email address is not valid. Sorry. xoxo.";
}

// 3. execution
if (count($errors) > 0) {
    echo "There are mistakes!";
    print_r($errors);
    exit;
}
// If we get here, it's because everything's fine, we can record
$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '');
//...

// 4. Display the response interface.
/**As the system has changed, the interface presented to the user must reflect this change.
For example: return html displaying confirmation message or error message) or via redirection (in PHP, via header("Location: file.extension");).*/

?>


