<?php require_once '../includes/session.php'; ?>
<?php include '../includes/db_connect.php'; ?>
<?php require_once '../includes/functions.php' ; ?>

<?php
	// Form Validation
	$errors = array();
	$required_fields = array('name', 'password');
	
	foreach($required_fields as $fieldname){
	  if(!isset($_POST[$fieldname]) || empty($_POST[$fieldname] )){
		$errors[] = $fieldname;
	  }
	}
	
	
	if(!empty($errors)){
		redirect_to("index.php");
	}
?>

<?php
	$username = mysql_prep($_POST['name']);
	$password = mysql_prep($_POST['password']);
	$hashed_password = $password;
	
	$query = "SELECT id, username FROM admins ";
	$query .= "WHERE username = '{$username}' ";
	$query .= "AND hashed_password = '{$hashed_password}' ";
	
	$result_set = mysqli_query($conn, $query);
	confirm_query($result_set);
	
	if(mysqli_num_rows($result_set) == 1){
		$found_user = mysqli_fetch_array($result_set);
		$_SESSION['user_id'] = $found_user['id'];
		$_SESSION['username'] = $found_user['username'];
		redirect_to("../pages/content.php");
	}
	else{
		redirect_to("index.php");
	}
	
?>

<?php mysqli_close($connection); ?>