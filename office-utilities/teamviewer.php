<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Teamviewer - Georgen's Tech Resources</title>
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
            <h1 style="font-size:4vw;color:black;"><b>Teamviewer</b></h1>
        </div>
    </div>
    <div class="w3-margin">
        <br>
        <br>
        <div class="w3-cell-row">

            <div class="w3-container w3-cell">
                <img src="/office-utilities/teamviewer.png" style="width: 40vw;" />
            </div>
            <div class="w3-container w3-cell">
                <h5 class="w3-center" style="text-decoration:underline;"><b>Teamviewer</b></h5>
                <p>Team-viewer is a cross-platform remote desktop software used for remote desktop and remote assistance. Team-viewer has paid plans for commercial use put personal use is free. You can assign remote access to Windows, Mac OS X, Linux, and even mobile too.</p>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="w3-cell-row">

            <div class="w3-container w3-cell">
                <h5 class="w3-center" style="text-decoration: underline;"><b>System Requirements</b></h5>
                <ul>
                    <li>Operating System: Windows XP / Vista / 7 / 8 / 8.1 / 10.</li>
                    <li>Memory (RAM): 1 GB of RAM required.</li>
                    <li>Hard Disk Space: 1 GB of Storage Space required.</li>
                    <li>Processor: Intel Core 2 Duo or later.</li>
                </ul>
            </div>
            <div class="w3-container w3-cell">
                <img src="/office-utilities/teamviewer2.png" style="width: 40vw;float:right;" />
            </div>
        </div>
        <br>
        <br>
        <br>
        <h1 class="w3-center">Downloads</h1>
        <br>
        <div class="w3-container w3-cell w3-center w3-mobile w3-quarter">
            <h3 class="w3-center w3-mobile" style="text-decoration: underline;"><b>Windows</b></h3>
            <a class="w3-button w3-cyan" href="https://download.teamviewer.com/download/TeamViewer_Setup.exe">32 Bits or 64 Bits .exe <i class="fa fa-download"></i></a>
        </div>
        <div class="w3-container w3-cell w3-mobile w3-center w3-quarter">
            <h3 class="w3-center" style="text-decoration: underline;"><b>Mac</b></h3>
            <a class="w3-button w3-cyan" href="https://download.teamviewer.com/download/TeamViewer.dmg">32 Bits or 64 Bits .dmg <i class="fa fa-download"></i></a>
        </div>
        <div class="w3-container w3-cell w3-mobile w3-center w3-quarter">
            <h3 class="w3-center" style="text-decoration: underline;"><b>Debian/Ubuntu</b></h3>
            <a class="w3-button w3-cyan" href="https://download.teamviewer.com/download/linux/teamviewer_i386.deb">32 Bits .deb <i class="fa fa-download"></i></a>
            <br>
            <br>
            <a class="w3-button w3-cyan" href="https://download.teamviewer.com/download/linux/teamviewer_amd64.deb">64 Bits .deb <i class="fa fa-download"></i></a>
        </div>
        <div class="w3-container w3-cell w3-mobile w3-center w3-quarter">
            <h3 class="w3-center" style="text-decoration: underline;"><b>RHEL/CentOS/Fedora</b></h3>
            <a class="w3-button w3-cyan" href="https://download.teamviewer.com/download/linux/teamviewer.i686.rpm">32 Bits .rpm <i class="fa fa-download"></i></a>
            <br>
            <br>
            <a class="w3-button w3-cyan" href="https://download.teamviewer.com/download/linux/teamviewer.x86_64.rpm">64 Bits .rpm <i class="fa fa-download"></i></a>
            <br>
            <br>
            <br>
        </div>
    </div>
</body>

</html>