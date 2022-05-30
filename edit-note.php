<?php include "header.php"?>

<?php 
if (isset($_GET['nid'])) {
	$noteID = $_GET['nid'];

	// update data
	if (isset($_POST['updatebtn'])) {
		$nt_title = $_POST['notetitle'];
		$nt_desc = $_POST['notedescription'];

		 $sql = "UPDATE $TBL_NOTES SET nt_title = '$nt_title', nt_description = '$nt_desc' WHERE ID = $noteID AND user_ID = ".$_SESSION['userID'];

		 if ($conn->query($sql) === true) {
			$msg = "Note Updated!. Back to <a href='notes.php'>Note List</a>";
		}else{
			$err = "Note Update faild. ".$conn->error;
		}
	}




	$sql = "SELECT * FROM $TBL_NOTES WHERE ID = $noteID AND user_ID = ".$_SESSION['userID'];
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	  while($row = $result->fetch_assoc()) {
	    $ntitle = $row['nt_title'];
	    $ndisc = $row['nt_description'];
	  }
	} else {
	  header('location:notes.php');
	}
}else{
	header('location:notes.php');
}




?>

	<section id="main">
	  <div class="container">
	  	<div class="row">
	  		<div class="col border-bottom my-2">
	  			<div class="h2">Edit Note</div>
	  		</div>
	  	</div>
	    <div class="row">
	      <div class="col-lg-12 col-xl-11">
	      	
	      	<form action="" class="was-validated" method="post">
	      		<?php 
            		if (isset($err)) {
            			echo '
                		<div class="alert alert-warning alert-dismissible fade show" role="alert">
					 	  '.$err.'
						  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>';
            		}

            		if (isset($msg)) {
            			echo '
                		<div class="alert alert-success alert-dismissible fade show" role="alert">
					 	  '.$msg.'
						  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>';
            		}
            	 ?>
	      		<div class="mb-3">
				  <label for="notetitle" class="form-label">Note Title</label>
				  <input type="text" name="notetitle" class="form-control" id="notetitle" placeholder="Enter your note title here..." value="<?php echo  $ntitle;?>" required>
				</div>
				<div class="mb-3">
				  <label for="notedescription" class="form-label">Note Desciption</label>
				  <textarea name="notedescription" class="form-control" id="notedescription" rows="3" required><?php echo  $ndisc;?></textarea>
				</div>


				<div class="mb-3">
				  <input type="submit" name="updatebtn" class="btn btn-primary px-4" value="Update Note">
				</div>
	      	</form>

	      </div>
	    </div>
	  </div>
	</section>
<?php include "footer.php"; ?>