<?php

//getting uploaded files
$file = $_FILES["file"];

//Saving files
move_uploaded_file($file["tmp_name"], "uploads/" . $file["name"]);

// redirecting back to home
 
header("Location: index.php");
