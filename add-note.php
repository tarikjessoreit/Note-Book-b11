<?php include "header.php"?>
<?php 
	if (isset($_POST['addnotebtn'])) {
		$nt_uid = $_SESSION['userID'];
		$nt_addedDatetime = date('Y-m-d H:i:s');
		$nt_title = $_POST['notetitle'];
		$nt_desc = $_POST['notedescription'];

		$sql = "INSERT INTO $TBL_NOTES(user_ID, nt_addeddate, nt_title, nt_description, nt_status) VALUES ($nt_uid, '$nt_addedDatetime', '$nt_title', '$nt_desc', 'active')";

		if ($conn->query($sql) === true) {
			$msg = "New Note Added Successfull. Goto to <a href='notes.php'>Note List</a>";
		}else{
			$err = "Failed to Add a New Note: . ".$conn->error;
		}
	}
 ?>

	<section id="main">
	  <div class="container">
	  	<div class="row">
	  		<div class="col border-bottom my-2">
	  			<div class="h2">Add New Note</div>
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
				  <input type="text" name="notetitle" class="form-control" id="notetitle" placeholder="Enter your note title here..." required>
				</div>
				<div class="mb-3">
				  <label for="notedescription" class="form-label">Note Desciption</label>
				  <textarea name="notedescription" class="form-control" id="notedescription" rows="3" required></textarea>
				</div>

				<div class="mb-3">
				  <input type="submit" name="addnotebtn" class="btn btn-primary px-4" value="Add Note">
				</div>
	      	</form>

	      </div>
	    </div>
	  </div>
	</section>
<?php include "footer.php"; ?>