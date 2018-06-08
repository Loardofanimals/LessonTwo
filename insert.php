<?php 
require_once 'configs/config.php';

    $student = Student::create([
    	#'id' => $_POST['id'],
    	'name' => $_POST['name']
    ]);
header('location:view.php?add=added');
 ?>