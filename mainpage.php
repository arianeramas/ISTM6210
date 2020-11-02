<!DOCTYPE html>
<?php
    session_start();
    if(!isset($_SESSION["username"])) {
        header("Location: login.php");
        exit();
      }
      $con = mysqli_connect("localhost","root","root","LoginSystem");
      if (mysqli_connect_errno()) echo "Failed to connect to MySQL: " . mysqli_connect_error();
      $images_sql = "SELECT * FROM images ORDER BY id desc limit 1";

      $result = mysqli_query($con,$images_sql);

      $row = mysqli_fetch_array($result);


      $image = $row['image'];
?>

<html>
<head>
    <meta charset="utf-8">
    <title>Main Page</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="form">
        <p>Hello, <?php echo $_SESSION['username']; ?>!</p>
        <p>You are on main page.</p>
        <img src="<?= $image ?>" width="300px" height="300px"  >
        <p><a href="sellerpage.php">Seller Page</a></p>
        <p><a href="logout.php">Logout</a></p>
    </div>
</body>
</html>
