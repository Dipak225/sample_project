<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <script type="text/javascript">
     function validate()
     {
        
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
     }
     </script>


</head>
<body>
    <h1 align="center">Registration Page</h1>
    <form name="myform"   onsubmit="return validate()" action="Lserver.php" method="post" >
    <table align="center">
    <tr>
        <td>
            <label for="">Email:</label>
        </td>
        <td>
            <input type="text" name="email" id="email" />

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
            <button type="submit">Login</button>
        </td>
    </tr>
    </table>
    
    </form>
    
</body>
</html>