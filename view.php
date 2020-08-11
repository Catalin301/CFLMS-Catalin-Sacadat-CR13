<?php
	require_once("database.php");
	require_once("component.php");

	$con=Createdb();
	$con=CreatedbAdmin();

	if (isset($_GET['value'])) {

	    $result=getData($_GET['value']);?>
	    <?php
	    	if($result){
            	while($row=mysqli_fetch_assoc($result)){?>
				
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
					     
					    </ul>
					    <ul class="navbar-nav">
					      <li class="nav-item hide">
					        <a class="nav-link" href="https://events.wien.info/en/"><i class="fas fa-phone-volume phone"></i>+43-1-211 14-0</a>
					      </li>
					      <li class="nav-item hide">
					        <a class="nav-link" href="https://events.wien.info/en/"><i class="far fa-envelope email"></i>info@wien.info</a>
					      </li>
					      <li class="nav-item">
        					<a class="nav-link" href="#" id="login">Admin Log In</a>
      						</li>
					  </div>
					</nav>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

 	<section>
 		<div class="circle circle1">
 			<img src="<?php echo $row['imgage']; ?>" alt="">
 		</div>
 		<div class="circle circle2">
 			<img src="<?php echo $row['imgage']; ?>" alt="">
 		</div>
 		<div>
 			<h2><?php echo $row['name'];?></h2>
 			<p><?php echo $row['description'];?></p>
 		</div>
 		<span><i style="color:blue;">Capacity: <?php echo $row['capacity'];?> People</i><br><i style="color:blue;">Type: <?php echo $row['type'];?></i></span></p>
 		<a href="<?php echo $row['url'];?>"><?php echo $row['url'];?></a>
 	</section>
					<!--<div class="view_info">

						<div class="col-md-4">
							<div class="single-blog">
								<p class="blog-meta"><?php echo $row['event_date'];?><span><?php echo $row['event_time'];?></span></p>
								<img src="<?php echo $row['imgage']; ?>" alt="">
								<h2><a href="#"><?php echo $row['name'];?></a></h2>
								<p class="blog-text"><?php echo $row['description'];?></p>
								<p><a href="view.php?value=<?php echo $row['Event_id'];?>" class="read-more-btn">Read more</a>
									<span><i class="fa fa-thumbs-o-up"></i><?php echo $row['capacity'];?><i class=""></i><?php echo $row['type'];?></span></p>
							</div>
						</div>

					</div>-->

		<?php
		
				}
			}
		?>
	    
	<?php
	} else {

	}

	function getData($id){
		$sql="SELECT * FROM events WHERE Event_id=$id";

		$result=mysqli_query($GLOBALS['con'],$sql);

		if(mysqli_num_rows($result)>0){
			return $result;
		}
	}


?>
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