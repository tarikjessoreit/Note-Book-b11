<?php include "header.php"?>

	<section id="main">
	  <div class="container">
	  	<div class="row">
	  		<div class="col border-bottom my-2">
	  			<div class="h2 text-center">
	  				<input type="text" class="form-control" onkeyup="loadData(this.value)">
	  			</div>
	  		</div>
	  	</div>
	    <div class="row">
	      <div class="col-lg-12 col-xl-12" id="res">

	      </div>
	    </div>
	  </div>
	</section>


	<script type="text/javascript">
			function loadData(value){
				var xmlhttp = new XMLHttpRequest();
			    xmlhttp.onreadystatechange = function() {
			      if (this.readyState == 4 && this.status == 200) {
			        document.getElementById("res").innerHTML = this.responseText;
			      }
			    };

			    xmlhttp.open("GET", "search-res.php?v="+value, true);
			    xmlhttp.send();
			}
	</script>
<?php include "footer.php"; ?>