<?php
  date_default_timezone_set('Asia/Kolkata');
  include 'comment.inc.php';
  include 'dbh.inc.php';
  session_start();
?>



<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #F48A12;
}

li {
    float: left;
}

li a {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 100px;
    text-decoration: none;
}

li a:hover{
    background-color: white;
    color: #F48A12;
}
    
input[type=text], input[type=password] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

body
{
background-image: url('us.gif');
background-repeat: no-repeat;

}


button{

  width : 100px;
  height: 30px;
  background-color: #282828;
  border: none;
  color: #fff;
  font-family: arial;
  font-weight: 400;
  cursor: pointer;
  margin-bottom: 30px;
}


 
</style>
<body align="center">
<ul>
  <li><a href="home.html">Home</a></li>
  <li><a href="Loginform.php">Login</a></li>
  <li><a href="image-upload.php">Upload</a></li>
  <li><a href="fb.php">Feedback</a></li>
 
</ul> 

<?php
    echo "<form method='POST' action='".getLogin($conn)."' >
     
    <input type='text' placeholder='username' name='user'><br>
   
    <input type='password' placeholder='password' name='pass'><br><br>
    <button type='submit' name='loginSubmit'>Login</button>
    </form>";

              if(isset($_SESSION['id'])){
            echo "<form method='POST' action='".userLogout($conn)."' >
     <button type='submit' name='logoutSubmit'>Logout</button>
    </form>";
          }

          else{
              echo "You are NOT logged in! please enter credentials";
         }
   
?>

  

  <a href="signup_source.php"><h1>if not created? create it</h1></a>
<br/><br/>

</body>
</html>

