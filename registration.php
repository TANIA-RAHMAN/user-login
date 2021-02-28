<html>
<head>
    <title> Registertion-form</title>
</head>
<body>
 <?php
 
if(isset($_POST["set"]))
{
    $Firstname=$_POST["firstname"];
    $Lastname=$_POST["lastname"];
    $Gender=$_POST["gender"];
    $Username=$_POST["uname"];
    $Password=$_POST["pwd"];
    $Email=$_POST["email"];
    $RecoveryEmailAddress=$_POST["rmail"];

    if(empty($Firstname) or empty($Lastname) or empty($Gender) or
    empty($Username) or empty($Password) or empty($Email) or empty($RecoveryEmailAddress) )
    {
       echo "Please empty details <br>";
    }
    else {
				echo "<script>location.href='login.php'</script>";
		}
   
    
}
/*if(isset($_POST["done"]))
{
    echo "<script>location.href='login.php'</script>";
    
}*/
?>
    <form action="file handling.php" method ="POST">
        <h1 style="text-align: center;">Registertion-form</h1>

       <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

 

    <p style="color:black;font-weight: bold;font-size: 28"> Basic Information:</p>

 

    <label for="name1"><b>FirstName</b></label>
    <input type="text" name="firstname">
    <br>
    <label for="name2"><b>LastName</b></label>
    <input type="text"  name="lastname">
    <br>

 

    <label for="gen"><b>Gender</b></label>
    <input type="radio" name="gender">
    <label for="male">Male</label>
    <input type="radio" name="gender">
    <label for="female">Female</label>
    

    <p style="color:black;font-weight: bold;font-size: 28"> User Information:</p>

    <label for="name3"><b>UserName</b></label>
    <input type="text"  name="uname">
    <br>
    <label><b>Password</b></label>
    <input type="password"name="pwd">
    <br>

    <label><b>Email</b></label>
      <input type="email" id="email" name="email" value="">
      <br>
      <label ><b>RecoveryEmailAddress</b></label>
      <input type="email" id="email" name="rmail" value="">
      <br>

        <input  type="submit" name="set" value="submit">
        <input  type="submit" name="done" value="Reset">  
    </form>
<?php

    extract($_REQUEST);
    $file=fopen("Information.txt","a");
    
    fwrite($file,"First Name:");
    fwrite($file, $firstname ."\n");
    fwrite($file,"Last Name:");
    fwrite($file, $lastname ."\n");
    fwrite($file,"Gender:");
    fwrite($file, $gender ."\n");
    fwrite($file,"USer Name:");
    fwrite($file, $uname ."\n");
    fwrite($file,"Password:");
    fwrite($file, $pwd ."\n");
    fclose($file);
?>
</body>

</html>