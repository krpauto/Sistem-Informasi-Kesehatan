<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>

<body>
<style>

*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}
body{
    background: #ffff;

}
.container{
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 90vh;
}
.box{
    background: #fdfdfd;
    display: flex;
    flex-direction: column;
    padding: 25px 25px;
    border-radius: 20px;
    box-shadow: 0 0 128px 0 rgba(0, 0, 0, 0, 1),
                0 32px 64px -48px rgba(0, 0, 0, 0, 5);
}
.form-box{
    width: 450px;
    margin: 0px 10px;
}
.form-box header{ 
    font-size: 25px;
    font-weight: 600;
    padding-bottom: 10px;
    border-bottom: 1px solid #e6e6e6;
    margin-bottom: 10px;
}
.form-box form .field{
    display: flex;
    margin-bottom: 10px;
    flex-direction: column;
}
.form-box form .input input{
    height: 40px;
    width: 100%;
    font-size: 16px;
    padding: 0 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    outline: none;
}
.btn{
    height: 35px;
    background: rgb(87, 161, 207);
    border: 0;
    border-radius: 5px;
    color: #fff;
    font-size: 15px;
    cursor: pointer;
    transition: all.3s;
    margin-top: 10px;
    padding: 0px 10px;
}
.btn:hover{
    opacity: 0.82;
}
.submit{
    width: 100%;
}
.link{
    margin-bottom: 15px;
}
</style>
  
    <div class="container">
        <div class="box form-box"> 
            <?php
            include("config.php");
            if(isset($_POST['submit'])){
                $email = mysqli_real_escape_string($con,$_POST['email']);
                $password = mysqli_real_escape_string($con,$_POST['password']);
                $result = mysqli_query($con, "SELECT * FROM members WHERE email='$email'AND password='$password'")or die("select error");
                $row = mysqli_fetch_assoc($result);

            if(is_array($row) && !empty($row)){
                $_SESSION['valid'] = $row['email'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['age'] = $row['age'];
                $_SESSION['jeniskelamin'] = $row['jeniskelamin'];
                $_SESSION['id'] = $row['id'];
            }else{
                echo"<div class='messege'>
                <p>Wrong Username or Password!</p>
                </div><br>";

                echo "<a href= 'indeclogin.php'><button class='btn'>Go Back</button>";
            }if(isset($_SESSION['valid'])){
                header("location:index.php");
            }
            }
            ?>
            <header>Login</header>
            <form action=" " method="post">
                <div class="field input">
                    <label for="email">username</label> 
                    <input type="text" name="email" id="email" required>  
                </div>
                <div class="field input">
                    <label for="password">Password</label> 
                    <input type="password" name="password" id="password" required>  
                </div>
                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Login" required>  
                </div>
                <div class="links">
                    Don't have account? <a href="register.php">Sign up now!</a>
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>