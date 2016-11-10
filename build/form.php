<?php

$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['message'];

require 'phpmailer/PHPMailerAutoload.php';






$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'patrick1996@gmail.com';                 // SMTP username
$mail->Password = 'paddyownsoncod';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('patrick1996@gmail.com', 'Website Form');   // Add a recipient
$mail->addAddress('14018562@stu.mmu.ac.uk');               // Name is optional

$mail->isHTML(true);                            // Set email format to HTML

$mail->Subject = 'New Form Submission';
$mail->Body    = '<style type="text/css">
                  body{
                    font-size: 20px;
                    color: blue;
                    font-family: serif;
                    font-weight:bold;
                  }
                  </style>
                  <br>
                  From: ' . $name . '<br>
                  Email: ' . $email . '<br>
                  Message: ' . $msg;


if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Refresh" content="3; url=index.html">
    <meta name="description" content="Form Submitted Patrick Whitehouse">
    <meta name="keywords" content="Patrick, Whitehouse, Portfolio, MMU, Personal, Work, Web, Development">
    <meta name="author" content="Patrick Whitehouse">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Submitted - Patrick Whitehouse</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body class="bottom_footer">

    <!-- Start Navigation -->

    <nav class="sub_pages" role="navigation">
        <ul>
            <li><a href="index.html" title="Patrick Whitehouse's portfolio home page">Home</a></li>
            <li><a href="about.html" title="Find out more about Patrick Whitehouse">About</a></li>
            <li><a href="work.html" title="A showcase of Patrick Whitehouse's work">Work</a></li>
            <li><a href="blog.html" title="Blogs published by Patrick Whitehouse">Blog</a></li>
            <li><a href="contact.html" title="Get in contact with Patrick Whitehouse">Contact</a></li>
        </ul>
    </nav>

    <!-- End Navigation -->

    <!-- Start About Content -->

    <main>
        <div class="wrapper">

            <div class="row">
                <div class="col-full">
                    <h2>Form Submitted!</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-full">
                    <p>Your form has been submitted. I'll try my best to reply within 24 hours. This page will redirect back to the homepage! </p>
                </div>
            </div>
    </main>

    <!-- End About Content -->


    <!-- Start Footer -->

    <footer class="cf">
        <div class="wrapper">

            <div class="footer_left">
                <h3>My Latest Tweet</h3>
                <div id="twitter-widget"></div>
            </div>

            <div class="footer_right">
                <p>Designed & Coded by Patrick Whitehouse</p>
            </div>
        </div>

    </footer>

    <!-- End Footer -->


    <!-- Twitter Scripts -->
    <script type="text/javascript" src="js/twitterFetcher.js"></script>
    <script type="text/javascript" src="js/twitter-feed.js"></script>


</body>

</html>
