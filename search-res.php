<?php include "config.php"; ?>

	      	<?php 
	      	if (isset($_GET['v'])) {
	      	
	      		$s = $_GET['v'];
	      		$sql = "SELECT * FROM $TBL_NOTES WHERE nt_title like '%$s%' AND user_ID = ".$_SESSION['userID'];

	      		$result = $conn->query($sql);

		      		if ($result->num_rows > 0) {
					  while($row = $result->fetch_assoc()) {?>

						<!-- item -->
					  	<div class="card mb-4 shadow">
						  <div class="card-header bg-warning bg-warning row m-0">
						    <h4 class="col"><?php echo $row['nt_title'] ?></h4>
						    <div class="text-end col"><?php echo $row['nt_addeddate'] ?></div>
						  </div>
						  <div class="card-body">
						    <p class="card-text"><pre><?php echo $row['nt_description'] ?></pre></p>
						  </div>
						  <div class="card-footer text-muted text-end">
						   <a href="edit-note.php?nid=<?php echo $row['ID'] ?>" class="btn btn-success"><i class="fa-solid fa-edit"></i> Edit</a>
						   <a href="delete-note.php?nid=<?php echo $row['ID'] ?>" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i> Delete</a>
						  </div>
						</div>


					<?php  }
					} else {
					  echo "<h5 class='text-center'>No Entry Found. Please <a href='add-note.php'>Add a Note</a>.</h5>";
					}

				}?>
	      	