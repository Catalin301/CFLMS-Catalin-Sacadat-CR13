<?php
	ob_start();
	session_start();
	require_once("database.php");

	$con=Createdb();
  $con=CreatedbAdmin();

function getData(){
	$sql="SELECT * FROM events";

	$result=mysqli_query($GLOBALS['con'],$sql);

	if(mysqli_num_rows($result)>0){
		return $result;
	}
}


if( isset($_SESSION['admin'])!="" ){
 header("Location: index.php" ); // redirects to home.php
}
include_once 'database.php';
$error = false;


// it will never let you open index(login) page if session is set
if ( isset($_SESSION['admin' ])!="" && $_SESSION['admin' ] == 1) {
 header("Location: admin.php");
 exit;
} else if ( isset($_SESSION['admin' ])!="" ) {
 header("Location: admin.php");
 exit;
}  

$error = false;

if( isset($_POST['btn-login']) ) {


 $email = trim($_POST['email']);
 $email = strip_tags($email);
 $email = htmlspecialchars($email);

 $pass = trim($_POST[ 'pass']);
 $pass = strip_tags($pass);
 $pass = htmlspecialchars($pass);
 

 if(empty($email)){
  $error = true;

 } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
  $error = true;
 }

 if (empty($pass)){
  $error = true;
  $passError = "Please enter your password." ;
 }


 if (!$error) {
 
  $password = hash( 'sha256', $pass); // password hashing

  $res=mysqli_query($con, "SELECT admin_ID, name, passwort FROM admin WHERE email='$email'" );
  $row=mysqli_fetch_array($res, MYSQLI_ASSOC);
  $count = mysqli_num_rows($res); // if uname/pass is correct it returns must be 1 row
 
  if( $count == 1 && $row['passwort' ]==$password && $email == "admin@admin.at") {
   $_SESSION['admin'] = $row['admin_ID'];

   header( "Location: index.php");
  } else if( $count == 1 && $row['passwort' ]==$password) {
   $_SESSION['admin'] = $row['admin_ID'];
   header( "Location: index.php");
  }else {
   $errMSG = "Incorrect Credentials, Try again..." ;
  }
 
 }

}

?>

<!--SELECT * FROM pet_shop WHERE age >= 8
SELECT * FROM pet_shop WHERE age < 8 -->


<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Cache-control" content="no-cache">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="style.css">

    <title>Code-Review-13</title>
  </head>
  <body>

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
      
            <a class="navbar-brand" href="#"><img src="" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-trigger="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <div class="offcanvas-header mt-3">
                <button type="button" class="btn-close float-left"><i class="fas fa-time"></i></button>
                <h5 class="text-white py-2" style="text-align: right">Menu</h5> 
              </div>
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Events</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="admin.php">Pricing</a>
                </li>
              </ul>
              <ul class="navbar-nav">
                <li class="nav-item hide">
                  <a class="nav-link" href="#"><i class="fas fa-phone-volume phone"></i>+43-1-211 14-0</a>
                </li>
                <li class="nav-item hide">
                  <a class="nav-link" href="#"><i class="far fa-envelope email"></i>info@wien.info</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" id="login">Admin Log In</a>
                  </li>
            </div>
          </nav>

<div class="bg-imgL">      
<div class="logreg">
  <div>
    <div class="header">
      <h2>Login</h2>
    </div>
    
    <form id="form1" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete= "off">

         <?php
        if ( isset($errMSG) ) {
          echo  $errMSG; ?>
                   
              <?php
            }
          ?>

			<div class="input-group">
				<label>Email</label>
				<input id="log_user" type="email" name="email" value="">
			</div>
		
			<div class="input-group">
				<label>Password</label>
				<input id="log_password"type="password" name="pass">
			</div>
			
			<div class="input-group">
				<button type="submit" name="btn-login" class="btnL" id="btnLog">Login</button>
			</div>
				<p>
					Only for Admin <a href="login.php">Sign in</a>
				</p>
		</form>
	</div>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
    
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>

    <script src="main.js"></script>

  </body>
</html>

<?php ob_end_flush(); ?>