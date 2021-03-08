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
	<div class="container mt-5">
		<h1 style="text-align:center">Course Details</h1>
		<div class="row">

			<div class="col-md-4">
				<img src="./imaage/c3.jpg" class="card-img-top">
			</div>
			<div class="col-md-8">
				<div class="card-body">
					<h5 class="card-title">
						Course Name: Learn Guitar
					</h5>
					<p class="card-text">Description: Lorem ipsum dolar sit amet consectetur adipisicing elit nostrum provident.</p>
					<p class="card-text">Duration: 10Days</p>
					<form method="post" action="">
						<p class="card-text d-inline">
							Price: <small><del>&#8377 2000</del></small> <span class="font-weight-bolder">&#8377 2000</span>
						</p>
						<button type="submit" class="btn btn-primary text-white font-weight-bolder float-right" name="buy">Buy Now</button>
					</form>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th scope="col">Lesson No:</th>
							<th scope="col">Lesson Name:</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">
								1
							</th>
							<td>Introduction</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
<!-- End main content -->

<?php

	include('./mainInclude/footer.php');
?>
