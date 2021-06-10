<?php 
    $lamo = 'Add user';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>StudentZone: <?php echo "$lamo" ?></title>
<link href="css/styles.css" rel="stylesheet" type="text/css" />

</head>
<body>

<?php
	$pageTitle = 'Add Movie';
	require_once './header.php';
	

    
	
	if (! empty($_POST)) {
			
		
		//Connect to DB

		$host = 'studmysql01.fhict.local';
		$database = 'dbi355504';
		$dsn = 'mysql:host=$host;dbname=$database; charset=utf8';
		$username = 'dbi355504';
		$password = '123456';

		$message = '';

		 //Create connection
		$mysqli = new mysqli($host, $username, $password,$database);



		 //Check connection
		if ($mysqli->connect_error) {
		    die("Connection failed: " . $mysqli->connect_error);
		} 
	
        //Insert our data

		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$newUser = $_POST['username'];
		$password = $_POST['password'];
		

		$sql = "INSERT INTO `user` (`username`, `password`, `firstName`, `lastName`) VALUES ('{$newUser}', '{$password}', '{$firstName}', '{$lastName}');";

		$insert = $mysqli->query($sql);

		//Print response from MySQL 
		if ($insert) {
			echo "Success! Row ID: {$mysqli->insert_id}";
		} else {
			die("Error: {$mysqli->errno} : {$mysqli->error}");
		}

		//Close our connection
		$mysqli->close();

	} //end if !empty POST
?>
  
         
      
       
        <ul>
        
      
         
 <div class="word-container">
  <h1>Sign Up</h1>
</div>
<div class="register-container">
  <form action="./add.php" method="POST" name=addUSer>
    <div class="fname">
      <label>
        <input type="text" placeholder="First Name" name="firstname" size="20">
      </label>
    </div>
    <div class="lname">
      <label>
        <input type="text" placeholder="Last Name" name="lastname" size="20">
      </label>
    </div>
    <div class="userid">
      <label>
        <input type="text" placeholder="Username" name="username" size="50">
      </label>
    </div>
    <div class="pwd">
      <label>
        <input type="password" placeholder="Password" name="password" size="50">
      </label>
    </div>
    <div class="email">
      
    </div>
    <div class="btn">
      <button type="submit">Create Account</button>
    </div>
  </form>
</div>
		
        
		
	
        </ul>
        
    
    
  
	

<!--Include FOOTER-->
<?php
	require_once './footer.php';
?>
