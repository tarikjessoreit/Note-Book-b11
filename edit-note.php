<?php include "header.php"?>

	<section id="main">
	  <div class="container">
	  	<div class="row">
	  		<div class="col border-bottom my-2">
	  			<div class="h2">Edit Note</div>
	  		</div>
	  	</div>
	    <div class="row">
	      <div class="col-lg-12 col-xl-11">
	      	
	      	<form action="" class="was-validated">
	      		<div class="mb-3">
				  <label for="notetitle" class="form-label">Note Title</label>
				  <input type="text" name="notetitle" class="form-control" id="notetitle" placeholder="Enter your note title here..." required>
				</div>
				<div class="mb-3">
				  <label for="notedescription" class="form-label">Note Desciption</label>
				  <textarea name="notedescription" class="form-control" id="notedescription" rows="3" required></textarea>
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