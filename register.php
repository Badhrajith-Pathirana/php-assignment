<?php 
    session_start();
    //db connection
    $db = mysqli_connect("localhost","root","","gtf");
    if(isset($_POST['login_btn'])){
        $username = mysqli_real_escape_string($db,$_POST['username']);
        $email = mysqli_real_escape_string($db,$_POST['email']);
        $password = mysqli_real_escape_string($db,$_POST['password']);
        $password2 = mysqli_real_escape_string($db,$_POST['password2']);
        echo $username."username";

       if($password == $password2){
            $password = md5($password);
            $sql = 'INSERT INTO users (username,email,password) VALUES ("'.$username.'","'.$email.'","'.$password.'")';
            mysqli_query($db,$sql);
            $_SESSION['message'] = "You are now logged in";
            $_SESSION['username'] = $username;
            // header("location:gtfMember.html");
       }
       else{
        $_SESSION['message'] = "The two passwords do not match";
       } 
    } 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Garbage Managemnet System</title>
    <link rel="stylesheet" href="css/reg.css">
</head>
<body>
    <div class="login">
        <img src="img/icons/i3.png" alt="" class="avatar">
            <h1>Login Here</h1>
            <form method="post" action="register.php">
                <p>Username</p>
                <input type="text" name="username"  placeholder="Username">
                <p>Email</p>
                <input type="text" name="email"  placeholder="Email">
                <p>Password</p>
                <input type="password" name="password" placeholder="Password">
                <p>Enter password again</p>
                <input type="password" name="password2" placeholder="Password">
                <input type="submit" name="login_btn" value="Sign Up">
                
            </form>

    </div><!-- login -->
    
</body>
</html>