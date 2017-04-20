 <?php
   $host="localhost";
   $dbname="root";
   $pass="";
   $dbuser="commentsection";
   $conn=mysqli_connect($host,$dbname,$pass,$dbuser);
   if(mysqli_connect_errno())
   {
	   die("connection failed !".mysqli_connect_error());
	   
   }
 ?>
 <html>
    <head> 
	    <title> signup page </title>
	</head>
	<body>
	    <?php
	       if(isset($_POST['submit']))
		    {
			$first=$_POST['first_name'];
			$last=$_POST['last_name'];
			$phone=$_POST['phone'];
			$email=$_POST['Email'];
			$user=$_POST['user'];
			$pass=$_POST['pass'];
			$gender=$_POST['gender'];
            $name=$first.' '.$last;
           
                if(empty($first)||empty($last)||empty($email)||empty($phone)||
				empty($user)||empty($gender)||empty($pass))
							{
					echo "oops! can't leave any field blank";
				}
				
				else
				{
					$sql = "INSERT INTO signup(first,last,phone,email,user,pass,gender)
					       VALUES('$first','$last','$phone','$email','$user','$pass','$gender')";
				    $res=mysqli_query($conn,$sql);
					if(!$res)
					{
						die("query failed!". mysqli_error($conn));
					}
				else
				{
					echo "data inserted successfully !";
					  $message = "u have submitted data successfully";
                 echo "<script type='text/javascript'>alert('$message');
                     </script>";
                     
					
				}
				}
			}
			else
			{
				echo "form not submitted properly !";
			}


		?>
	</body>
</html>
