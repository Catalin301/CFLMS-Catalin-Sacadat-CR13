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
  		<button type="button" class="btn-close float-left"><i class="fa fa-times"></i></button>
  		<h5 class="text-white py-2" style="text-align: right">Menu</h5>	
  	</div>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Events</a>
      </li>
    </ul>
    <ul class="navbar-nav">
      <li class="nav-item hide">
        <a class="nav-link" href="https://events.wien.info/en/"><i class="fas fa-phone-volume phone"></i>+43-1-211 14-0</a>
      </li>
      <li class="nav-item hide">
        <a class="nav-link" href="https://events.wien.info/en/"><i class="far fa-envelope email"></i>info@wien.info</a>
      </li>
          <li class="nav-item">
        <a class="nav-link" href="login.php" id="login">Admin Log In</a>
      </li>
     
  </div>
</nav>

<section class="search-bar">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 mx-auto">
				<form>
					<div class="p-1 bg-light shadow-sm">
						<div class="input-group">
							<input type="search" placeholder="Search for Events & Videos" class="form-control border-0 bg-light">
							<div class="input-group-append">
								<div class="btn-group">
								  <button type="button" class="btn btn-outline-secondary dropdown-toggle smallscreen" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								    Search
								  </button>
								  <div class="dropdown-menu">
								    <a class="dropdown-item" href="#"><i class="fas fa-bezier-curve mr-2"></i>Events</a>
								    <a class="dropdown-item" href="#"><i class="far fa-play-circle mr-2"></i>Videos</a>
								    <a class="dropdown-item" href="#"><i class="fas fa-camera mr-2"></i>Photos</a>
								  </div>
								</div>
								<div class="input-group-append">
									<button type="submit" class="btn btn-link"><i class="fas fa-search"></i></button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="row">
<?php 
			if(!isset($_POST['read'])){
				
                $result=getData();
              if($result){
                while($row=mysqli_fetch_assoc($result)){?>


	<div class="col-md-4 d-flex" >
		<div class="single-blog">
			<p class="blog-meta"><?php echo $row['event_date'];?><span><?php echo $row['event_time'];?></span></p>
			<img src="<?php echo $row['imgage']; ?>" alt="" style="width: 600px;
	height: 450px;">
			<h2><a href="#"><?php echo $row['name'];?></a></h2>
			
			<p><a href="view.php?value=<?php echo $row['Event_id'];?>" class="read-more-btn">Read more</a>
				<span><i>Capacity:</i><?php echo $row['capacity'];?><br><i>Type:</i><?php echo $row['type'];?></span></p>
		</div>
	</div>


<?php
                	}
              	}
            }

          	?>
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