
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>
<div class="wrappper1">
      <header>
           <div class="logo">
               <h1 style="color:white;">WELCOME TO OUR SHOP</h1>
           </div>
        <nav>
          <ul>
            <li><a href="home.php">HOME</a></li>
            <li><a href="login.php">LOG IN</a></li>
            <li><a href="sign up.php">SIGN UP</a></li>
            <li><a href="uploadentries.php">PRODUCTS </a></li>
            <li><a href="uploadentries.php">ABOUT US</a></li>
          </ul>
        </nav>
        <div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">CUSTOMER DETAILS</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-6">
			<form method="POST" action=""> 
				<div class="form-group"> 
					<label>ID</label>
					<input type="text" class="form-control" name="id" required="required"/>
				</div>
				<div class="form-group">
					<label>Last Name</label>
					<input type="text" class="form-control" name="lastname" required="required"/>
				</div>
				<div class="form-group">
					<label>First Name </label>
					<input type="text" class="form-control" name="firstname" required="required"/>
				</div>
                <div class="form-group">
					<label>Middle Name</label>
					<input type="text" class="form-control" name="mi" required="required"/>
				</div>
                <div class="form-group">
					<label>Contact No.</label>
					<input type="text" class="form-control" name="contactno" required="required"/>
				</div>
				<div class="form-group">
					<label> Address</label>
					<input type="text" class="form-control" name="address" required="required"/>
				</div>
                <div class="form-group">
					<label>User Name </label>
					<input type="text" class="form-control" name="username" required="required"/>
				</div>
                <div class="form-group">
					<label>Password</label>
					<input type="text" class="form-control" name="password" required="required"/>

                <p><input type="checkbox" id="toggle"/> I agree with the terms and conditions.</p>
				<button class="btn btn-primary" id="register" name="register">Register</button>
			</form>
		</div>
		<div class="col-md-6">
		<?php include 'register.php'?>
		</div>
	</div>
<script>
var checkbox = document.getElementById("toggle");
var register = document.getElementById("register");
register.disabled = true;
checkbox.onchange = function(){
	register.disabled = !this.checked;
}
</script>
<html>
<body>


</body>
</html>