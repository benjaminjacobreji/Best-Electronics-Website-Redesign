<?php
include "pdo.php";

if (isset($_GET['ID'])) {
    $id = $_GET['ID'];
} else {
    header('Location: store.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Best Electronics Atari Resellers">
    <meta name="keywords" content="atari keyboards, consoles, cables and replacement parts">
    <meta name="author" content="Benjamin Jacob Reji, Vishan De Silva, Brenden Cyrus Monterio, Hitesh Manani, Pranav Pai">
    <title>Best Electronics | Store</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/product.css">
    <script src="../js/main.js"></script>
</head>

<body>
    <header>
        <div class="container">
            <div id="branding">
                <img src="../img/bestelectronics-logo.png" alt="bestelectronics-logo.png" id="logo">
                <h1><span class="highlight">BEST</span> ELECTRONICS</h1>
                <h4>Powered by <span class="highlight">ATARI</span></h4>
            </div>
            <nav class="topnav" id="myTopnav">
                <a href="../index.html">Home</a>
                <a href="./about.html">About</a>
                <a href="./store.php">Store</a>
                <a href="./support.html">Support</a>
                <a href="javascript:void(0);" class="icon" onclick="navFunction()">
                    <i class="fa"></i>
                    <img src="../img/icons/navbar.png" alt="navbar.png">
                </a>
            </nav>
        </div>
    </header>

    <section id="main">
        <div class="container">
            <div class="prod-card">
                <?php
                $product = $pdo->query("SELECT * FROM products WHERE product_ID='$id'");
                while ($row = $product->fetch()) {
                    $name = $row["product_NAME"];
                    $price = $row["product_COST"];
                    $category = $row["product_CATEGORY"];
                    $desc = $row["product_DESCRIPTION"];
                    $image = $row["product_IMAGE"];
                }
                ?>
                <div class="img">
                    <img src="../img/store/<?php echo $image; ?>" alt="Atari600XL">
                </div>
                <div class="prod-info">
                    <span class="title"><?php echo $name; ?></span>
                    <span class="desc"><?php echo $category; ?></span>
                    <span class="price">$<?php echo $price; ?></span>
                    <h1> Product info</h1>
                    <p><?php echo $desc; ?></p>
                    <a class="revbtn" href="#">
                        <ul onclick="reviewOn()"> Reviews </ul>
                    </a>

                    <div id="reviewOverlay">
                        <div id="reviewText">
                            <h1>Reviews</h1>
                            <?php
                            $review = $pdo->query("SELECT * FROM reviews WHERE product_ID='$id'");
                            while ($row1 = $review->fetch()) {
                                echo "<h3> User: " . $row1["user_ID"] . "</h3>";
                                echo "<p>Rating: " . $row1["review_STAR"] . "/10</p>";
                                echo "<p>" . $row1["review_CONTENT"] . "</p><br>";
                            }
                            ?>
                            <input type="submit" value="Close" onclick="reviewOff()">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer-distributed">
        <div class="container">
            <div class="footer-left">
                <h3><span> Best</span>Electronics</h3>
                <p class="footer-links">
                    <a href="../index.html">Home</a>
                    ·
                    <a href="./about.html">About</a>
                    ·
                    <a href="./store.php">Store</a>
                    ·
                    <a href="./support.html">Support</a>
                </p>
                <p class="footer-company-name">Best Electronics &copy; 2019</p>
            </div>
            <div class="footer-center">
                <div>
                    <i class="fa"><img src="../img/icons/map-marker.svg" alt="map-marker"></i>
                    <p><span>672 Commercial Street</span>San Jose, CA 95112-1406</p>
                </div>
                <div>
                    <i class="fa"><img src="../img/icons/phone.svg" alt="phone"></i>
                    <p>+1 (408) 278-1070</p>
                </div>
                <div>
                    <i class="fa"><img src="../img/icons/envelope.svg" alt="mail-envelope"></i>
                    <p><a href="mailto:bestelec@concentric.net">bestelec@concentric.net</a></p>
                </div>
            </div>
            <div class="footer-right">
                <p class="footer-company-about">
                    <span>About the Company</span>
                    We specialize in replacement parts and accessories for all Consumer based Atari Game Systems and Computers.
                    <br>
                    If you can not find the exact Atari item you are looking for Please E-Mail us at: <a href="mailto:bestelec@concentric.net">bestelec@concentric.net</a>
                </p>
            </div>
        </div>
    </footer>
</body>

</html> 