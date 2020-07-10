<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Debian - Georgen's Tech Resources</title>
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
            <h1 style="font-size:4vw;color:black;"><b>Debian</b></h1>
        </div>
    </div>
    <div class="w3-margin">
        <br>
        <br>
        <div class="w3-cell-row">

            <div class="w3-container w3-cell">
                <img src="/operating-systems/debian.png" style="width: 40vw;" />
            </div>
            <div class="w3-container w3-cell">
                <h5 class="w3-center" style="text-decoration:underline;"><b>Debian</b></h5>
                <p>Debian is a free and open-source operating system based on the linux kernel. Debian has two different versions: free software and non-free software. The free software version only consists of free and open-source software. The non-free version just consists of the software that is not open-source but still may be free.</p>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="w3-cell-row">

            <div class="w3-container w3-cell">
                <h5 class="w3-center" style="text-decoration: underline;"><b>System Requirements</b></h5>
                <ul>
                    <li>Information found <a href="https://www.debian.org/releases/buster/amd64/ch02s01.en.html">here</a>.</li>
                </ul>
            </div>
            <div class="w3-container w3-cell">
                <img src="/operating-systems/debian2.jpg" style="width: 40vw;float:right;" />
            </div>
        </div>
        <br>
        <br>
        <br>
        <h1 class="w3-center">Downloads</h1>
        <br>
        <div class="w3-container w3-cell w3-center w3-mobile w3-half">
            <h3 class="w3-center w3-mobile" style="text-decoration: underline;"><b>Free</b></h3>
            <a class="w3-button w3-cyan" href="https://cdimage.debian.org/debian-cd/current/i386/iso-dvd/debian-10.4.0-i386-DVD-1.iso">32 Bits .iso <i class="fa fa-download"></i></a>
            <br>
            <br>
            <a class="w3-button w3-cyan" href="https://cdimage.debian.org/debian-cd/current/amd64/iso-dvd/debian-10.4.0-amd64-DVD-1.iso">64 Bits .iso <i class="fa fa-download"></i></a>
        </div>
        <div class="w3-container w3-cell w3-mobile w3-center w3-half">
            <h3 class="w3-center" style="text-decoration: underline;"><b>Non-Free (Proprietary Software)</b></h3>
            <a class="w3-button w3-cyan" href="https://cdimage.debian.org/cdimage/unofficial/non-free/cd-including-firmware/10.4.0+nonfree/i386/iso-dvd/firmware-10.4.0-i386-DVD-1.iso">32 Bits .iso <i class="fa fa-download"></i></a>
            <br>
            <br>
            <a class="w3-button w3-cyan" href="https://cdimage.debian.org/cdimage/unofficial/non-free/cd-including-firmware/10.4.0+nonfree/amd64/iso-dvd/firmware-10.4.0-amd64-DVD-1.iso">64 Bits .iso <i class="fa fa-download"></i></a>
            <br>
            <br>
        </div>
    </div>
</body>

</html>