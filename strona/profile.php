<?php
include("includes/header.php");
include("includes/config.php");
session_start();
include("includes/functions.php");

if (logged_in()) {
	header("location:login.php");
}else if (isset($_COOKIE['name'])) {
	$email = $_COOKIE['name'];
	$result = mysqli_query($con, "SELECT first_name, last_name FROM users WHERE email = '$email'");
	$retrive=mysqli_fetch_array($result);
	$first_name=$retrive['first_name'];
	$last_name =$retrive['last_name'];
	?>
	
	<title>Strona profilowa</title>
	<link href="style1.css" rel="stylesheet" type="text/css"/>
	</head> 
	<body id = 'body-bg'>
		<div class="container" style="width:1100px; padding-top:10px;background-color:#fff; margin-top: 20px; margin-bottom:20px; margin-left: 200px; margin-right: 200px; height: 900px">
		<h2 align="center"> Witaj <?php echo ucfirst($first_name)." ".ucfirst($last_name)?></h2>
		<a href="logout.php"><button class="btn-succes" style="float:right; margin-top: 20px">Wyloguj się</button></a>
			</br></br>


				

		</div>
		</body>
	    <?php
}else{
	$email = $_SESSION['mail'];
	$result = mysqli_query($con, "SELECT first_name, last_name FROM users WHERE email = '$email'");
	$retrive=mysqli_fetch_array($result);
	$first_name=$retrive['first_name'];
	$last_name =$retrive['last_name'];
	?>
	<title>Strona profilowa</title>
	<link href="style1.css" rel="stylesheet" type="text/css"/>
	</head> 
	<body id = 'body-bg'>
		<div class="container" style="padding-top:10px;background-color:#fff; margin-top: 20px; margin-bottom:20px;margin-left: 200px;margin-right: 200px; width:1100px; height: 900px">
		<h2 align="center"> Witaj <?php echo ucfirst($first_name)." ".ucfirst($last_name)?></h2>
		<a href="logout.php"><button class="btn-succes" style="float:right; margin-top: 20px">Wyloguj się</button></a>
			</br></br>

			<div class="logowanie">
					<h6> MOJE KONTO:</h6>
					<?php
					
					$result = mysqli_query($con, "SELECT * FROM users WHERE id='$_SESSION[id]'");    
											
					
					$row=mysqli_num_rows($result);
					if($_SESSION['zalogowany']!=true){echo "dupa";}
				
					if($row>0)
					{						
						while($retrive=mysqli_fetch_array($result)){
							
							$first_name = $retrive['first_name'];
							$last_name=$retrive['last_name'];
							$email= $retrive['email'];
								
							
					}}
					
						echo "Imie: $first_name<br>";
						echo "<br>Nazwisko: $last_name<br>";
						echo "<br>Email: $email<br>";
					

					?>
					</br>
					<form action="edit.php" method="post">
					<input type="submit"  value="Edytuj" class='btn' style="width:200px"/>
				
				</form>
				<br>

				
				<form action="generatepdf.php" method="post">
			
				<input type="submit" value="Generuj PDF" class='btn' style="width:200px" /></form>
					
		</div>
		</div>
	</body>
	<?php
}
?>