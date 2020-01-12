<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <?php
    
            if($_POST['login'] != " " && $_POST['password'] != " ")
            {
                $login = $_POST['login'];
                $password = $_POST['password'];
                
                $passwordOk = $password == "123456" ? true : false;
              
                if ($passwordOk) {
                    echo "Bienvenue";
                } 
                else 
                {
                    echo "Login ou password incorrect";
                }
            }
            else
            {
                header("Location: unauthorize.php");
            }
    
    ?>
</body>
</html>