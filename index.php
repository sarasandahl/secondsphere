<?php

//require 'classes/db.php';

$pdo = require 'partials/connect.php'; //behöver den vara här?

// ==============================================
// Skapa vy nedan

include 'partials/header.php';


// våran apps vyer här
?>

<h1>SecondSphere</h1>
<p>Ett utplockat sortiment av secondhandkläder</p>
<p>Vill du sälja hos oss?</p>

<?php

//$userView->renderAllUsersAsList($userModel->getAllUsers());
// gör om för tre tabeller!

include 'partials/footer.php';