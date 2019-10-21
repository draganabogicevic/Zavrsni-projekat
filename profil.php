<?php

include 'config.php';

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<title> YourProfile </title>
</head>

<body>
	<!--NavigationBar---->
	<!-- Grey navigation bar with right-aligned white links and orange navbar-brand-->
	<section id="nav-bar">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<span class="navbar-brand h1"
				style="color:orange; font-family: 'My Custom Font'; font-size:24px;">BelgradeRestos</span>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
				aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">

				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link text-white" href="index.php"> About <span
								class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item dropdown active">
						<a class="nav-link text-white dropdown-toggle" href="#" data-toggle="dropdown"> Restaurants <span
							class="sr-only">(current)</span></a>
								<div class="dropdown-menu bg-dark">
									<a class="dropdown-item text-white" href="ambar.php">Ambar</a>
									<a class="dropdown-item text-white" href="durmitor.php">Durmitor</a>
									<a class="dropdown-item text-white" href="dvajelena.html">Dva jelena</a>
									<a class="dropdown-item text-white" href="frans.html">Frans</a>
									<a class="dropdown-item text-white" href="lorenco.html">Lorenco i Kakalamba</a>
									<a class="dropdown-item text-white" href="lovac.html">Lovac</a>
									<a class="dropdown-item text-white" href="madera.html">Madera</a>
									<a class="dropdown-item text-white" href="malafabrikaukusa.html">Mala fabrika ukusa</a>
									<a class="dropdown-item text-white" href="sesirmoj.html">Sesir moj</a>
								</div>
					</li>
			        <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true): ?>
					<li class="nav-item active">
						<a class="nav-link text-white" href="Druga.html"> Reservation <span
								class="sr-only">(current)</span></a>
					</li>
					<?php endif; ?>
					<?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true): ?>
					<li class="nav-item active">
						<a class="nav-link text-white" href="Logout.php"> Logout <span
								class="sr-only">(current)</span></a>
					</li>
<<<<<<< HEAD
				
=======
					<?php else: ?>
					<li class="nav-item active">
								 <a class="nav-link text-white" href="index.php#section2"> Register/Login <span
									class="sr-only">(current)</span></a>
									</li>
                        <?php endif; ?>
					
					<li class="nav-item">
						<a class="nav-link text-white" href="#">EN/SR</a>
					</li>
>>>>>>> b3b31560bd2b8cb3a8064f4645cea77394ae4575

				</ul>
			</div>
		</nav>
	</section>
	<!--jumbotron section -->
	<section class="sectionProfil1" class="jumbotron jumbotron-fluid">
	
		<!--Container for Data from a database class="offset-md-3 col-md-5 offset-md-3 col-12"-->
		<div class="jumbo">
<?php
 $name = $_POST['name'];
 $password = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
 $email = $_POST['mail'];

<<<<<<< HEAD
$con = mysqli_connect('localhost', 'root', '', 'dbzavrsniprojekat');

if (mysqli_connect_errno()){
    echo "<p style='text-align:center'> Greska u konekciji sa bazom ".mysqli_connect_error()."</p>";
}
else{
   
=======
>>>>>>> b3b31560bd2b8cb3a8064f4645cea77394ae4575

	$query1 = "SELECT Id, Username, FirstLastName, Email, Password from korisnici WHERE Username=?";
	if ($stmt = $con->prepare($query1))
	{
		$username = $_POST['username'];
		$stmt->bind_param ('s', $username);
	if($stmt->execute())
	
    $stmt->bind_result($col1,$col2,$col3,$col4,$col5);

	if($stmt->fetch())
	{
        echo "<h2 style='text-align:center'>User with your username already exists in our database. </h2>";   
        echo "<h2 style='text-align:center;'><a style='color:orange'; href='index.php#section2'> Go back to Login </a></h2>";  
    }
	else
	{
		$stmt->free_result();
		$stmt->close();	
        
    $query = "INSERT INTO korisnici (Username, FirstLastName, Email, Password) VALUES
	(?,?,?,?)";
	
	if ($stmt = $con->prepare($query))
	{
		$stmt->bind_param ('ssss', $username,$name,$email,$password);

        if($stmt->execute()){
			// Records created successfully. Display them and redirect link to Login page
			echo "<h2 style='text-align:center'> You created your account. Please go to home page and login </h2>";
			echo "<div class='row'>";
			echo "<div style='padding:3%;'class='h3 border border-danger rounded bg-white offset-md-1 col-md-9 col-12'>";
			echo "<p> Ime i prezime: ".$name." </p>";
			echo "<p> Korisnicko ime: ".$username." </p>";
			echo "<p> Email adresa: ".$email." </p>";
			echo "<p style='text-align:center;'><a style='color:orange;' href='index.php#section2'> Go to Login </a></p>"; 
			echo '</div>';
			echo "</div>";
			
		} else{
			echo "Something went wrong. Please try again later.";
		}
	}
	
	}

    }
?>
		</div>

    </section>
</body>
</html>