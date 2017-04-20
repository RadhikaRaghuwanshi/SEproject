<?php
 function setComment($conn){
 	if(isset($_POST['commentSubmit']))
 	{
       $uid=$_POST['uid'];
 	   $date = $_POST['date'];
 	   $message = $_POST['message'];

 	   $sql = "INSERT INTO comment (uid,date,message) VALUES ('$uid','$date','$message')";
 	   $result = $conn-> query($sql);
 }
}

function getComment($conn)
{
	$sql = "select * from comment";
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()){
		$id = $row['uid'];
		$sql2 = "SELECT * FROM signup WHERE id ='$id'";
	    $result2 = $conn->query($sql2);
	    if($row2 = $result2->fetch_assoc())
	    {
          echo "<div class='comment-box'><p>";
          echo  $row2['user']."<br>";
          echo  $row['date']."<br>"; 
          echo nl2br($row['message']) ;
          echo "</p></div>";
	    }
	    
	}
}

function getLogin($conn)
{ 
    if(isset($_POST['loginSubmit'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];

	$sql = "SELECT * FROM signup WHERE user='$user' AND pass='$pass'";
	$result = $conn->query($sql);
	if(mysqli_num_rows($result) > 0){
		if($row = $result->fetch_assoc()){
	       $_SESSION['id'] = $row['id'];
	       header("Location:index.php?loginsuccess");
	       exit();
	   }
	}else{
		 header("Location: Loginform.php?loginfailed");
	       exit();

	}
  }
}

function  userlogout($conn){
	if(isset($_POST['logoutSubmit'])){
		//session_start();
		session_destroy();
		header("Location: index.php");
		exit();
	}
  
}


function getusername($conn){


$query = "SELECT * FROM signup WHERE id ='".$_SESSION['id']."' ";
$result = $conn->query($query);

while($row = $result->fetch_assoc())
{
  
  echo  "<center><h2>Hello ".$row['user']." Submit your Report</h2></center>";

}


}







?>