<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Registration Page</title>
 <script type="text/javascript">
     function validate()
     {
         var name=document.forms["myform"]["name"].value;
         if(name==""){
             alert("please enter name");
             return false;
         }
         else{
            re3 = /[0-9]/;
            var a1= re3.test(name);
            var regex = /^[A-Za-z0-9 ]+$/;
            var a2=regex.test(name);
            if(a1 || !a2){
                alert("Name contain only letters");
                    return false;
             }else if(name.length<3){
                alert("Name length should be more than 3");
                    return false;
             }

         }


         var address=document.forms["myform"]["address"].value;
         if(address==""){
             alert("please enter address");
             return false;
         }else if(address.length<3){
                alert("address should be large");
                    return false;
             }


         var contact=document.forms["myform"]["contact"].value;
         if(contact==""){
             alert("please enter contact");
             return false;
         }
         else{
             if(isNaN(contact)){
                alert("Mobile number is not valid ");
                return false;
             }
             else if(contact.length!=10){
                alert("Mobile number should be 10 digit ");
                return false;
             }
         }



         var gender=document.forms["myform"]["g"].value;
         if(gender==""){
             alert("please select your gender");
             return false;
         }


         var dob=document.forms["myform"]["dob"].value;
         if(dob==""){
             alert("please Select your Birth date ");
             return false;
         }


         var email=document.forms["myform"]["email"].value;
         if(email==""){
             alert("please enter email");
             return false;
         }
         else
         {
             var ex=/(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/;
            var tst=ex.test(email);
            if(!tst){
                alert("Email is not valid formate");
                return false;
         }
         
        }


         var pass=document.forms["myform"]["pass"].value;
         if(pass==""){
             alert("please enter password");
             return false;
         }
         else{
            re = /[0-9]/;
            re1 = /[a-z]/;
            re2 = /[A-Z]/;
            var regex1 = /[-!$%^&*()_+|~=`{}[:;<>?,.@#\]]/g;
            var a3=regex1.test(pass);
            var a= re.test(pass);
             if(pass.length<7){
                 alert("Password must  contain at least 8 characters");
                 return false;
             }           
             else if(!a){
                alert("password must contain at least one number (0-9)");
                    return false;
             }             
             else if(!re1.test(pass)){
                alert("password must contain at least one lowercase letter (a-z)");
                 return false;
             }
             else if(!re2.test(pass)){
                alert("password must contain at least one uppercase letter (A-Z)!");
             return false;
             }
             else if(!a3){
                alert("password must contain at least one special character");
                return false;
             }
         }
     }
 </script>
</head>

<body>
    
    <h1 align="center">Registration Page</h1><br>

    <span align="center">
        
    </span>
    <form  name="myform" onsubmit="return validate()" method="post" action="Rserver.php">
    <table align="center">
    <tr>
        <td>        
            <label for="">Name:</label>
        </td>
        <td>
            <input type="text" name="name"  >
        </td>
    </tr>
    <tr>
        <td>        
            <label for="">Address:</label>
        </td>
        <td>
           <textarea name="address" id="" ></textarea>
        </td>
    </tr>
    <tr>
        <td>        
            <label for="">Contact:</label>
        </td>
        <td>
            <input type="text" name="contact"  />
        </td>
    </tr>
    <tr>
        <td>        
            <label for="">Gender:</label>
        </td>
        <td>
            <input type="radio" name="g" value="Male" >Male</input>
            <input type="radio" name="g" value="Female">Female</input>
            <input type="radio" name="g"  value="other">Other</input>
        </td>
    </tr>
    <tr>
        <td>
            <label for="">Date of birth:</label>
        </td>
        <td>
           <input type="date" name="dob"  />  
          
        </td>
    </tr>
    <tr>
        <td>
            <label for="">Email:</label>
        </td>
        <td>
            <input type="text" name="email"  />

        </td>
    </tr>
    <tr>
        <td>
            <label for="">Password:</label>
        </td>
        <td>
            <input type="password" name="pass" id="pass" />
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            
            <input type="submit" value="Register">
        </td>
    </tr>
    </table>
    
    </form>
    
</body>
</html>