<!DOCTYPE html>

<html>

<head>

    <title>LOGIN</title>

    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>


     <form action="login.php" method="post">

     <div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
            <form >
                    <br>
                   
                      
                
					<label for="chk" aria-hidden="true" ><MARK>WELCOME</MARK></label>
                    <label for="chk" aria-hidden="true" ALIGN="center">TO
                        COLLEGE MANAGEMENT SYSTEM</label>
					
				</form>
			</div><br>

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

        <div class="login">
				<form action="login.php" method="post">
					<label for="chk" aria-hidden="true">Login</label>

        <input type="text" name="uname" placeholder="User Name" required=""><br>

        <input type="password" name="password" placeholder="Password" required=""><br> 

        <button type="submit">Login</button>

     </form>

</body>

</html>