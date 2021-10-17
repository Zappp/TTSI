<?php
include("includes/config.php");
session_start();
$_SESSION['zalogowany']=false ;
include("includes/header.php");

include("includes/functions.php");
$msg ='';$msg2 = '';$email = ''; 
if (isset($_POST['zaloguj'])) {
	$email = $_POST['mail'];
	$password = $_POST['password'];
	$checkbox = isset($_POST['check']);
 	if (empty($email)) {
		$msg = '<div class="error">Proszę wprowadzić email.</div>';
	}else if (empty($password)) {
	  	$msg2 = '<div class = "error">Proszę wprowadzić hasło.</div>';
	}else if (email_exists($email, $con)) {
		$pass = mysqli_query($con, "SELECT password FROM users WHERE email='$email'");
		$pass_w = mysqli_fetch_array($pass);
		$dpass = $pass_w['password'];
		if ($password !== $dpass) {
			$msg2 = '<div class = error> Niepoprawne hasło!</div>';
		}else{
		$_SESSION['mail']=$email;
		if($checkbox =='on'){
			setcookie('name',$email,time()+3000);
		}
		$result= mysqli_query($con, "SELECT id FROM users WHERE email='$email'");
		$wiersz = $result -> fetch_assoc();
		$_SESSION['id'] = $wiersz['id'];

		$_SESSION['zalogowany'] = true;


		if($_SESSION['zalogowany']==true){
			header("location: profile.php");
		}
	}		
	else{
		$msg = '<div class="error">Email nie istnieje!</div>';
	}
}

?>


		
		<div class="content">	
			<div class="registrationform" style="height: 400px; margin-top:100px;">
				<h2 align='center'> Zaloguj sie</h2>
				<form action ="login.php" method='post' >
				
				<div class='form-group'>
				<label>Email: </label><br>
				<input type='text' name='mail' placeholder='Wpisz email' class='form-control'/>
				<?php echo $msg; ?>
				</div><br>
					
				<div class='form-group'>
				<label>Haslo: </label><br>
				<input type='password' name='password' placeholder='Wpisz hasło' class='form-control'>
				<?php echo $msg2; ?>
				</div><br>

				<div class="form-group">
					<input type="checkbox" name="check" />
					&nbsp; Pozostań zalogowany
				</div><br>

				<center><input type='submit' value='Zaloguj' name='zaloguj' class='btn-succes'></center>
				
				</form>
			</div>				
		</div>
	</div>
<script>

	$(document).ready(function(){
			var navY = $('.nav').offset().top;
			
			var stickyNav = function(){
				var scrollY = $(window).scrollTop();
				
				if(scrollY > navY)
				{
					$('.nav').addClass('sticky');
					$('.content').css('padding-top', '70px');
				}
				else
				{
					$('.nav').removeClass('sticky');
					$('.content').css('padding-top', '10px');
				}
			};
			
			stickyNav();
			
			$(window).scroll(function(){
				stickyNav();
			});
		});
	
</script>
	
</body>

</html>