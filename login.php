<?php
   // $filepath("Information.txt")
    
    $file=fopen("Information.txt","r");
    $s1=fread($file,filesize("Information.txt"));
    $data=(explode("\n",$s1));
   echo $data[3];
   echo "<br>";
   echo $data[4];
    echo "<br>";

    fclose($file);
?>
<html>

<head>
    <title> Login</title>
</head>
<body>
<form method ="POST">

<table>
     <tr>
         <td>
             UserName
         </td>
        <td>
             <input type="text" name="uname">
          </td>
    </tr>
    <tr>
         <td>
             Password
        </td>
        <td>
             <input type="Password" name="pwd">
         </td>
    </tr>
    <tr>
         <td>
             <input  type="submit" name="Login" value="Login">
        </td>
    </tr>
                

      <tr>
       <td>
             <input  type="submit" name="SignUp" value="SignUp">
         </td>        
     </tr>
 <?php

if(isset($_POST["SignUp"]))
{
    echo "<script>location.href='registration.php'</script>";
}
?>
</form>
</body>
</html>
