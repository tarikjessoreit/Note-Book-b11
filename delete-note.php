<?php include "header.php"?>

	<section id="main">
	  <div class="container">
	  	<div class="row">
	  		<div class="col border-bottom my-2">
	  			<div class="h2">Delete Note</div>
	  		</div>
	  	</div>
	    <div class="row">
	      <div class="col-lg-12 col-xl-11">
	      	
	      	<form action="" class="was-validated">
	      		<div class="mb-3">
				  <label for="notetitle" class="form-label">Type "DELETE" for confirm</label>
				  <input type="text" name="notetitle" class="form-control" id="notetitle" placeholder="Enter DELETE for confirm..." required>
				</div>
				<div class="mb-3">
				  <input type="submit" name="updatebtn" class="btn btn-danger px-4" value="Delete">
				</div>
	      	</form>

	      </div>
	    </div>
	  </div>
	</section>
<?php include "footer.php"; ?>