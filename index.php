<?php include 'processes/processConnectDB.php'; ?>

<!-- Home Page (index.php) -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Computer Force</title>
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
        <h1>Welcome to Computer Force</h1>
        <p>Computer Force is your online expert in all things computing.</p>
        <div class="product-grid">
            <div class="product-item">
                <a href="products.php#computers">
                    <img src="https://via.placeholder.com/150" alt="Computers">
                    <h2>Computers</h2>
                </a>
            </div>
            <div class="product-item">
                <a href="products.php#laptops">
                    <img src="https://via.placeholder.com/150" alt="Laptops">
                    <h2>Laptops</h2>
                </a>
            </div>
            <div class="product-item">
                <a href="products.php#monitors">
                    <img src="https://via.placeholder.com/150" alt="Monitors">
                    <h2>Monitors</h2>
                </a>
            </div>
            <div class="product-item">
                <a href="products.php#printing-scanning">
                    <img src="https://via.placeholder.com/150" alt="Printing & Scanning">
                    <h2>Printing & Scanning</h2>
                </a>
            </div>
            <div class="product-item">
                <a href="products.php#software">
                    <img src="https://via.placeholder.com/150" alt="Software">
                    <h2>Software</h2>
                </a>
            </div>
            <div class="product-item">
                <a href="products.php#tablets">
                    <img src="https://via.placeholder.com/150" alt="Tablets">
                    <h2>Tablets</h2>
                </a>
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
