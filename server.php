<?php 

session_start();

	// variable declaration
	$username = "";
	$email = "" ;
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'foodlovers');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		//GithubGist
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
		$mobilenumber = mysqli_real_escape_string($db, $_POST['mobilenumber']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }
		if (empty($mobilenumber)) { array_push($errors, "Mobilenumber is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5 ($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO persons(name,email,password,mobile_number) values ('$username','$email','$password','$mobilenumber') ";
					  
			mysqli_query($db, $query);

			//$_SESSION['password'] = $password;
			$_SESSION['email'] = $email;
			//$_SESSION['success'] = "You are now logged in";
			header('location: category.php');
		}

	}
	if (isset($_POST['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: home.php");
	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
		//$password1=$_SESSION['password'];
		if (empty($email)) {
			array_push($errors, "Email is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password= md5  ($password);
			$query = "SELECT email,password from persons where email='$email' and password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
	
				$_SESSION['username'] = $username;
				$_SESSION['email'] = $email;
				//$_SESSION['success'] = "You are now logged in";
				header('location: category.php');
			}else {
				array_push($errors, "Wrong email/password combination");
			}
		}
	}
	if (isset($_POST['addtocart'])){
	//$menuid = mysqli_real_escape_string($db, $_POST['menuid']);
	//$quantity = mysqli_real_escape_string($db, $_POST['quantity']);
	$menuid=$_POST['order'];
	$quantity=$_POST['quantity'];
	$emailid= $_SESSION['email'] ;
	$_SESSION['order'] = $menuid;
	$_SESSION['quantity'] = $quantity;
	$query= "Insert into orders set persons_id=(select id from persons where email='$emailid'),menu_id=(select id from menu where id='$menuid'),
	area_id=(select id from areas where id=(select area_id from restaurants where id=(select id from restaurants where id=(select res_id from menu where id='$menuid')))),
	res_id=(select id from restaurants where id=(select res_id from menu where id='$menuid')),
	quantity='$quantity',
	menu_price=(select price from menu where id='$menuid')";
	mysqli_query($db, $query);
	header('location: cart.php');
	}
	if (isset($_POST['adminlogin'])) {
		$username = mysqli_real_escape_string($db, $_POST['user']);
		$password = mysqli_real_escape_string($db, $_POST['pass']);
		//$password1=$_SESSION['password'];
		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			//$password=($password);
			$query = "SELECT name,password from admin where name='$username' and password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
	
				$_SESSION['user'] = $username;
				$_SESSION['pass'] = $password;
				//$_SESSION['success'] = "You are now logged in";
				header('location: adminorder.php');
			}else {
				array_push($errors, "Wrong email/password combination");
			}
		}
	}
	if (isset($_POST['managerlogin'])) {
		$email = mysqli_real_escape_string($db, $_POST['man']);
		$password = mysqli_real_escape_string($db, $_POST['pas']);
		$areaid = mysqli_real_escape_string($db, $_POST['area']);
		//$password1=$_SESSION['password'];
		if (empty($email)) {
			array_push($errors, "Email is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}
		if (empty($areaid)) {
			array_push($errors, "AreaID is required");
		}

		if (count($errors) == 0) {
			//$password=($password);
			$query = "SELECT email_id,password,area_id from area_manager where email_id='$email' and password='$password' and area_id='$areaid'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
	
				$_SESSION['man'] = $email;
				$_SESSION['pas'] = $password;
				$_SESSION['area'] = $areaid;
				//$_SESSION['success'] = "You are now logged in";
				header('location: areamanagerorder.php');
			}else {
				array_push($errors, "Wrong email/password/areaid combination");
			}
		}
	}
		if (isset($_POST['lg'])) {
		
			$areaid=$_SESSION['area'];

		
			//$password=($password);
			$query = "delete from orders where area_id=(select area_id from area_manager where area_id='$areaid')";
			$results = mysqli_query($db, $query);

		
	
				
				//$_SESSION['success'] = "You are now logged in";
				header('location: areamanager.php');
		
	}
	

?>	