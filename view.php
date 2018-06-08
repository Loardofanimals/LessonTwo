<?php 
require_once 'configs/config.php';
$pagData = new StdClass();
$pageData->title = "View";
$pageData->content ="
  <center><legend>Student Detail</legend></center>";
  
  if(isset($_GET['delete'])){
    $pageData->content .="<p class='alert alert-success'>Successfully Delete!</p>";
  } 

  if(isset($_GET['update'])){
    $pageData->content .="<p class='alert alert-success'>Successfully Update!</p>";
  } 

  if(isset($_GET['add'])){
    $pageData->content .="<p class='alert alert-success'>Successfully Added!</p>";
  } 

$pageData->content .="<table class='table table-hover'>
 <thead>
    <tr>
      <th scope='col'>#</th>
      <th scope='col'>Name</th>
      <th scope='col'></th>
    </tr>
  </thead>
";
    $rows = Student::all();
    foreach ($rows as $row) {
      $id = $row->id;
      $name = $row->name;
      $pageData->content .= "<tr>
      <td> $id </td> 
      <td> $name </td>
      <td><a href='edit.php?id=$id' class='btn btn-info'>Edit</a></td>
     <td><a href='destory.php?id=$id' class='btn btn-danger'>Delete</a></td>
      </tr>";
    }
$pageData->content .="</table>";
$datas = require_once 'layouts/index.php';
echo $datas;

 ?>