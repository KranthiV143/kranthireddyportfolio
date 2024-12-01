<?php
$pageTitle = "Welcome to My Dynamic Portfolio";
$welcomeMessage = "Designed and developed by Kranthi Kumar Reddy Vadiyala";
?>

<!DOCTYPE html>
<html>
<head>
<title>Portfolio Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, h1, h2, h3, h4, h5, h6 {
    font-family: "Montserrat", sans-serif;
}
.w3-row-padding img {
    margin-bottom: 12px;
}
.w3-sidebar {
    width: 120px;
    background: #222;
}
#main {
    margin-left: 120px;
}
@media only screen and (max-width: 600px) {
    #main {
        margin-left: 0;
    }
}
</style>
</head>
<body class="w3-black">

<!-- Sidebar Navigation -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
    <!-- Profile Picture -->
    <img src="img/kumar.jpeg" alt="Profile" style="width:100%; border-radius:50%;">
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
        <i class="fa fa-home w3-xxlarge"></i>
        <p>HOME</p>
    </a>
    <a href="#course reflection" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
        <i class="fa fa-user w3-xxlarge"></i>
        <p>COURSE REFLECTION</p>
    </a>
    <a href="#registration" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
        <i class="fa fa-paper-plane w3-xxlarge"></i>
        <p>REGISTRATION</p>
    </a>
    <a href="#portfolio" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
        <i class="fa fa-briefcase w3-xxlarge"></i>
        <p>PORTFOLIO</p>
    </a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
        <i class="fa fa-envelope w3-xxlarge"></i>
        <p>CONTACT</p>
    </a>
</nav>

<!-- Main Content -->
<div class="w3-padding-large" id="main">
    <!-- Header Section -->
    <header class="w3-container w3-padding-32 w3-center w3-black">
        <h1 class="w3-jumbo">Welcome to My Portfolio</h1>
        <p>Designed and developed by <strong>Kranthi Kumar Reddy Vadiyala</strong></p>
        <img src="img/kumar.jpeg" alt="Header Image" class="w3-image" style="max-width:100%; height:auto;">
    </header>

    <!-- Reflection Section -->
    <section id="course reflection" class="w3-container w3-padding-64">
        <h2 class="w3-text-light-grey">Course Reflection</h2>
        <hr style="width:200px" class="w3-opacity">
        <p>The class in information security turned out to be very informative as it enriched me with a number of insights about securing the computerised systems and the protected data. Thus, I found out about the basics of threat, vulnerability, and risk identification in different contexts of cyberspace. The topics like encryption, firewalls, multiple factor authentication were rather enlightening, as they showed how organisations try to protect their information systems. It was also helpful to learn about ethical behavior in cybersecurity because learning about integrity makes it easier to understand why cheating on a computer system is wrong.

Probably my favorite topic was studying social engineering and how people can be a major security threat. This made me understand how attackers take advantage of the trust that they have in a system in other to gain an unauthorized access, hence the need for training in cybersecurity awareness. Cryptography was another interesting topic that was also discussed in the given papers. It was interesting to learn about application of AES and RSA to maintain the security of conversation’s information and integrity.

For the future, I am willing to explore more and much more about Information Security with a focal point on its sophisticate aspects. This is something I would love to know more about: how to perform penetration testing, ethical hacking and how to do security audits. That includes learning about the topics related to zero day exploit detection and prevention. Also, given the fact that many companies rely on cloud computing, it would also be useful to find out how to protect cloud structures. In sum, this class has provided a good foundation on which I am willing to work on to foster the creation of a more secure internet.</p>
        <img src="img/kumar.jpeg" alt="About Me Image" class="w3-image" style="max-width:100%; height:auto;">
    </section>

<!-- Registration -->
<section id="registration" class="w3-container w3-padding-64">
    <h2 class="w3-text-light-grey">Register</h2>
    <hr style="width:200px" class="w3-opacity">
    <p>If you'd like to join Us, feel free to fill the form below!</p>
    <form action="/registration.php" method="POST">
        <p><input class="w3-input w3-border" type="text" placeholder="First Name" required name="firstName"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Last Name" required name="lastName"></p>
        <p><input class="w3-input w3-border" type="date" required name="birthday"></p>
        <p><input class="w3-input w3-border" type="email" placeholder="Email" required name="email"></p>
        <p>
            <button class="w3-button w3-light-grey w3-padding-large" type="submit">
                <i class="fa fa-paper-plane"></i> REGISTER
            </button>
        </p>
    </form>
</section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="w3-container w3-padding-64">
        <h2 class="w3-text-light-grey">My Portfolio</h2>
        <hr style="width:200px" class="w3-opacity">
        <div class="w3-row-padding" style="margin-top:32px">
            <div class="w3-col m4">
                <img src="img/computer.jpg" alt="Project 1" style="width:100%">
                <h3 class="w3-text-light-grey">Safe Folder App</h3>
                <p>We can copy and save folders and photos in this application with password security. This safe folder application has three modules namely, Folder list, manage folder, manage photos and password protection.</p>
                <a href="https://nevonprojects.com/safe-folder-app/" target="_blank" class="w3-button w3-red">Read More</a>

            </div>
            <div class="w3-col m4">
                <img src="img/kumar2.jpg" alt="Project 2" style="width:100%">
                <h3 class="w3-text-light-grey">Internet Border Patrol</h3>
                <p>It controls and monitors various packets and unresponsive data at each border of the network to check for chances of network congestion.</p>
                <a href="https://nevonprojects.com/internet-border-patrolling/" target="_blank" class="w3-button w3-red">Read More</a>

            </div>
            <div class="w3-col m4">
                <img src="img/kumar1.jpg" alt="Project 3" style="width:100%">
                <h3 class="w3-text-light-grey">Detecting Data Leaks</h3>
                <p>Consider a data sender who transfers some confidential data to some of his counterparts (third party). </p>
                <a href="https://nevonprojects.com/detecting-data-leaks/" target="_blank" class="w3-button w3-red">Read More</a>

            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="w3-container w3-padding-64">
        <h2 class="w3-text-light-grey">Contact Me</h2>
        <hr style="width:200px" class="w3-opacity">
        <p>If you'd like to work together, feel free to reach out!</p>
        <form action="/submit_contact.php" method="GET">
            <p><input class="w3-input w3-border" type="text" placeholder="FirstName" required name="firstname"></p>
            <p><input class="w3-input w3-border" type="text" placeholder="Lastname" required name="lastname"></p>
            <p><input class="w3-input w3-border" type="email" placeholder="Email" required name="email"></p>
            <p><textarea class="w3-input w3-border" placeholder="Message" required name="message"></textarea></p>
            <p>
                <button class="w3-button w3-light-grey w3-padding-large" type="submit">
                    <i class="fa fa-paper-plane"></i> SEND MESSAGE
                </button>
            </p>
        </form>
    </section>

    <!-- Download Resume Button -->
    <section class="w3-container w3-padding-64 w3-center">
        <hr style="width:200px" class="w3-opacity">
        <a href="resume/resume.pdf" download class="w3-button w3-light-grey w3-padding-large">
            <i class="fa fa-download"></i> DOWNLOAD RESUME
        </a>
    </section>

    <!-- Footer Section -->
    <footer class="w3-container w3-padding-32 w3-center w3-opacity">
        <p>Find me on social media:</p>
        <a href="#" class="w3-button w3-light-grey"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
        <a href="#" class="w3-button w3-light-grey"><i class="fa fa-instagram w3-hover-opacity"></i></a>
        <a href="#" class="w3-button w3-light-grey"><i class="fa fa-twitter w3-hover-opacity"></i></a>
        <a href="
https://www.linkedin.com/in/kranthi-vadiyala-2a36141a9?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" class="w3-button w3-light-grey"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
       
    </footer>
</div>

</body>
</html>
