<?php
include("includes/config.php");

//session_destroy(); LOGOUT

if(isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn = $_SESSION['userLoggedIn'];
}
else {
	header("Location: register.php");
}

?>
<?php
	if(isset($_POST['updateButton'])){
				
	}
	class Update{
		private $con;
		private $errorArray;
		public function update($age, $dob, $cn)
		 {
					
			if(empty($this->errorArray) == true) {
				//Insert into db
	  			return $this->updateUserDetails($age, $dob, $cn);
					}
					else {
						return false;
					}

				}
			private function updateUserDetails($age, $dob, $cn) {
					
					$date = date("Y-m-d");
					
					$result = mysqli_query($this->con, "INSERT INTO add VALUES ('', '$age', '$dob', '$cn')");

					return $result;
				}
			}
?>


<html>
<head>
	<title>Welcome!</title>
	<link rel="stylesheet" type="text/css" href="assets/css/index.css">
</head>

<body>
	<div id="background">
		<div id="updateForm">

			<form id="updateForm" action="success.html" method="POST">
				<div id="inputContainer">
					<h1>Update Your Details</h1>
					<div id="age">Age<input type="text" name="age"></div>
					<div id="dob">Date Of Birth <input type="date" name="DOB"></div>
					<div id="cn">Contact Number<input type="tel" name="Contact"></div>
					<button type="submit" name="updateButton">Update</button>
			   </div>
				
		   </form>
		</div>
		
	</div>
   
</body>

</html>