<?php
    require "conect.php";
    if(isset($_POST["daftar"]))
    {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];

        if($password === $cpassword)
        {
            $password = password_hash($password, PASSWORD_DEFAULT);
            $result = mysqli_query($conn, "SELECT username FROM user_akun WHERE username = '$username'");

            if(mysqli_fetch_assoc(($result)))
            {
                echo 
                "<script>
                    alert('username telah digunakan!');
                    document.location.href = 'regis.php';
                </script>";
            }

            else
            {
                $sql = "INSERT INTO user_akun VALUES('', '$username', '$password')";
                $result = mysqli_query($conn, $sql);

                if(mysqli_affected_rows($conn) > 0)
                {
                    echo 
                    "<script>
                        alert('Registrasi berhasil');
                        document.location.href='login.php';
                    </script>";
                }

                else
                {
                    echo
                    "<script>
                        alert('Registrasi Gagal!');
                        document.location.href = 'regis.php';
                    </script>";
                }
            }
        }
        else
        {
        echo "<script>
            alert('kedua passowrd tidak sama');
            document.location.href = 'regis.php';
            </script>";
        }
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
            height: 30px;
            color: white;
            cursor: pointer;
        }
    </style>

</head>
<body>

    <div class="login-box">

        <form action="" method="post">

            <br>
            <div class="input">
                <p>username</p>
                <input type="text" name="username" placeholder="username..." required>
                <br>
                <p>Password</p>
                <input type="password" name="password" placeholder="password..." required>
                <p>konfirmasi password</p>
                <input type="password" name="cpassword" placeholder="password..." required>
            </div>
            <br>
            <button name="daftar" type="submit" class="login-btn">Daftar Sekarang</button>
            <br><br>
        </form>

    </div>
    
</body>
</html>