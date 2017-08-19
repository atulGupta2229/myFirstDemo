<?php
	$ur=$_POST["un"];
   $pw=$_POST["pw"];
   session_start();
      $dbhost = 'localhost:3306';
      $dbuser = 'root';//'paradori_atul';
      $dbpass = '';//'kq90LHNqC^$I';
     //$db="paradori_para";
   	$conn =mysqli_connect($dbhost, $dbuser, $dbpass, "parador") or
      die('Could not connect: ' . mysql_error());
      $qry="select * from logdata where email='$ur'" or die("Error in querry!");
      $result=mysqli_query($conn, $qry);
      $data=mysqli_fetch_array($result);
      if($pw==$data["password"]){
      $_SESSION["user"]=$data["name"];
      $_SESSION["email"]=$data["email"];
      $_SESSION["number"]=$data["number"];
      mysqli_close($conn);
      header("Location: index.php");
      }
      else{
      mysqli_close($conn);
      header("Location: lgin.php");  
      }
?>