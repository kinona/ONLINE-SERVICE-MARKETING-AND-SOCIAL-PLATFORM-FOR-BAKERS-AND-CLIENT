<?php
include 'header.php';
?>

<body>
        
    <header class="background">
            <nav class="navbar">
                <ul class="navparent">
                    
                    <li><img class="logo" src="images/icons/logoIcon.png"></li>
                    <li class="dropdown">
                        <button class="dropbtn"><ion-icon name="person"></ion-icon>Account</button>
                        <div class="dropdown-content">
                            
                        <?php
                            // check if user is logged in
                            if(isset($_SESSION['username'])) {
                                echo '<button class="signin-btn" onclick="loginPage(\'profile.php\')">Profile</button>';
                                
                                echo '<button class="signin-btn" onclick="loginPage(\'includes/logout.inc.php\')">Log out</button>';
                                
                            } else {
                                
                                echo '<button class="signin-btn" onclick="loginPage(\'login.php\')">sign in</button>';
                                echo '<button class="signin-btn" onclick="loginPage(\'signup.php\')">Register</button>';
                            }
                        ?>

                        
                        </div>
                    </li>
                    
                    <li><span class="vertical-line"></span><li>
                    <li class="dropdown">
                        <button class="dropbtn">Shop</button>
                        <div class="dropdown-content">
                            <a href="index.php">Shop</a>
                        </div>
                    </li>
                        
                    
                </ul>

                
            </nav>

        
    </header>
    <div class="container">
        <div class="holder">
        <ul><h1>Contact</h1><br><br><br>
            <li><a>Telephone: 254 129209203</a></li><br>
            <li><a>Email: Bakery@gmail.com</a></li>
        </ul>
       
        </div>
       
        <?php
        include 'footer.php';
        ?>
    </div>
    
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>