<?php
include("includes/config.php");
include("includes/header.php");
session_start();
include("includes/functions.php");
$msg ='';$msg2 = '';$fname = '';

if (isset($_POST['zaloguj'])) {
	$fname = $_POST['name'];
	$password = $_POST['password'];
 	if (empty($fname)) {
		$msg = '<div class="error">Proszę wprowadzić imię.</div>';
	}else if (empty($password)) {
	  	$msg2 = '<div class = "error">Proszę wprowadzić hasło.</div>';
	}else{
		$pass = mysqli_query($con, "SELECT password FROM admin WHERE name='$fname'");
		$pass_w = mysqli_fetch_array($pass);
		$dpass = $pass_w['password'];
		if ($password !== $dpass) {
			$msg2 = '<div class = error> Niepoprawne hasło!</div>';
		}else{
		$_SESSION['name']=$fname;
		header("location: admin-panel.php");
		}
	}		
}

?>

		<div class="content">	
			<div class="registrationform" style="height: 400px; margin-top:100px;">
				<h2 align='center'>Panel logowania Administratora</h2>
				<form action ="admin.php" method='post' >
				
				<div class='form-group'>
				<label>Nazwa użytkownika</label><br>
				<input type='text' name='name' class='form-control' 
				placeholder="Użytkownik"
				value = '<?php echo $fname ?>'/>  
				<?php echo $msg; ?>
				</div><br>
					
				<div class='form-group'>
				<label>Haslo: </label><br>
				<input type='password' name='password' placeholder='Wpisz hasło' class='form-control'>
				<?php echo $msg2; ?>
				</div><br>

				<center><input type='submit' value='Zaloguj' name='zaloguj' class='btn-succes'></center>
				
				</form>
			</div>				
		</div>
	</div>
</body>
</html>