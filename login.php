<?php
session_start();
    require "conect.php";
    if(isset($_POST["login"]))
    {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($conn, "SELECT * FROM user_akun WHERE username = '$username'");

        if(mysqli_num_rows($result) === 1)
        {
            $row = mysqli_fetch_assoc($result);

            if(password_verify($password, $row["password"]))
            {
                $_SESSION["login"] = true;
                header("Location: coffe.php");
                exit;
            }
        }
        $error = true;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>CoffeTwins</title>
    <link rel="stylesheet" href="style/style.css">

    <style>
        body
        {
            background-image: url("image/bg.jpg");
            background-repeat: no-repeat;
            background-size: 100%;
        }


        .login-box
        {
            margin-top: 100px;
            border-radius: 20px;
            background-color: #fafafa;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            text-align: center;
            width: 400px;
            height: 400px;
            padding-top: 50px;
            margin-left: 500px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .login-btn
        {
            background-color: crimson;
            border: none;
            width: 305px;
            cursor: pointer;
            height: 30px;
            color: white;
        }
    </style>

</head>
<body>

<?php if(isset($error))
{
    echo "<p style='color: red;'><i>Error : Username atau password salah!</i></p>";
} ?>

    <div class="login-box">

        <form action="" method="post">

            <br>
            <div class="input">
                <p>username</p>
                <input type="text" name="username" placeholder="username..." required>
                <br>
                <p>Password</p>
                <input type="password" name="password" placeholder="password" required>
            </div>
            <br>
            <button name="login" type="submit" class="login-btn">Login</button>
            <br><br>
            <a href="regis.php">register disini</a>
        </form>

    </div>
    
</body>
</html>