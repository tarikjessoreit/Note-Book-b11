<?php include "header.php"?>

<?php 
if (isset($_GET['nid'])) {
	$noteID = $_GET['nid'];

	// update data
	if (isset($_POST['delbtn'])) {
		$ctxt = $_POST['ctext'];

		if ($ctxt == "DELETE") {
			 $sql = "DELETE FROM $TBL_NOTES WHERE ID = $noteID AND user_ID = ".$_SESSION['userID'];

			 if ($conn->query($sql) === true) {
				$msg = "Note Deleted!. Back to <a href='notes.php'>Note List</a>";
			}else{
				$err = "Note Delete faild. ".$conn->error;
			}
		}else{
			$err = "Faild to delete note. Please Type DELETE for delete this note ";
		}

		
	}

}else{
	header('location:notes.php');
}




?>

	<section id="main">
	  <div class="container">
	  	<div class="row">
	  		<div class="col border-bottom my-2">
	  			<div class="h2">Delete Note</div>
	  		</div>
	  	</div>
	    <div class="row">
	      <div class="col-lg-12 col-xl-11">
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
	      	
	      	<form action="" class="was-validated" method="post">
	      		<div class="mb-3">
				  <label for="ctext" class="form-label">Type "DELETE" for confirm</label>
				  <input type="text" name="ctext" class="form-control" id="ctext" placeholder="Enter DELETE for confirm..." required>
				</div>
				<div class="mb-3">
				  <input type="submit" name="delbtn" class="btn btn-danger px-4" value="Delete">
				</div>
	      	</form>

	      </div>
	    </div>
	  </div>
	</section>
<?php include "footer.php"; ?>