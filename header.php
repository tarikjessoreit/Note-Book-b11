<?php include "config.php"; ?>
<?php include "functions.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard | Note Book</title>
	
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>

	<!-- datatable css -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css">

	<link rel="stylesheet" href="assets/style.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg bg-light">
	  <div class="container-fluid">
	    <a class="navbar-brand font-weight-bold" href="dashboard.php"> 
	    	<i class="fa-solid fa-book"></i> NoteBook
	    </a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	        <li class="nav-item">
	          <a class="nav-link" aria-current="page" href="notes.php">Note List</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="add-note.php">Add Note</a>
	        </li>
	      </ul>
	     
	     <div class="dropdown">
		  <div class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
		    <i class="fa-solid fa-user"></i> Mr. Hablu
		  </div>
		  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
		    <li><a class="dropdown-item" href="#">Settings</a></li>
		    <li><a class="dropdown-item" href="#">Profile</a></li>
		    <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
		  </ul>
		</div>
	    </div>
	  </div>
	</nav>

