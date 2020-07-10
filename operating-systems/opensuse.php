<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>OpenSuse - Georgen's Tech Resources</title>
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
            <h1 style="font-size:4vw;color:black;"><b>OpenSuse</b></h1>
        </div>
    </div>
    <div class="w3-margin">
        <br>
        <br>
        <div class="w3-cell-row">

            <div class="w3-container w3-cell">
                <img src="/operating-systems/opensuse.jpg" style="width: 40vw;" />
            </div>
            <div class="w3-container w3-cell">
                <h5 class="w3-center" style="text-decoration:underline;"><b>OpenSuse</b></h5>
                <p>OpenSuse is a free and open-source operating system based on Suse. OpenSuse has two versions: leap which is a stable version of Linux and tumble weed which is less stable and rolling release. OpenSuse can be used as a personal desktop or server and uses the package manager zypper.</p>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="w3-cell-row">

            <div class="w3-container w3-cell">
                <h5 class="w3-center" style="text-decoration: underline;"><b>System Requirements</b></h5>
                <ul>
                    <li>Processor: Pentium 4 at least 1.6 GHZ. </li>
                    <li>Memory: 1 GB</li>
                    <li>Hard Disk: 3GB</li>
                    <li>Graphics card: At least 800x600</li>
                    <li>Ability to boot from DVD, or Flash Drive</li>
                </ul>
            </div>
            <div class="w3-container w3-cell">
                <img src="/operating-systems/opensuse2.jpg" style="width: 40vw;float:right;" />
            </div>
        </div>
        <br>
        <br>
        <br>
        <h1 class="w3-center">Downloads</h1>
        <br>
        <div class="w3-container w3-cell w3-center w3-mobile w3-half">
            <h3 class="w3-center w3-mobile" style="text-decoration: underline;"><b>Leap</b></h3>
            <a class="w3-button w3-cyan" href="http://download.opensuse.org/distribution/leap/15.2/iso/openSUSE-Leap-15.2-DVD-x86_64.iso">64 Bits .iso <i class="fa fa-download"></i></a>
        </div>
        <div class="w3-container w3-cell w3-mobile w3-center w3-half">
            <h3 class="w3-center" style="text-decoration: underline;"><b>TumbleWeed</b></h3>
            <a class="w3-button w3-cyan" href="https://download.opensuse.org/distribution/leap/15.1/iso/openSUSE-Leap-15.1-DVD-x86_64.iso">64 Bits Only .iso <i class="fa fa-download"></i></a>
            <br>
            <br>
        </div>
    </div>
</body>

</html>