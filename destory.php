<?php 

    require_once 'configs/config.php';
    $alert = "alos";
    $id = $_GET['id'];
    #echo $id;
    $student = Student::find($id);
    $student->delete();
    header('location:view.php?delete=deleted');
 ?>