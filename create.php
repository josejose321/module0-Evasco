<?php 
include "config.php";
// if the form's submit button is clicked, we need to process the form
	if (isset($_POST['submit'])) {
		// get variables from the form
		$first_name = $_POST['firstname'];
		$last_name = $_POST['lastname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$gender = $_POST['gender'];

		//write sql query

		$sql = "INSERT INTO `users`(`firstname`, `lastname`, `email`, `password`, `gender`) VALUES ('$first_name','$last_name','$email','$password','$gender')";

		// execute the query

		$result = $conn->query($sql);

		if ($result == TRUE) {
      echo '<i style="color:green;font-size:18px;font-family:calibri ;">
      New record created successfully. </i>';
		}else{
			echo "Error:". $sql . "<br>". $conn->error;
		}

		$conn->close();

	}



?>

<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="design.css">
  </head>
<body>

<h2>Signup Form</h2>

<form action="" method="POST">
  <fieldset>
    <legend><h3>Personal information:</h3></legend>
    First name:<br>
    <input type="text"placeholder="Firstname" name="firstname" >
    <br>
    Last name:<br>
    <input type="text"placeholder="Lastname" name="lastname">
    <br>
    Email:<br>
    <input type="email"placeholder="email" name="email">
    <br>
    Password:<br>
    <input type="password" name="password">
    <br>
    Gender:<br>
    <input type="radio" name="gender" value="Male">Male
    <input type="radio" name="gender" value="Female">Female
    <br><br>
    <input type="submit" name="submit" value="submit">
  </fieldset>
</form>

</body>
</html>