<?php 
include('include/header.php'); 
?>
	<div class="row" style="margin-top: 110px;">
		<div class="col s12 m6 offset-m3 l4 offset-l4">
			<div class="card" style="border-radius: 20px; border: 2px solid black">
				<h4 class="center">Register Form</h4>
					<div class="card-content">
						
						<form method="POST">
							<div class="input-field">
								<i class="material-icons prefix">person</i>
								<input style="border-radius: 20px; border-color: black" type="text" name="name" id="name" value="Zeeshan Siddiqui" style="font-size: 20px;">
								<label for="name" style="font-family: Georgia">Enter your name</label>
							</div>
							<div class="input-field">
								<i class="material-icons prefix">email</i>
								<input style="border-radius: 20px; border-color: black" type="text" name="email" id="email" value="info.zeeshansiddiqui@gmail.com">
								<label for="email">Enter your email</label>
							</div>
							<div class="input-field">
								<i class="material-icons prefix">lock</i>
								<input style="border-radius: 20px; border-color: black" type="password" name="password" id="password" value="1234">
								<label for="password" style="font-family: Georgia">Enter your password</label>
							</div>
							<div class="input-field center">
								<input style="width: 40%; border-radius: 20px; font-family: Georgia" class="btn" type="submit" name="login" value="Register">
							</div>
						</form>
						Already have an account? <a href="login.php">Login</a>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php 
include('include/footer.php'); 
?>