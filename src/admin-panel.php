<?php
	include("includes/header.php");
	include("includes/config.php");
	session_start();
	$name = $_SESSION['name']; 
	if (isset($name)) {
		echo "<div class = 'container'>";
		echo "<h3></br> Witaj w Panelu Admina </h3>";


					$result = mysqli_query($con, "SELECT * FROM users");
					$row=mysqli_num_rows($result);

					echo "</br></br><h2>Admin panel</h2></br>";
					echo "Zarejestrowanych uzytkownikow: ".$row;
					echo "<a href = 'admin-logout.php'><button class = 'btn-success' style = 'float: right;'>Wyloguj się </button></a>";
					echo "</br></br><table style='width:80%; border-spacing: 6mm'>";
						echo "  <tr>";
						echo "  <th>Nr</th>";
						echo "  <th>Firstname</th>";
						echo "  <th>Lastname</th>";
						echo "    <th>Email</th>";
						echo "    <th>Delete users</th>";
						echo "  </tr>";
						
						while($retrive=mysqli_fetch_array($result)){

							$id= $retrive['id'];
							$fname = $retrive['first_name'];
							$lname=$retrive['last_name'];
							$email= $retrive['email'];



							echo "  <tr align='center'>";
							echo "    <td>$id</td>";

							echo "    <td>$fname</td>";
							echo "   <td>$lname</td>";
							echo "    <td>$email</td>";
							echo " <td><a href ='delete_users.php?del=$id'><button class='btn'>Delete</a>";
							echo "  </tr>";
						}

	}else{
		header("location: admin.php");
	}
?>
