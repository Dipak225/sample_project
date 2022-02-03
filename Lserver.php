<?php

$email=$_POST['email'];
$password=$_POST['pass'];


$db = mysqli_connect('localhost', 'root', '', 'dipak1');
if(!empty($email) &&!empty($password) ){
if(!$db)
{
    echo "Failed to connect server";
}
else
{
  
    
    $sql="select * from registration  where ( Email='$email');";

    $res=mysqli_query($db,$sql);

    if (mysqli_num_rows($res) > 0) {
      
      $row = mysqli_fetch_assoc($res);
      if($email==isset($row['Email']))
      {
        $query1="select Password from registration where Email='$email' ";
 
      
        if($res=mysqli_query($db, $query1))
        {
                while($row = mysqli_fetch_array($res))
                {
                    if($password==$row['Password'])
                    {
                        echo "Login successful";
                    }
                    else
                    {
                        echo "password cannot match";
                    }
                
                }
        }
      }
      
      }
      else
      {
          echo "Wrong Email id .please check again";

      }

}
}
else
{
    echo "All fileds are req.";   
} 
?>