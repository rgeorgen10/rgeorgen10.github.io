<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Audacity - Georgen's Tech Resources</title>
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
            <h1 style="font-size:4vw;color:black;"><b>Audacity</b></h1>
        </div>
    </div>
    <div class="w3-margin">
        <br>
        <br>
        <div class="w3-cell-row">

            <div class="w3-container w3-cell">
                <img src="/multimedia/aduacity.png" style="width: 40vw;" />
            </div>
            <div class="w3-container w3-cell">
                <h5 class="w3-center" style="text-decoration:underline;"><b>Audacity</b></h5>
                <p>Audacity is an open-source audio editor and recorder available for Windows, Mac OS, and Linux. Features include recording, trimming and slicing, audio effects, supports 16, 24, 32 bits, and extra plugins.</p>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="w3-cell-row">

            <div class="w3-container w3-cell">
                <h5 class="w3-center" style="text-decoration: underline;"><b>System Requirements</b></h5>
                <ul>
                <li>Operating System: Windows Vista / 7 / 8 / 10</li>
                </ul>
            </div>
            <div class="w3-container w3-cell">
                <img src="/multimedia/audacity2.png" style="width: 40vw;float:right;" />
            </div>
        </div>
        <br>
        <br>
        <br>
        <h1 class="w3-center">Downloads</h1>
        <br>
        <div class="w3-container w3-cell w3-center w3-mobile w3-third">
            <h3 class="w3-center w3-mobile" style="text-decoration: underline;"><b>Windows</b></h3>
            <a class="w3-button w3-cyan" href="https://www.fosshub.com/Audacity.html/audacity-win-2.4.2.exe">32 Bits or 64 Bits .exe <i class="fa fa-download"></i></a>
        </div>
        <div class="w3-container w3-cell w3-mobile w3-center w3-third">
            <h3 class="w3-center" style="text-decoration: underline;"><b>Mac</b></h3>
            <a class="w3-button w3-cyan" href="https://www.fosshub.com/Audacity.html/audacity-macos-2.4.2.dmg">32 Bits or 64 Bits .dmg <i class="fa fa-download"></i></a>
        </div>
        <div class="w3-container w3-cell w3-mobile w3-center w3-third">
            <h3 class="w3-center" style="text-decoration: underline;"><b>Linux</b></h3>
            <a class="w3-button w3-cyan" href="https://www.audacityteam.org/download/linux/">Instructions <i class="fa fa-download"></i></a>
            <br>
            <br>
        </div>
    </div>
</body>

</html>