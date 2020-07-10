<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Linux Mint - Georgen's Tech Resources</title>
</head>
<style>
    .header {
        width: 100%;
        height: 35vh;
        background-image: url("https://www.georgenswebsite.com/background.jpg");
        background-size: cover;
    }

    a {
        text-align: center
    }

    @media screen and (max-width: 600px) {
        h1 b {
            font-size: 10vw;
            text-align: center;
        }
    }
</style>

<body>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/navbar.php";
    include_once($path);
    ?>
    <div class="w3-display-container w3-text-white header w3-center">
        <div class="w3-display-middle w3-large">
            <h1 style="font-size:4vw;color:black;"><b>Linux Mint</b></h1>
        </div>
    </div>
    <div class="w3-margin">
        <br>
        <br>
        <div class="w3-cell-row">

            <div class="w3-container w3-cell">
                <img src="/operating-systems/linuxmint.png" style="width: 40vw;" />
            </div>
            <div class="w3-container w3-cell">
                <h5 class="w3-center" style="text-decoration:underline;"><b>Linux Mint</b></h5>
                <p>Linux Mint is a Linux distribution based off Ubuntu. Linux Mint has a task-bar at the bottom and a menu similar to the start menu in Windows 10 or any other Windows operating system. Linux Mint is completely free to use and has no paid version. If you don't know how to make a bootable flash drive or DVD, you can buy a DVD at <a href="https://www.linuxmint.com">https://www.linuxmint.com</a>.</p>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="w3-cell-row">

            <div class="w3-container w3-cell">
                <h5 class="w3-center" style="text-decoration: underline;"><b>System Requirements</b></h5>
                <ul>
                    <li>Memory: 512 MB RAM (1GB recommended for a comfortable usage).</li>
                    <li>Storage: 5 GB of disk space </li>
                    <li>Graphics: Graphics card capable of 800×600 resolution </li>
                    <li>Installation Requirements: CD/DVD drive or USB port </li>
                </ul>
            </div>
            <div class="w3-container w3-cell">
                <img src="/operating-systems/linuxmint2.png" style="width: 40vw;float:right;" />
            </div>
        </div>
        <br>
        <br>
        <br>
        <h1 class="w3-center">Downloads</h1>
        <br>
        <div class="w3-container w3-cell w3-center w3-mobile w3-third">
            <h3 class="w3-center w3-mobile" style="text-decoration: underline;"><b>Cinnamon Desktop (Most Popular)</b></h3>
            <a class="w3-button w3-cyan" href="http://mirrors.advancedhosters.com/linuxmint/isos/stable/20/linuxmint-20-cinnamon-64bit.iso">64 Bits Only .iso <i class="fa fa-download"></i></a>
        </div>
        <div class="w3-container w3-cell w3-mobile w3-center w3-third">
            <h3 class="w3-center" style="text-decoration: underline;"><b>Mate Desktop</b></h3>
            <a class="w3-button w3-cyan" href="http://mirrors.advancedhosters.com/linuxmint/isos/stable/20/linuxmint-20-mate-64bit.iso">64 Bits Only .iso <i class="fa fa-download"></i></a>
        </div>
        <div class="w3-container w3-cell w3-mobile w3-center w3-third">
            <h3 class="w3-center" style="text-decoration: underline;"><b>Xfce</b></h3>
            <a class="w3-button w3-cyan" href="http://mirrors.advancedhosters.com/linuxmint/isos/stable/20/linuxmint-20-xfce-64bit.iso">64 Bits .iso <i class="fa fa-download"></i></a>
            <br>
            <br>
        </div>
    </div>
</body>

</html>