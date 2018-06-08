<?php 

 require_once 'configs/config.php';
 
    $id = $_GET['id'];
    $student = Student::find_by_id($id);
    $id = $student->id;
    $name = $student->name;


    $pageData = new StdClass();
    $pageData->title = "Edit";
    $pageData->content = "

    	<div class='container'>
          <center><legend>Edit Student</legend></center>
            <form action='update.php' method='post'>
                 <input type='text' name='id' value='$id' hidden>

	                <div class='form-group'>
                      <label for='name'>Student Name</label>
                      <input type='text' class='form-control' id='name'  name='name' value='$name' >
                  </div>

                <button type='submit' class='btn btn-info'>Update</button>
            </form>

    ";
    $data = require_once 'layouts/index.php';
    echo $data;

 ?>