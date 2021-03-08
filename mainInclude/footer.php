<!-- Start Footer -->

	<footer class="container-fluid bg-dark text-center p-2">
		<small class="text-white">
			Copyright &copy; 2020 || Designed By Jony Islam || <a href="#" data-toggle="modal" data-target="#exampleModaladminlogin" style="text-decoration:none">Admin Login</a>
		</small>
	</footer>

<!-- End Footer -->

<!-- Start Vertically centered modal registration -->
	<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Student Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<!-- Start student registration form -->
        <form>
        	 <div class="form-group">
			    <i class="fas fa-user"></i>
			    <label for="stuname" class="pl-2 font-weight-bold"> Name</label>
			    <input type="text" class="form-control" id="stuname" name="stuname" placeholder="Name">
			  </div>
			  <div class="form-group">
			  	<i class="fas fa-envelope"></i>
			    <label for="stuemail1" class="pl-2 font-weight-bold" >Email address</label>
			    <input type="email" class="form-control" id="stuemail1" name="stuemail1" placeholder="Email">
			    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			  </div>
			  <div class="form-group">
			  	<i class="fas fa-key"></i> 
			    <label for="stupassword" class="pl-2 font-weight-bold">New Password</label>
			    <input type="password" class="form-control" id="stupassword" name="stupassword" placeholder="New Password">
			  </div>
</form>
<!-- End student registration form -->

      </div>
      <div class="modal-footer">
      	<button type="button" class="btn btn-primary" onclick="addStu()" name="stusignup">Sign Up</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<!-- End Vertically centered modal registration -->


<!-- Start Vertically centered modal Login -->
	<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModallogin" tabindex="-1" aria-labelledby="exampleModalLabellogin" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabellogin">Student Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<!-- Start student login form -->
        <form id="stuloginform">
			   
			  <div class="form-group">
			  	<i class="fas fa-envelope"></i>
			    <label for="stulogemail1" class="pl-2 font-weight-bold" >Email address</label>
			    <input type="email" class="form-control" id="stulogemail1" name="stulogemail1" placeholder="Email">
			  </div>
			  <div class="form-group">
			  	<i class="fas fa-key"></i> 
			    <label for="stulogpassword" class="pl-2 font-weight-bold">Password</label>
			    <input type="password" class="form-control" id="stulogpassword" name="stulogpassword" placeholder="Password">
			  </div>
</form>
<!-- End student login form -->

      </div>
      <div class="modal-footer">
      	<button type="button" class="btn btn-primary" id="stulogbtn">Login</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        
      </div>
    </div>
  </div>
</div>
<!-- End Vertically centered modal login -->


<!-- Start Vertically centered modal admin Login -->
	<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModaladminlogin" tabindex="-1" aria-labelledby="exampleModalLabeladminlogin" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabeladminlogin">Admin Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<!-- Start student admin login form -->
        <form id="adminloginform">
			   
			  <div class="form-group">
			  	<i class="fas fa-envelope"></i>
			    <label for="adminlogemail1" class="pl-2 font-weight-bold" >Email address</label>
			    <input type="email" class="form-control" id="adminlogemail1" name="adminlogemail1" placeholder="Email">
			  </div>
			  <div class="form-group">
			  	<i class="fas fa-key"></i> 
			    <label for="adminlogpassword" class="pl-2 font-weight-bold">Password</label>
			    <input type="password" class="form-control" id="adminlogpassword" name="adminlogpassword" placeholder="Password">
			  </div>
</form>
<!-- End student admin login form -->

      </div>
      <div class="modal-footer">
      	<button type="button" class="btn btn-primary" id="adminlogbtn">Login</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        
      </div>
    </div>
  </div>
</div>
<!-- End Vertically centered modal admin login -->



<script src="js/jquery.min.js"></script>
<script src="js/poper.min.js"></script>
<script src="js/bootstrap.min.js"></script>	
<script src="js/all.min.js"></script>
<script src="js/slide.js"></script>	
</body>
</html>