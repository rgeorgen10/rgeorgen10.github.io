<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Fedora - Georgen's Tech Resources</title>
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
            <h1 style="font-size:4vw;color:black;"><b>Fedora</b></h1>
        </div>
    </div>
    <div class="w3-margin">
        <br>
        <br>
        <div class="w3-cell-row">

            <div class="w3-container w3-cell">
                <img src="/operating-systems/fedora.jpg" style="width: 40vw;" />
            </div>
            <div class="w3-container w3-cell">
                <h5 class="w3-center" style="text-decoration:underline;"><b>Fedora</b></h5>
                <p>Fedora is a non-profit Linux distribution that has a workstation and a server version. Fedora uses .rpm files like Cent-OS and RHEL. While also having a server version available, this is the workstation version which can still run server software like Apache.</p>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="w3-cell-row">

            <div class="w3-container w3-cell">
                <h5 class="w3-center" style="text-decoration: underline;"><b>System Requirements</b></h5>
                <ul>
                    <li>a CD or DVD drive, flash drive, and the capability to boot from this drive.</li>
                    <li>a 1 GHz processor or faster</li>
                    <li>at least 1 GB of memory (RAM)</li>
                    <li>at least 10 GB of permanent storage (hard drive) space.</li>
                </ul>
            </div>
            <div class="w3-container w3-cell">
                <img src="/operating-systems/fedora2.png" style="width: 40vw;float:right;" />
            </div>
        </div>
        <br>
        <br>
        <br>
        <h1 class="w3-center">Downloads</h1>
        <br>
        <div class="w3-container w3-cell w3-center w3-mobile w3-half">
            <h3 class="w3-center w3-mobile" style="text-decoration: underline;"><b>x86_64</b></h3>
            <a class="w3-button w3-cyan" href="https://download.fedoraproject.org/pub/fedora/linux/releases/32/Workstation/x86_64/iso/Fedora-Workstation-Live-x86_64-32-1.6.iso">64 Bits Only .iso <i class="fa fa-download"></i></a>
            <br>
            <br>
        </div>
        <div class="w3-container w3-cell w3-mobile w3-center w3-half">
            <h3 class="w3-center" style="text-decoration: underline;"><b>ARM aarch64</b></h3>
            <a class="w3-button w3-cyan" href="https://download.fedoraproject.org/pub/fedora/linux/releases/32/Workstation/aarch64/images/Fedora-Workstation-32-1.6.aarch64.raw.xz">64 Bits Only .raw.xz <i class="fa fa-download"></i></a>
        </div>
    </div>
</body>

</html>