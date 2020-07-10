<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Visual Studio Code - Georgen's Tech Resources</title>
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
            <h1 style="font-size:4vw;color:black;"><b>Visual Studio Code</b></h1>
        </div>
    </div>
    <div class="w3-margin">
        <br>
        <br>
        <div class="w3-cell-row">

            <div class="w3-container w3-cell">
                <img src="/development-software/vscode.png" style="width: 40vw;" />
            </div>
            <div class="w3-container w3-cell">
                <h5 class="w3-center" style="text-decoration:underline;"><b>Visual Studio Code</b></h5>
                <p>Visual Studio Code is basically Visual Studio but is only for code editing not featuring a visual user interface like in Visual Studio. Visual Studio Code is open-source and available for Windows, Mac OS X, and Linux.</p>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="w3-cell-row">

            <div class="w3-container w3-cell">
                <h5 class="w3-center" style="text-decoration: underline;"><b>System Requirements</b></h5>
                <ul>
                    <li>Operating Systems: Windows 7 / 8 / 10</li>
                    <li>Memory: 1 GB</li>
                    <li>Storage: 200 MB</li>
                </ul>
            </div>
            <div class="w3-container w3-cell">
                <img src="/development-software/vscode2.png" style="width: 40vw;float:right;" />
            </div>
        </div>
        <br>
        <br>
        <br>
        <h1 class="w3-center">Downloads</h1>
        <br>
        <div class="w3-container w3-cell w3-center w3-mobile w3-quarter">
            <h3 class="w3-center w3-mobile" style="text-decoration: underline;"><b>Windows</b></h3>
            <a class="w3-button w3-cyan" href="https://aka.ms/win32-user-stable">32 Bits .exe <i class="fa fa-download"></i></a>
            <br>
            <br>
            <a class="w3-button w3-cyan" href="https://aka.ms/win32-x64-user-stable">64 Bits .exe <i class="fa fa-download"></i></a>
            <br>
            <br>
        </div>
        <div class="w3-container w3-cell w3-mobile w3-center w3-quarter">
            <h3 class="w3-center" style="text-decoration: underline;"><b>Mac</b></h3>
            <a class="w3-button w3-cyan" href="https://go.microsoft.com/fwlink/?LinkID=620882">32 Bits or 64 Bits .dmg <i class="fa fa-download"></i></a>
            <br>
            <br>
        </div>
        <div class="w3-container w3-cell w3-mobile w3-center w3-quarter">
            <h3 class="w3-center" style="text-decoration: underline;"><b>Debian/Ubuntu</b></h3>
            <a class="w3-button w3-cyan" href="https://go.microsoft.com/fwlink/?LinkID=760868">64 Bits Only .deb <i class="fa fa-download"></i></a>
        </div>
        <div class="w3-container w3-cell w3-mobile w3-center w3-quarter">
            <h3 class="w3-center" style="text-decoration: underline;"><b>RHEL/CentOS/Fedora</b></h3>
            <a class="w3-button w3-cyan" href="https://go.microsoft.com/fwlink/?LinkID=760867">64 Bits Only .rpm <i class="fa fa-download"></i></a>
        </div>
    </div>
</body>

</html>