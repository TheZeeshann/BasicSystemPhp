<?php 
include('include/header.php'); 
?>
	<div class="row" style="margin-top: 110px;">
		<div class="col s12 m6 offset-m3 l4 offset-l4">
			<div class="card" style="border-radius: 20px; border: 2px solid black">
				<div class="card-content">
					<h4 class="center">Login Form</h4>
					<form method="post">
						<div class="input-field">
							<i class="material-icons prefix">email</i>
							<input style="border-radius: 20px; border-color: black" type="text" name="email" id="email">
							<label for="email " style="font-family: Georgia">Enter your email</label>
						</div>

						<div class="input-field">
						    <i class="material-icons prefix">lock</i>
						    <input style="border-radius: 20px; border-color: black" type="password" name="password"  id="password">
						     <label for="password" style="font-family: Georgia">Enter your password</label>
					   </div>

					   <div class="input-field center">
							<input style="width: 50%; border-radius: 20px; font-family: Georgia" class="btn" type="submit" name="login" value="Login">
						</div>
					</form>
					Don't have an account? <a href="app.php">Register</a>
				</div>
			</div>
		</div>
	</div>
<?php 
include('include/footer.php'); 
?>