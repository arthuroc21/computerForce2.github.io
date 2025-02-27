<!-- Register Page (register.php) -->
<?php include 'processes/processConnectDB.php'; ?>
<!-- Register Page (register.php) -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Computer Force</title>
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
        <h1>Registration Form</h1>
        <p>Please complete the following form to register for an account on our website.</p>
        <form action="processRegisterCustomer.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name">
            
            <label for="notes">Notes:</label>
            <textarea id="notes" name="notes"></textarea>
            
            <label for="username">Username*:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="email">Email Address*:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="password">Password*:</label>
            <input type="password" id="password" name="password" required>
            
            <label for="confirm_password">Confirm Password*:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>
            
            <label for="first_name">First Name*:</label>
            <input type="text" id="first_name" name="first_name" required>
            
            <label for="surname">Surname*:</label>
            <input type="text" id="surname" name="surname" required>
            
            <label for="gender">Gender*:</label>
            <select id="gender" name="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
            
            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob">
            
            <label for="address">Address*:</label>
            <input type="text" id="address" name="address" required>
            
            <label for="suburb">Suburb*:</label>
            <input type="text" id="suburb" name="suburb" required>
            
            <label for="postcode">Postcode*:</label>
            <input type="text" id="postcode" name="postcode" required>
            
            <label for="state">State*:</label>
            <select id="state" name="state" required>
                <option value="ACT">ACT</option>
                <option value="NSW">NSW</option>
                <option value="NT">NT</option>
                <option value="QLD">QLD</option>
                <option value="SA">SA</option>
                <option value="TAS">TAS</option>
                <option value="VIC">VIC</option>
                <option value="WA">WA</option>
            </select>
            
            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone">
            
            <button type="reset">Clear</button>
            <button type="submit">Register</button>
        </form>
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
