<html>
    <head>
	    <title> signup page</title>
	    <script>
function myFunction() {
    alert("you are registered successfully");
}
</script>
	 
	</head>
	
	<style type="text/css">

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
	body{

    background-image: url('us.gif');
    background-repeat: no-repeat;
       }
       input[type=text], input[type=password],input[type=date] {
       width: 50%;
   
     padding: 12px 20px;
     margin: 8px 0;
     display: inline-block;
     border: 1px solid #ccc;
     border-radius: 4px;
     box-sizing: border-box;
     }
     input[type=submit]{
  width: 50%;
  color: white;
  padding: 12px 20px;
  background-color:#4CAF50;
  position: all;
}
.div2 {
    width: 700px;
    height: 800px; 
    padding: 5px;
    border: 1px solid black;
    margin: auto;
     }


</style>
    <body align="center">  
	    <ul>
  <li><a href="home.html">Home</a></li>
  <li><a href="Loginform.php">Login</a></li>
  <li><a href="image-upload.php">Upload</a></li>
  <li><a href="fb.php">Feedback</a></li>
 
</ul> 

         <div class="div2">
         <h1> Create a new Account</h1>
		<form id=register action="signup_destination.php" method="POST" >
		    <label>First name</label>			   
			<input type="text" name="first_name" /><br>
			 <label>last name</label>	
			<input type="text" name="last_name" /><br>
			<label>Contact.no</label>						
			<input type="text" name="phone" /><br>
			 <label>Email ID</label>						
			<input type="text" name="Email" /><br>		
			 
			
                    <label>user name</label>	
				<input type="text" name="user" ><br>
                <label>Password</label>	
               <input type="password" name="pass" ><br>
                <label>Gender</label>	<br>
				<input type="radio" name="gender" value="male">Male
                 <input type="radio" name="gender" value="female">Female<br>
             		<br>	
				<input type="submit"  name="submit" value="submit" >
				
				</form>
               
               
	</body>
</html>
     		