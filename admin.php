<?php
  require_once("database.php");
  require_once("component.php");

  $con=Createdb();

  if(isset($_POST['create'])){
    createData();
  }

  if(isset($_POST['update'])){
  UpdateData();
}

if(isset($_POST['delete'])){
  deleteRecord();
}


  function createData(){

  $E_name=textboxValue("name");
  $E_event_date=textboxValue("event_date");
  $E_event_time=textboxValue("event_time");
  $E_description=textboxValue("description");
  $E_image=textboxValue("imgage");
  $E_capacity=textboxValue("capacity");
  $E_email=textboxValue("email");
  $E_phone=textboxValue("phone");
  $E_address=textboxValue("address");
  $E_city=textboxValue("city");
  $E_postal_code=textboxValue("postal_code");
  $E_type=textboxValue("type");
  $E_url=textboxValue("url");



  if($E_name && $E_event_date && $E_event_time && $E_description && $E_image && $E_capacity && $E_email && $E_phone && $E_address && $E_city && $E_postal_code && $E_type && $E_url){

    $sql="INSERT INTO events(name,event_date,event_time,description,imgage,capacity,email,phone,address,city,postal_code,type,url)
        VALUES('$E_name','$E_event_date','$E_event_time','$E_description','$E_image','$E_capacity','$E_email','$E_phone','$E_address','$E_city','$E_postal_code','$E_type','$E_url')";

    if(mysqli_query($GLOBALS['con'],$sql)){
      TextNode("success","Record Successfully Inserted...!");
      
    }else{
      echo "ERROR";
    }

  }else{
    TextNode("error","Every Textbox has to have Data");
  }
}

function textboxValue($value){
  $textbox=mysqli_real_escape_string($GLOBALS['con'],trim($_POST[$value]));

  if(empty($textbox)){
    return false;
  }else{
    return $textbox;
  }
}

function TextNode($classname,$msg){
  $element="<h6 class='$classname'>$msg</h6>";

  echo "$element";
}

function getData(){
  $sql="SELECT * FROM events";

  $result=mysqli_query($GLOBALS['con'],$sql);

  if(mysqli_num_rows($result)>0){
    return $result;
  }
}

function UpdateData(){
  $eve_id=textboxValue("Event_id");
  $eve_name=textboxValue("name");
  $eve_date=textboxValue("event_date");
  $eve_time=textboxValue("event_time");
  $eve_shortd=textboxValue("description");
  $eve_image=textboxValue("imgage");
  $eve_capacity=textboxValue("capacity");
  $eve_email=textboxValue("email");
  $eve_phone=textboxValue("phone");
  $eve_address=textboxValue("address");
  $eve_city=textboxValue("city");
  $eve_postal=textboxValue("postal_code");
  $eve_type=textboxValue("type");
  $eve_url=textboxValue("url");

 echo $eve_date;

  if($eve_name && $eve_date && $eve_time && $eve_shortd && $eve_image && $eve_capacity && $eve_email && $eve_phone && $eve_address && $eve_city && $eve_postal && $eve_type && $eve_url){

    $sql="
      UPDATE events SET name ='$eve_name', 
                          event_date ='$eve_date',
                          event_time  ='$eve_time',
                          description ='$eve_shortd',
                          imgage='$eve_image',
                          capacity='$eve_capacity',
                          email='$eve_email',
                          phone='$eve_phone',
                          address='$eve_address', 
                          city='$eve_city',
                          postal_code='$eve_postal',
                          type='$eve_type',
                          url = $eve_url WHERE Event_id='$eve_id';
    ";
    echo $sql;
    if(mysqli_query($GLOBALS['con'],$sql)){
      TextNode("success","Data Successfully Updated");
    }else{
      TextNode("error","Unable to Update Data");
    }

  }else{
      TextNode("error","Any Parameter is not set");
  }
}

function deleteRecord(){
  $eve_id=(int)textboxValue("Event_id");

  $sql="DELETE FROM events WHERE Event_id = $eve_id";

  if(mysqli_query($GLOBALS['con'],$sql)){
    TextNode("success","Record Deleted");
  }else{
    TextNode("error","Unable to delete Record");
  }

}

function setID(){
  $getid = getData();
  $id=0;
  if($getid){
    while($row=mysqli_fetch_assoc($getid)){
    $id=$row['Event_id']; 
    }
  }
  return($id + 1);
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
        <a class="nav-link" href="add.php">Add</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="edit.php">Edit</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="delete.php">Delete</a>
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
        <a class="nav-link" href="logout.php" id="login">Log out</a>
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
<br>
    <main>
        <div class="d-flex justify-content-center ">
          <form action="" method="post" class="w-50" >

            <div class="d-flex justify-content-center">

              <?php buttonElement("btn-read","btn btn-primary","<i class='fas fa-sync'></i>","read","data-toggle='tooltip' data-placement='bottom' title='Read' "); ?>

            </div>
          </form>
        </div>
<br>
<br>
<br>
<br>
<br>
        <div class="d-flex justify-content-center table-data">
          <table class="table table-striped table-dark">
            <thead class="thead-dark">
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Date</th>
                <th>Time</th>
                <th>Image</th>
                <th>URL</th>
                <th>Description</th>
                <th>Capacity</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>City</th>
                <th>Postal</th>
                <th>Type</th>
              </tr>
            </thead>
            <tbody id="tbody">

          <?php
          
          if(isset($_POST['read'])){
                $result=getData();

              if($result){
                while($row=mysqli_fetch_assoc($result)){?>

              <tr>
                <td data-id="<?php echo $row['Event_id'];?>"><?php echo $row['Event_id'];?></td>
                <td data-id="<?php echo $row['Event_id'];?>"><?php echo $row['name'];?></td>
                <td data-id="<?php echo $row['Event_id'];?>"><?php echo $row['event_date'];?></td>
                <td data-id="<?php echo $row['Event_id'];?>"><?php echo $row['event_time'];?></td>
                <td data-id="<?php echo $row['Event_id'];?>"><img id="img-admin" src="<?php echo $row['imgage'];?>"></td>
                <td data-id="<?php echo $row['Event_id'];?>"><?php echo $row['url'];?></td>
                <td data-id="<?php echo $row['Event_id'];?>"><?php echo $row['description'];?></td>
                <td data-id="<?php echo $row['Event_id'];?>"><?php echo $row['capacity'];?></td>
                <td data-id="<?php echo $row['Event_id'];?>"><?php echo $row['email'];?></td>
                <td data-id="<?php echo $row['Event_id'];?>"><?php echo $row['phone'];?></td>
                <td data-id="<?php echo $row['Event_id'];?>"><?php echo $row['address'];?></td>
                <td data-id="<?php echo $row['Event_id'];?>"><?php echo $row['city'];?></td>
                <td data-id="<?php echo $row['Event_id'];?>"><?php echo $row['postal_code'];?></td>
                <td data-id="<?php echo $row['Event_id'];?>"><?php echo $row['type'];?></td>

                <td><i class="fas fa-edit btnedit" data-id="<?php echo $row['Event_id'];?>"></i></td>
              </tr>

            <?php
                }
              }
            }

            ?>
            </tbody>
          </table>
        </div>
    </main>
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
