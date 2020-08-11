<?php

function Createdb(){
	$servername="localhost";
	$username="root";
	$password="";
	$databasename="cr13_Catalin_Sacadat_bigevents";

	$con=mysqli_connect($servername,$username,$password);

	if(!$con){
		die("Connection Failed:".mysqli_connect_error());
	}

	$sql="CREATE DATABASE IF NOT EXISTS $databasename";

	if(mysqli_query($con,$sql)){

		$con=mysqli_connect($servername,$username,$password,$databasename);

	$sql="CREATE TABLE IF NOT EXISTS Events(

					Event_id INT(11)NOT NULL AUTO_INCREMENT PRIMARY KEY,
					name VARCHAR(50),
					event_date DATE NOT NULL,
					event_time TIME,
					description VARCHAR(1000),
					imgage VARCHAR(200),
					capacity INT(11),
					email VARCHAR(20),
					phone INT(11),
					address VARCHAR(50),
					city VARCHAR(50),
					postal_code INT(11),
					type VARCHAR(30),
					url VARCHAR(200)
		)";

		if(mysqli_query($con,$sql)){

			return $con;
		}else{

			echo "Cannot Create table:" .mysqli_error($con);
		}		
	
	}else{
		echo "Error while creating database".mysqli_error($con);
	}
}

function CreatedbAdmin(){
	
	$servername="localhost";
	$username="root";
	$password="";
	$databasename="cr13_Catalin_Sacadat_bigevents";

	$con=mysqli_connect($servername,$username,$password);

	if(!$con){
		
		die("Connection Failed:".mysqli_connect_error());
	}

	$sql="CREATE DATABASE IF NOT EXISTS $databasename";

	if(mysqli_query($con,$sql)){

		$con=mysqli_connect($servername,$username,$password,$databasename);

		$sql="
		CREATE TABLE IF NOT EXISTS admin(
					admin_ID INT(11)NOT NULL AUTO_INCREMENT PRIMARY KEY,
					name VARCHAR(50),
					passwort VARCHAR(100),
					email varchar(50)
					
			)";

		
		if(mysqli_query($con,$sql)){
			$password = hash('sha256' , "admin");

			$sql = "SELECT * FROM admin WHERE name = 'admin'";
			$result=mysqli_query($GLOBALS['con'],$sql);

			if(mysqli_num_rows($result)==0){
				

				$sql="INSERT INTO admin(name,passwort, email)
					VALUES('admin','$password','admin@admin.at')";
				if(mysqli_query($GLOBALS['con'],$sql)){
					//TextNode("success","Record Successfully Inserted...!");
					
				}else{
					echo "ERROR";
				}
			}

			return $con;
		}else{
			echo "Cannot Create table:" .mysqli_error($con);
		}

	}else{
		echo "Error while creating database".mysqli_error($con);
	}
}