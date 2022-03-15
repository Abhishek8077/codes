<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
    <a href="logout.php">Logout</a>
</body>
</html>
                <img src="../foody/images/bg.jpg" alt="foody"width="200px">
            </div>
            <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Categories</a></li>
                
                <li><a href="#">Foods</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="login.php">Logout </a></li>
            </ul>
            </nav>
        </div>
        
        <div class="row">
            <div class="col-2">
                <h3>First,we eat.Then,we do everything else.</h3>
                <a href="#" class="btn">Search for Food!</a>
                
            </div>
            
            
        </div>
     </div>
    </div>
         </header>
    </body>

</html>