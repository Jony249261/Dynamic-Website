<?php
	include('./mainInclude/header.php');

?>

<!-- Start course page -->
<div class="container-fluid bg-dark">
	<div class="row">
		<img src="./imaage/book.jpg" style="height:500px;width: 100%; object-fit: cover; box-shadow:10px;">
	</div>
</div>
<!-- End course page -->

<!-- Start main content -->
<div class="container">
	<h2 class="text-center my-4">
		Payment Status
	</h2>
	<form method="post" action="">
		<div class="form-group row">
			<label class="offset-sm-3 col-form-label">
				Order Id:
			</label>
			<div>
				<input type="text" class="form-control mx-3" name="">
			</div>
			<div>
				<input type="submit" class="btn btn-primary mx-4" value="View" name="">
			</div>
		</div>
	</form>
</div>
<!-- End main content -->

<?php
	include('./contact.php');
	include('./mainInclude/footer.php');
?>
