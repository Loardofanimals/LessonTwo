<?php 
$pagData = new StdClass();
$pageData->title = "Form";
$pageData->content = "

<center><legend>Add Studnet</legend></center>
<div class='well col-md-8 col-md-offset-2'>

  <form action='insert.php' method='post'>
  <div class='form-group'>
    <label for='name'>Student Name</label>
    <input type='text' class='form-control' id='name' placeholder='Student Name' name='name' required>
  </div>
  <button type='submit' class='btn btn-primary'>Submit</button>
  </form>

</div>

";
$datas = require_once 'layouts/index.php';
echo $datas;
 ?>