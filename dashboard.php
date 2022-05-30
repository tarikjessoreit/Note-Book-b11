<?php include "header.php"?>
<?php 

 ?>
	<section id="main">
	  <div class="container">
	  	<div class="row">
	  		<div class="col border-bottom my-2">
	  			<div class="h2">Dashboard</div>
	  		</div>
	  	</div>
	   	<div class="row">
	      <div class="col-lg-12 col-xl-12">
	      	


		    <!-- Data table for note list -->
		    <table id="notelist" class="table table-striped" style="width:100%">
		        <thead>
		            <tr>
		                <th>ID</th>
		                <th>Date time</th>
		                <th>Note Title</th>
		                <th>Note Description</th>
		                <th>Action</th>
		            </tr>
		        </thead>
		        <tbody>
		       <?php 
	      		$sql = "SELECT * FROM $TBL_NOTES WHERE user_ID = ".$_SESSION['userID'];

	      		$result = $conn->query($sql);

	      		if ($result->num_rows > 0) {
				  while($row = $result->fetch_assoc()) {?>

		            <tr>
		                <td><?php echo $row['ID'] ?></td>
		                <td><?php echo $row['nt_addeddate'] ?></td>
		                <td><?php echo $row['nt_title'] ?></td>
		                <td><?php echo $row['nt_description'] ?></td>
		                <td>
		                	<a href="edit-note.php?nid=<?php echo $row['ID'] ?>" class="btn btn-sm btn-success"><i class="fa-solid fa-edit"></i></a>
		                	<a href="delete-note.php?nid=<?php echo $row['ID'] ?>" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash-can"></i></a>
		                </td>
		            </tr>

		        <?php  }
				} else {
				  echo "<h5 class='text-center'>No Entry Found. Please <a href='add-note.php'>Add a Note</a>.</h5>";
				}?>
	      	
		            
		        </tbody>
		        <tfoot>
		            <tr>
		                <th>ID</th>
		                <th>Date time</th>
		                <th>Note Title</th>
		                <th>Note Description</th>
		                <th>Action</th>
		            </tr>
		        </tfoot>
		    </table>





	      </div>
	    </div>
	  </div>
	</section>
<?php include "footer.php"; ?>