<!-- Products Page (products.php) -->
<?php include 'processes/processConnectDB.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - Computer Force</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <a href="index.php">
            <img src="https://via.placeholder.com/150" alt="Computer Force Logo" class="logo">
        </a>
    </header>
    <nav>
        <ul>
            <li><a href="products.php">Products</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="about.php">About</a></li>
        </ul>
        <form class="search-form">
            <input type="text" placeholder="Search...">
            <button type="submit">Search</button>
        </form>
    </nav>
    <main>
        <h1>Products we sell</h1>
        <p>Computer Force sells products in the following categories:</p>
        <div class="product-grid">
            <div class="product-item" id="audio">
                <img src="https://via.placeholder.com/150" alt="Audio">
                <h2>Audio</h2>
            </div>
            <div class="product-item" id="computers">
                <img src="https://via.placeholder.com/150" alt="Computers">
                <h2>Computers</h2>
            </div>
            <div class="product-item" id="graphics-cards">
                <img src="https://via.placeholder.com/150" alt="Graphics Cards">
                <h2>Graphics Cards</h2>
            </div>
            <div class="product-item" id="keyboard-mice">
                <img src="https://via.placeholder.com/150" alt="Keyboard and Mice">
                <h2>Keyboard and Mice</h2>
            </div>
            <div class="product-item" id="laptops">
                <img src="https://via.placeholder.com/150" alt="Laptops">
                <h2>Laptops</h2>
            </div>
        </div>
    </main>
    <footer>
        <p>&copy; <?php echo date('Y'); ?> Computer Force - Carlos Arthur Candido</p>
        <p>
            <a href="http://jigsaw.w3.org/css-validator/check/referer">
                <img style="border:0;width:88px;height:31px"
                    src="http://jigsaw.w3.org/css-validator/images/vcss"
                    alt="Valid CSS!" />
            </a>
        </p>
        <p>
            <a href="http://jigsaw.w3.org/css-validator/check/referer">
                <img style="border:0;width:88px;height:31px"
                    src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
                    alt="Valid CSS!" />
                </a>
        </p>
    </footer>
</body>
</html>