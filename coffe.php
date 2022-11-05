<?php
session_start();
require "conect.php";

if(!isset($_SESSION["login"]))
{
    header("Location: login.php");
    exit;
}
else
{
    echo "<script>alert('Login Berhasil')</script>";
}

if(isset($_GET["cari"]))
{
    $data = $_GET["cari"];
    $result = mysqli_query($conn, "SELECT * FROM coffe WHERE nama LIKE '%$data%'");
}
else
{
    $result = mysqli_query($conn, "SELECT * FROM coffe");
}



$menu = [];

while($row = mysqli_fetch_assoc($result))
{
    $menu[] = $row;
}
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        .logout
        {
            background-color: crimson;
            margin-right: 20px;
            border: none;
            width: 90px;
            height: 30px;
            color: white;
            border-radius: 8px;
            cursor: pointer;
        }

        .search
        {
            flex-direction: row;
        }

        .search input
        {
            width: 400px;
            height: 30px;
        }

        .search-btn
        {
            background-color: crimson;
            color: white;
            width: 50px;
            border: none;
            height: 30px;
            cursor: pointer;
        }

    </style>
    <title>CoffeTwins</title>
    <link rel="stylesheet" href="style/style.css">
    <script src="https://kit.fontawesome.com/bf9497bfb3.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="head-nav">

        <a href="index.php" class="title"><p>CoffeTwins</p></a>

        <div class="search">
            <form action="" method="get">
                <input type="text" name="cari" id="cari" placeholder="cari kopi...">
                <button class="search-btn"><i class="fa-solid fa-magnifiying-glass"></i>Cari</button>
            </form>
        </div>

        <a href="logout.php"><button class="logout">Log Out</button></a>

    </div>
    <?php include("sidenav.php"); ?>

    <div class="coffe-menu">
        
        <h2 class="header">CoffeTwins menu : </h2>
        
        <div class="list">
            <?php $i = 1; foreach($menu as $mnu): ?>
            <div class="coffe-list">
                <p style="text-align: left;, color: black;  font-size: 12px;"><i class="fa-regular fa-clock"></i><?php echo "Diupload : ".$mnu["tgl_upload"]; ?></p>
                <p class="logo">CoffeTwins</p>
                <img src="menu/<?php echo $mnu["gambar"]; ?>" class="image">
                <p><i><?php echo $mnu["nama"]; ?></i></p>
                <p><?php echo "Rp. ".$mnu["harga"]; ?></p>

                <a href="edit.php?id=<?php echo $mnu["id"]; ?>"><i class="fa-regular fa-pen-to-square"></i>Edit</a>
                <a href="hapus.php?id=<?php echo $mnu["id"]; ?>"><i class="fa-solid fa-trash"></i>Hapus</a>

            </div>
            <?php $i++; endforeach; ?>
        </div>

    </div>


    
    
</body>
</html>