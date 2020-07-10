<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>WPS Office - Georgen's Tech Resources</title>
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
            <h1 style="font-size:4vw;color:black;"><b>WPS Office</b></h1>
        </div>
    </div>
    <div class="w3-margin">
        <br>
        <br>
        <div class="w3-cell-row">

            <div class="w3-container w3-cell">
                <img src="/office-utilities/wps_office.jpg" style="width: 40vw;" />
            </div>
            <div class="w3-container w3-cell">
                <h5 class="w3-center" style="text-decoration:underline;"><b>WPS Office</b></h5>
                <p>WPS is an alternative to Microsoft Office which includes a premium and a free version. WPS Office is a available for Windows, Mac OS X, Linux, Android, and IOS. WPS Office looks very similar to office 2013 or 2016 and provides Microsoft Office compatibility. </p>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="w3-cell-row">

            <div class="w3-container w3-cell">
                <h5 class="w3-center" style="text-decoration: underline;"><b>System Requirements</b></h5>
                <ul>
                    <li>Operating System: Windows 7 / 8 / 8.1 / 10</li>
                    <li>CPU: Pentium II 266 MHz or higher </li>
                    <li>Memory: at least 128 MB </li>
                    <li>Storage: at least 200 MB available space </li>
                </ul>
            </div>
            <div class="w3-container w3-cell">
                <img src="/office-utilities/wps_office2.png" style="width: 40vw;float:right;" />
            </div>
        </div>
        <br>
        <br>
        <br>
        <h1 class="w3-center">Downloads</h1>
        <br>
        <div class="w3-container w3-cell w3-center w3-mobile w3-quarter">
            <h3 class="w3-center w3-mobile" style="text-decoration: underline;"><b>Windows</b></h3>
            <a class="w3-button w3-cyan" href="https://wdl1.pcfg.cache.wpscdn.com/wpsdl/wpsoffice/download/11.2.0.9453/WPSOffice_11.2.0.9453.exe">32 Bits and 64 Bits .exe <i class="fa fa-download"></i></a>
        </div>
        <div class="w3-container w3-cell w3-mobile w3-center w3-quarter">
            <h3 class="w3-center" style="text-decoration: underline;"><b>Mac</b></h3>
            <a class="w3-button w3-cyan" href="https://www.wps.com/mac/">32 Bits and 64 Bits .dmg <i class="fa fa-download"></i></a>
        </div>
        <div class="w3-container w3-cell w3-mobile w3-center w3-quarter">
            <h3 class="w3-center" style="text-decoration: underline;"><b>Debian/Ubuntu</b></h3>
            <a class="w3-button w3-cyan" href="http://wdl1.pcfg.cache.wpscdn.com/wpsdl/wpsoffice/download/linux/9522/wps-office_11.1.0.9522.XA_amd64.deb">64 Bits Only .deb <i class="fa fa-download"></i></a>
        </div>
        <div class="w3-container w3-cell w3-mobile w3-center w3-quarter">
            <h3 class="w3-center" style="text-decoration: underline;"><b>RHEL/CentOS/Fedora</b></h3>
            <a class="w3-button w3-cyan" href="http://wdl1.pcfg.cache.wpscdn.com/wpsdl/wpsoffice/download/linux/9522/wps-office-11.1.0.9522.XA-1.x86_64.rpm">64 Bits Only .rpm <i class="fa fa-download"></i></a>
            <br>
            <br>
            <br>
        </div>
    </div>
</body>

</html>