<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>signUpbabysitter</title> 
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="../web-project/style.css">

    </head>
  
    <body class="background" >  

        <div class="w3-top">
            <div class="w3-bar w3-white w3-wide w3-padding w3-card">
              <b> <img src="../web-project/cloud.png" width="50" height="50">babyhood<b>
              
              <div class="w3-right w3-hide-small">
             

              </div>
            </div>
          <br> <br> <br> <br> <br>
          

 <div class="signUp" >
        <h1>Sign Up</h1>
 <h3>Please fill in this form to create an account.</h3>
 <form method="post" action="http://localhost/webpr/signUpBabysitter.php">

<label for="FName"><b>First Name </b></label>
 <input type="text" placeholder="Enter First Name" name="Fname" required>
<br>
<br>
<label for="LName"><b>Last Name </b></label>
 <input type="text" placeholder="Enter Last Name" name="Lname" required>
 <br>
 <br>

 <label for="ID"><b> ID </b></label>
 <input type="text" placeholder="Enter ID" name="ID" required>
 <br>
 <br>

 <label for="age"><b>Age</b></label>
 <input type="text" placeholder="Enter age" name="age" required>

<br>
<br>
<Label>Gendre:</Label>
 <input type="radio" name="gender" value="male" checked> Male
 <input type="radio" name="gender" value="female"> Female
 <br>
 <br>

 <label for="email"><b>Email</b></label>
 <input type="email" placeholder="Enter Email" name="email" required>
<br>
<br>

 <label for="Pic"><b>Upload a photo </b></label>
 <input type ="file "onchange ="readURL(this)"accept="image/*" name="photo">
<br>
<br>
 <label for="psw"><b>Password</b></label>
<input type="password" placeholder="Enter Password" name="psw" required>
<br>
<br>
<label for="phone"><b>phone</b></label>
<input type="text" placeholder="Enter your phone munber" name="phone" required maxlength="10">
<br>
<br>

<label for="Location"><b>City  </b></label>
 <input type="text" placeholder="Enter City Location" name="Location" required>
<br>
<p><label for="bio"><b>bio:</b></label></p>
 <textarea id="bio " name="bio" rows="4" cols="50" required>
 </textarea>
 <br>
 <br>
 <div >
<input type="button" value="Cancel" class="details-button">

<input  name= "submit" type="submit" value="Signup" class="details-button">

<br>
<br>
</div>
</form>
</div>

<footer class="footer"> 
    <br>
    <a href="https://www.facebook.com/" ><img src="../web-project/facebook.png" width="18" height="18"></a>
    <a href="https://twitter.com/"><img src="../web-project/twitter.png" width="18" height="18"></a>
    <a href="https://www.instagram.com/"><img src="../web-project/instagram.png"width="18" height="18"></a>
   
   <p> babyhood &copy; <a href="#" >www.babyhood.com</a></p>
  </footer>

</body>
</html>



