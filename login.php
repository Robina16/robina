
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
            <li><a href="login.php">LOGIN</a></li>
            <li><a href="sign up.php">SIGN UP</a></li>
            <li><a href="product.php">PRODUCTS </a></li>
            <li><a href="about.php">ABOUT US</a></li>
          </ul>
        </nav>
        <form action="login.php" method="post">

   

   <?php if (isset($_GET['error'])) { ?>

	   <p class="error"><?php echo $_GET['error']; ?></p>

   <?php } ?>

   <label>User Name</label>

   <input type="text" name="uname" placeholder="User Name"><br>

   <label>Password</label>

   <input type="password" name="password" placeholder="Password"><br> 
	<a href="">Login</a>

</form>

</body>
</html>