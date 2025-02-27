<!-- About Page (about.php) -->
<?php include 'processes/processConnectDB.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Computer Force</title>
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
        <h1>About Computer Force</h1>
        <p>Computer Force is a brand-new start-up company designed to provide first-class service to its customers. Based in Parramatta in Sydney, Computer Force provides top-class computing products at bargain prices, for sale throughout Australia.</p>
        <h2>Our Goals</h2>
        <ul>
            <li>To become Australia’s most well-known and respected hardware and software provider</li>
            <li>To create a service-based organisation whose goal is to exceed customer's expectations</li>
            <li>To provide a smooth, efficient, and transparent sales process</li>
        </ul>
        <h2>Contact Us</h2>
        <p>You can contact us using the following methods:</p>
        <ul>
            <li><strong>Address:</strong> 100 Main Road, Parramatta, NSW 20150</li>
            <li><strong>Email:</strong> info@computerforce.com.au</li>
            <li><strong>Phone:</strong> 02 4444 5555</li>
        </ul>
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