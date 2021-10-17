<?php
session_start();

include("includes/config.php");
include("includes/header.php");
include("includes/functions.php");

$msg= ""; $msg2=""; $msg3="";$msg4="";$msg5="";$msg6="";$msg7="";$msg8="";$msg9=""; 
if(isset($_POST['submit'])){
	$firstname=$_POST['fname'];
	$lastname=$_POST['lname'];
	$email=$_POST['mail'];
	$date= $_POST['dob'];
	$adress= $_POST['adress'];
	$password=$_POST['pass'];
	$password2= $_POST['pass2'];
	$checkbox = isset($_POST['check']);
	
	$good =true;
	
	
	if(strlen($firstname) < 3){
		$msg= '<div >Imie musi miec wiecej niz 3 litery!</div>';
		$good= false;
	}

	if(strlen($lastname) < 3){
		$good= false;
		$msg2= '<div >Nazwisko musi miec wiecej niz 3 litery!</div>';
	}
	
	
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$good= false;
		$msg3= "<div class = 'error'>Wpisz poprawnie adres email!</div>";
	}
	
	if($good==false){echo "  po email var  false";}
	if(email_exists($email, $con)){
		$good= false;
		$msg9= "<div class = 'error'>Email istnieje w bazie!</div>";
	}
	if($good==false){echo "  po email istnieje  false";}
	
	if(empty($date)){
		$good= false;
		$msg4=  "<div class = 'error'>Wybierz date!</div>";
	}
	if(empty($password)){
		$good= false;
		$msg5=  "<div class = 'error'>Haslo powinno miec conajmniej 8 znakow!</div>";
	}
	if(empty($adress)){
		$good= false;
		$msg8=  "<div class = 'error'>Pole adres nie moze byc puste!</div>";
	}

	if(strlen($password)< 8 ){
		$good= false;
		$msg5=  "<div class = 'error'>Haslo powinno miec conajmniej 8 znakow!</div>";
	}
	if($password !==$password2){
		$good= false;
		$msg6=  "<div class = 'error'>Hasla nie sa identyczne!</div>";
	}
	if($checkbox!='on'){
		$good= false;
		$msg7=  "<div class = 'error'>Zaznacz regulamin!</div>";
	}
	
	if($good!=false){$con->query("INSERT INTO users ( first_name, last_name , email, adress, password, date) 
		VALUES ( '$firstname','$lastname', '$email', '$adress', '$password' , '$date')");
	
		echo "$firstname ";
		echo "$lastname ";
		echo "$adress ";
		echo "$date ";
		echo "$password ";
		echo "$email ";
		$msg8 ="Dziekujemy za rejestracje";}
	
	
}

?>

		
		<div class="content">
			<div class="registrationform">
				<h2 align='center'> Zarerejestruj sie</h2>
				<form method="post" enctype="multipart/form-data" >
				
				<div class="form-group">
				<label>Imie: </label><br>
				<input type="text" name="fname" placeholder="Imie" class="form-control"><?php echo $msg;?>
				</div><br>
				
				
				
					
				<div class="form-group">
				<label>Nazwisko: </label><br>
				<input type="text" name="lname" placeholder="Wpisz nazwisko" class="form-control"><?php
				echo	$msg2;
				?>
				</div><br>
				
				
					
				<div class='form-group'>
				<label>Email: </label><br>
				<input type='text' name='mail' placeholder='Wpisz email' class='form-control'><?php echo"$msg3";?>
				</div><br>
				
				
						
				<div class='form-group'>
				<label>Data urodzenia: </label><br>
				<input type='date' name='dob' class='form-control'><?php echo"$msg4";?>
				</div><br>
					
				
				
				
					
				<div class='form-group'>
				<label>Haslo: </label><br>
				<input type='password' name='pass' placeholder='Wpisz haslo' class='form-control'><?php echo"$msg5";?>
				</div><br>
				
				
						
				<div class='form-group'>
				<label>Wpisz ponownie haslo: </label><br>
				<input type='password' name='pass2' placeholder='Wpisz ponownie haslo' class='form-control'>	<?php echo"$msg6";?>
				</div><br>
			
				
				<div class='form-group'>
				<label>Adres: </label><br>
				<input type='text' name='adress' placeholder='Wpisz adres' class='form-control'><?php echo"$msg8";?>
				</div><br>
				
				<div class='form-group'>
				<input type='checkbox' name='check'>
				Zgadzam sie z regulaminem<?php echo"$msg7";?>
				</div><br>
				<center><input type='submit' value='Zarejestruj sie' name='submit' class='btn-succes'></center>
				
				
				
				</form>
				
			</div>
							
		</div>

		
	</div>
		
	
		<script> src="jquery-3.3.1.min.js"></script>	
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