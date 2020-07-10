<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Avast - Georgen's Tech Resources</title>
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
            <h1 style="font-size:4vw;color:black;"><b>Avast</b></h1>
        </div>
    </div>
    <div class="w3-margin">
        <br>
        <br>
        <div class="w3-cell-row">

            <div class="w3-container w3-cell">
                <img src="/other-software/ugetdm.png" style="width: 40vw;" />
            </div>
            <div class="w3-container w3-cell">
                <h5 class="w3-center" style="text-decoration:underline;"><b>Avast</b></h5>
                <p>Avast Free Antivirus is a free antivirus suite available for Windows, MacOS, Android, and iOS. Avast has premium versions while the free version provides basic protection with a few ads through popups. Some features like most of the system speedup utility require a premium subscription.</p>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="w3-cell-row">

            <div class="w3-container w3-cell">
                <h5 class="w3-center" style="text-decoration: underline;"><b>System Requirements</b></h5>
                <ul>
                    <li>Operating System: Windows XP/Vista/7/8/8.1/10 </li>
                    <li>Memory (RAM): 256 MB of RAM required </li>
                    <li>Hard Disk Space: 1.5 GB of free space required </li>
                    <li>Processor: Intel Pentium 4 or later </li>
                </ul>
            </div>
            <div class="w3-container w3-cell">
                <img src="/other-software/avast2.png" style="width: 40vw;float:right;" />
            </div>
        </div>
        <br>
        <br>
        <br>
        <h1 class="w3-center">Downloads</h1>
        <br>
        <div class="w3-container w3-cell w3-center w3-mobile w3-half">
            <h3 class="w3-center w3-mobile" style="text-decoration: underline;"><b>Windows</b></h3>
            <a class="w3-button w3-cyan" href="https://www.avast.com/en-us/download-thank-you.php?product=FAV-ONLINE&locale=en-us">32 Bits or 64 Bits .exe <i class="fa fa-download"></i></a>
            <br>
            <br>
        </div>
        <div class="w3-container w3-cell w3-mobile w3-center w3-half">
            <h3 class="w3-center" style="text-decoration: underline;"><b>Mac</b></h3>
            <a class="w3-button w3-cyan" href="https://www.avast.com/en-us/download-thank-you.php?product=MAC-FREE-ONLINE&locale=en-us">32 Bits .dmg <i class="fa fa-download"></i></a>
        </div>
    </div>
</body>

</html>