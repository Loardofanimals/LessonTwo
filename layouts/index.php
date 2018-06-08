<?php 
 return "<!DOCTYPE html>
<html>
<head>
	<title>$pageData->title</title>
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
	<link rel='stylesheet' href='css/template.css'>
	<link rel='stylesheet' href='css/ani.css'>
	<link href='//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css' rel='stylesheet' id='bootstrap-css'>
<script src='//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
<script src='//code.jquery.com/jquery-1.11.1.min.js'></script>
<script src='js/template.js'></script>

<link href='//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css' rel='stylesheet' id='bootstrap-css'>
<script src='//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js'></script>
<script src='//code.jquery.com/jquery-1.11.1.min.js'></script>

</head>
<body>

<nav class='navbar navbar-inverse sidebar' role='navigation'>
    <div class='container-fluid'>
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class='navbar-header'>
			<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#bs-sidebar-navbar-collapse-1'>
				<span class='sr-only'>Toggle navigation</span>
				<span class='icon-bar'></span>
				<span class='icon-bar'></span>
				<span class='icon-bar'></span>
			</button>
			<a class='navbar-brand' href='#'>Student Record</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class='collapse navbar-collapse' id='bs-sidebar-navbar-collapse-1'>
			<ul class='nav navbar-nav'>
				<li class='active'><a href='home.php'>Home<span style='font-size:16px;' class='pull-right hidden-xs showopacity glyphicon glyphicon-home'></span></a></li>
				<li ><a href='form.php'>Add Student<span style='font-size:16px;' class='pull-right hidden-xs showopacity glyphicon glyphicon-plus'></span></a></li>
				<li ><a href='view.php'>View Student<span style='font-size:16px;' class='pull-right hidden-xs showopacity glyphicon glyphicon-list'></span></a></li>
				<li ><a href='view.php'>Edit Student<span style='font-size:16px;' class='pull-right hidden-xs showopacity glyphicon glyphicon-edit'></span></a></li>
				<li ><a href='view.php'>Delete Student<span style='font-size:16px;' class='pull-right hidden-xs showopacity glyphicon glyphicon-trash'></span></a></li>
			</ul>
		</div>
	</div>
</nav>
<div class='main'>
$pageData->content
</div>

<script src='https://code.jquery.com/jquery-3.2.1.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>

</body>
</html>";
?>
