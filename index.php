<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dynamic Website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="main">
        <nav>
            <a href="#" class="logo">
                <img src="logo1.png">
            </a>

            <ul class="menu">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <div class="main-heading">
            <h1>Create Prespectives With Virtual Reality</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint provident consectetur ducimus. Blanditiis, culpa!</p>
            <a class="main-btn" href="#">Contact</a>
        </div>
    </header>

    <section class="features">
        <div class="feature-container">

            <div class="feature-box">
                <div class="f-img">
                    <img src="info-icon1.png">
                </div>
                <div class="f-text">
                    <h4>Web Development</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img src="info-icon2.png">
                </div>
                <div class="f-text">
                    <h4>Software Development</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img src="info-icon3.png">
                </div>
                <div class="f-text">
                    <h4>App Development</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>
        </div>
    </section>

    <section class="about">
        <div class="about-img">
            <img src="about.png">
        </div>
        <div class="about-text">
            <h2>Start Tracking Your Statistics</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad cumque eum quia magni, voluptatibus nesciunt vero. Reprehenderit fugiat soluta ullam praesentium, omnis autem voluptatibus quae.</p>
            <button class="main-btn">Read More</button>
        </div>
    </section>

    <footer class="contact">
        <div class="contact-heading">
            <h1>Contact Us</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <form action="index.php" method="post">
            <input type="text" name="username" placeholder="Your Full Name"/>
            <input type="email" name="email" placeholder="Your E-Mail"/>
            <textarea name="message" placeholder="Type Your Message Here.........."></textarea>
            <button class="main-btn contact-btn" type="submit">Continue</button>
        </form>
    </footer>
</body>
</html>
<?php

    $connection = mysqli_connect('localhost','root');

    mysqli_select_db($connection,"youtubedata");

    $user = $_POST['username'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $query = "INSERT INTO userinfodata(user, email, message)
                 VALUES ('$user','$email','$message') ";

    try
    {
        mysqli_query($connection,$query);

    }
    catch(mysqli_sql_exception)
    {
        echo "MESSAGE IS Not SENT";

    }

?>