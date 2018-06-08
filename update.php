<?php 

     require_once 'configs/config.php';

    $student = Student::find($_POST['id']);
    $student->name = $_POST['name'];
    $student->save();
    header('location:view.php?update=updated');

 ?>