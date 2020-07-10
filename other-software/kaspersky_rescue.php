<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Kaspersky Rescue Disk - Georgen's Tech Resources</title>
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
            <h1 style="font-size:4vw;color:black;"><b>Kaspersky Rescue Disk</b></h1>
        </div>
    </div>
    <div class="w3-margin">
        <br>
        <br>
        <div class="w3-cell-row">

            <div class="w3-container w3-cell">
                <img src="/other-software/krd.PNG" style="width: 40vw;" />
            </div>
            <div class="w3-container w3-cell">
                <h5 class="w3-center" style="text-decoration:underline;"><b>Kaspersky Rescue Disk</b></h5>
                <p>Kaspersky rescue disk is a free bootable iso used to fix a broken operating system caused by a virus such as ransomware or trojans. Just extract this file on a usb flash drive or a dvd and boot the broken computer from it.</p>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="w3-cell-row">

            <div class="w3-container w3-cell">
                <h5 class="w3-center" style="text-decoration: underline;"><b>System Requirements</b></h5>
                <ul>
                    <li>USB drive with at least 1GB capacity. Or a DVD</li>
                    <li>1GB of RAM</li>
                    <li>1GB of hard drive space</li>
                    <li>1GHz or faster pentium processor.</li>
                    <li>Internet connection</li>
                    <li>Mouse or touchpad</li>
                </ul>
            </div>
            <div class="w3-container w3-cell">
                <img src="/other-software/kaspersky2.jpg" style="width: 40vw;float:right;" />
            </div>
        </div>
        <br>
        <br>
        <br>
        <h1 class="w3-center">Downloads</h1>
        <br>
        <div class="w3-container w3-center w3-mobile">
            <h3 class="w3-center w3-mobile" style="text-decoration: underline;"><b>ISO Image</b></h3>
            <a class="w3-button w3-cyan" href="https://rescuedisk.s.kaspersky-labs.com/latest/krd.iso">32 or 64 Bits .iso <i class="fa fa-download"></i></a>
            <br>
            <br>
        </div>
    </div>
</body>

</html>