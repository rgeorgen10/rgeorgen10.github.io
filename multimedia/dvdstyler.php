<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>DVDStyler - Georgen's Tech Resources</title>
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
            <h1 style="font-size:4vw;color:black;"><b>DVDStyler</b></h1>
        </div>
    </div>
    <div class="w3-margin">
        <br>
        <br>
        <div class="w3-cell-row">

            <div class="w3-container w3-cell">
                <img src="https://www.georgenswebsite.com/multimedia/dvdstyler.jpg" style="width: 40vw;" />
            </div>
            <div class="w3-container w3-cell">
                <h5 class="w3-center" style="text-decoration:underline;"><b>DVDStyler</b></h5>
                <p>DVDStyler is a DVD authorizing tool used to create professional looking DVDs with custom menus, titles, and many other tools for creating DVD's. DVD's can be tested before burned to a DVD or can be made into an ISO image.</p>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="w3-cell-row">

            <div class="w3-container w3-cell">
                <h5 class="w3-center" style="text-decoration: underline;"><b>System Requirements</b></h5>
                <ul>
                    <li>Operating System: Windows XP/7/8/10 (32 Bit or 64 Bit)</li>
                    <li>RAM: 512 MB or Greater</li>
                    <li>Hard Disk Space: 50 MB Needed </li>
                    <li>Processor: Intel Pentium or Later</li>
                </ul>
            </div>
            <div class="w3-container w3-cell">
                <img src="/multimedia/dvdstyler2.jpg" style="width: 40vw;float:right;" />
            </div>
        </div>
        <br>
        <br>
        <br>
        <h1 class="w3-center">Downloads</h1>
        <br>
        <div class="w3-container w3-cell w3-center w3-mobile w3-third">
            <h3 class="w3-center w3-mobile" style="text-decoration: underline;"><b>Windows</b></h3>
            <a class="w3-button w3-cyan" href="http://www.fosshub.com/DVDStyler.html/DVDStyler-3.1-win32.exe">32 Bits .exe <i class="fa fa-download"></i></a>
            <br>
            <br>
            <a class="w3-button w3-cyan" href="http://www.fosshub.com/DVDStyler.html/DVDStyler-3.1-win64.exe">64 Bits .exe <i class="fa fa-download"></i></a>
            <br>
            <br>
        </div>
        <div class="w3-container w3-cell w3-mobile w3-center w3-third">
            <h3 class="w3-center" style="text-decoration: underline;"><b>Mac</b></h3>
            <a class="w3-button w3-cyan" href="http://www.fosshub.com/DVDStyler.html/DVDStyler-3.1-MacOSX.dmg">32 Bits or 64 Bits .dmg <i class="fa fa-download"></i></a>
        </div>
        <div class="w3-container w3-cell w3-mobile w3-center w3-third">
            <h3 class="w3-center" style="text-decoration: underline;"><b>Linux</b></h3>
            <a class="w3-button w3-cyan" href="http://www.fosshub.com/DVDStyler.html/DVDStyler-3.1.tar.bz2">Source Code .tar.bz2 <i class="fa fa-download"></i></a>
        </div>
    </div>
</body>

</html>