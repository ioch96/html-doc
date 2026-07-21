<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $firstname = $_POST["firstname"] ?? "";
    $lastname  = $_POST["lastname"] ?? "";
    $age       = $_POST["age"] ?? "";

    echo "<h2>Τα στοιχεία που έλαβα:</h2>";
    echo "Όνομα: " . htmlspecialchars($firstname) . "<br>";
    echo "Επώνυμο: " . htmlspecialchars($lastname) . "<br>";
    echo "Ηλικία: " . htmlspecialchars($age);

} else {
    echo "Η σελίδα πρέπει να προσπελαστεί μέσω της φόρμας.";
}