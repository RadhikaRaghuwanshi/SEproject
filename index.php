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
<link rel="stylesheet" type="text/css" href="indexstyle2.css">
<link rel="stylesheet" type="text/css" href="indexstyle1.css">




</head>

<body>

<div class="img">
<ul>
  <li><a href="home.html">Home</a></li>
  <li><a href="Loginform.php">Login</a></li>
  <li><a href="image-upload.php">Upload</a></li>
  <li><a href="fb.php">Feedback</a></li>
 
</ul> 

<br>


  <iframe id="airpano_frame" width="500" height="450"
  src="http://www.click360.in/virtualtour/lordganeshfestival/lalbaugcharaja/2016/lalbaugcharaja2016.html" frameborder="0" marginheight="0" marginwidth="0" scrolling="no" framespacing="0"> </iframe>
<br><br>

<?php

       if(isset($_SESSION['id'])){
            echo "<form method='POST' action='".setComment($conn)."'>
                <input type='hidden' name='uid' value='".$_SESSION['id']."'>
                 <input type='hidden' name='date' value='".date('y-m-d H:i:s')."'>
                <textarea name='message'></textarea><br>
                <button type='submit' name='commentSubmit'>Comment</button>
             </form>";
          }else{
              echo "You need to be logged in to comment!
              <br>";
         }
 
?>

  <div class="desc">
  <form id="report" action="loginvalidation.php">
  <button id="myBtn" type="submit" >Report</button>
  </form>
  </div>


<?php
getComment($conn);
?>
</div>


 

<br><br>

</body>
</html>