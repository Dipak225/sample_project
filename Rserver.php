<?php
$name=$_POST['name'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$gender=$_POST['g'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$password=$_POST['pass'];

if(!empty($name) &&
!empty($address) &&!empty($contact) &&
!empty($gender) &&!empty($dob) &&
!empty($email) &&!empty($password) 
)
{
$db = mysqli_connect('localhost', 'root', '', 'dipak1');

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
              echo "email already exists.Please use different email id";
      }
      
      } 
else{
  
//INSERT INTO `registration`(`Name`, `Address`, `Contact`, `Gender`, `DOB`, `Email`, `Password`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7])

    $query="insert into registration values('$name','$address',$contact,'$gender','$dob','$email','$password')";
    
    if($res=mysqli_query($db, $query))
    {
        echo "Record inserted";
       
    }
    else
    {
        echo "Cannot inserted";
        
    }
    
    }
}
  

}
else{
    echo "All fileds are req.";
}




?>