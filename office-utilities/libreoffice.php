<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>LibreOffice - Georgen's Tech Resources</title>
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
            <h1 style="font-size:4vw;color:black;"><b>LibreOffice</b></h1>
        </div>
    </div>
    <div class="w3-margin">
        <br>
        <br>
        <div class="w3-cell-row">

            <div class="w3-container w3-cell">
                <img src="/office-utilities/libreoffice.png" style="width: 40vw;" />
            </div>
            <div class="w3-container w3-cell">
                <h5 class="w3-center" style="text-decoration:underline;"><b>LibreOffice</b></h5>
                <p>LibreOffice is probably the most popular office suite besides Microsoft office. LibreOffice features includes Microsoft Office compatibility, Writer, Calc, Impress, and Draw. LibreOffice includes templates and can open files from a remote server. </p>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="w3-cell-row">

            <div class="w3-container w3-cell">
                <h5 class="w3-center" style="text-decoration: underline;"><b>System Requirements</b></h5>
                <ul>
                    <li>Operating System: Windows 7 SP1 / 8 / 8.1 / 10</li>
                    <li>Memory: 256 MB RAM (512 MB RAM recommended)</li>
                    <li>Storage: Up to 1.5 GB available hard disk space</li>
                    <li>Processor: Pentium-compatible PC (Pentium III, Athlon or more-recent system recommended)</li>
                    <li>Graphics: 1024x768 resolution (higher resolution recommended), with at least 256 colors</li>
                </ul>
            </div>
            <div class="w3-container w3-cell">
                <img src="/office-utilities/libreoffice2.jpg" style="width: 40vw;float:right;" />
            </div>
        </div>
        <br>
        <br>
        <br>
        <h1 class="w3-center">Downloads</h1>
        <br>
        <div class="w3-container w3-cell w3-center w3-mobile w3-quarter">
            <h3 class="w3-center w3-mobile" style="text-decoration: underline;"><b>Windows</b></h3>
            <a class="w3-button w3-cyan" href="https://www.libreoffice.org/donate/dl/win-x86/6.4.5/en-US/LibreOffice_6.4.5_Win_x86.msi">32 Bits .msi <i class="fa fa-download"></i></a>
            <br>
            <br>
            <a class="w3-button w3-cyan" href="https://www.libreoffice.org/donate/dl/win-x86_64/6.4.5/en-US/LibreOffice_6.4.5_Win_x64.msi">64 Bits .msi <i class="fa fa-download"></i></a>
            <br>
            <br>
        </div>
        <div class="w3-container w3-cell w3-mobile w3-center w3-quarter">
            <h3 class="w3-center" style="text-decoration: underline;"><b>Mac</b></h3>
            <a class="w3-button w3-cyan" href="https://www.libreoffice.org/donate/dl/mac-x86_64/6.4.5/en-US/LibreOffice_6.4.5_MacOS_x86-64.dmg">64 Bits Only .dmg <i class="fa fa-download"></i></a>
        </div>
        <div class="w3-container w3-cell w3-mobile w3-center w3-quarter">
            <h3 class="w3-center" style="text-decoration: underline;"><b>Debian/Ubuntu</b></h3>
            <a class="w3-button w3-cyan" href="https://www.libreoffice.org/donate/dl/deb-x86_64/6.4.5/en-US/LibreOffice_6.4.5_Linux_x86-64_deb.tar.gz">64 Bits Only .deb <i class="fa fa-download"></i></a>
        </div>
        <div class="w3-container w3-cell w3-mobile w3-center w3-quarter">
            <h3 class="w3-center" style="text-decoration: underline;"><b>RHEL/CentOS/Fedora</b></h3>
            <a class="w3-button w3-cyan" href="https://www.libreoffice.org/donate/dl/rpm-x86_64/6.4.5/en-US/LibreOffice_6.4.5_Linux_x86-64_rpm.tar.gz">64 Bits Only .rpm <i class="fa fa-download"></i></a>
        </div>
    </div>
</body>

</html>