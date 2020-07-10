<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>SMPlayer - Georgen's Tech Resources</title>
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
            <h1 style="font-size:4vw;color:black;"><b>SMPlayer</b></h1>
        </div>
    </div>
    <div class="w3-margin">
        <br>
        <br>
        <div class="w3-cell-row">

            <div class="w3-container w3-cell">
                <img src="/multimedia/smplayer.png" style="width: 40vw;" />
            </div>
            <div class="w3-container w3-cell">
                <h5 class="w3-center" style="text-decoration:underline;"><b>SMPlayer</b></h5>
                <p>SMPlayer is an alternative to VLC that supports Windows and Linux with built-in video codecs that can play most video formats including DVDs and Bluerays. SMPlayer is based off the MPlayer engine. SMPlayer remembers the time you stopped every video and will resume from that point next time you play the video.</p>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="w3-cell-row">

            <div class="w3-container w3-cell">
                <h5 class="w3-center" style="text-decoration: underline;"><b>System Requirements</b></h5>
                <ul>
                    <li>Operating System: Windows XP / Vista / 7 / 8 / 10, Ubuntu, Linux Mint, Fedora, Debian, Red Hat, and others.</li>
                </ul>
            </div>
            <div class="w3-container w3-cell">
                <img src="/multimedia/smplayer2.png" style="width: 40vw;float:right;" />
            </div>
        </div>
        <br>
        <br>
        <br>
        <h1 class="w3-center">Downloads</h1>
        <br>
        <div class="w3-container w3-cell w3-center w3-mobile w3-half">
            <h3 class="w3-center w3-mobile" style="text-decoration: underline;"><b>Windows</b></h3>
            <a class="w3-button w3-cyan" href="https://www.fosshub.com/SMPlayer.html?dwl=smplayer-20.6.0-win32.exe">32 Bits .exe <i class="fa fa-download"></i></a>
            <br>
            <br>
            <a class="w3-button w3-cyan" href="https://www.fosshub.com/SMPlayer.html?dwl=smplayer-20.6.0-x64.exe">64 Bits .exe <i class="fa fa-download"></i></a>
            <br>
            <br>
        </div>
        <div class="w3-container w3-cell w3-mobile w3-center w3-half">
            <h3 class="w3-center" style="text-decoration: underline;"><b>Linux</b></h3>
            <a class="w3-button w3-cyan" href="https://www.smplayer.info/en/downloads">Instructions <i class="fa fa-download"></i></a>
        </div>
    </div>
</body>

</html>