<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>FileZilla - Georgen's Tech Resources</title>
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
            <h1 style="font-size:4vw;color:black;"><b>FileZilla</b></h1>
        </div>
    </div>
    <div class="w3-margin">
        <br>
        <br>
        <div class="w3-cell-row">

            <div class="w3-container w3-cell">
                <img src="/development-software/filezilla.png" style="width: 40vw;" />
            </div>
            <div class="w3-container w3-cell">
                <h5 class="w3-center" style="text-decoration:underline;"><b>FileZilla</b></h5>
                <p>Filezilla FTP is one of the most popular free FTP client and server. FTP the File Transfer Protocol can be used to transfer files from one computer to another from anywhere. FTP Servers can be set up on any computer with this software.</p>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="w3-cell-row">

            <div class="w3-container w3-cell">
                <h5 class="w3-center" style="text-decoration: underline;"><b>System Requirements</b></h5>
                <ul>
                    <li>Operating Systems: Windows 7 / 8 / 8 .1 / 10</li>
                </ul>
            </div>
            <div class="w3-container w3-cell">
                <img src="/development-software/filezilla2.png" style="width: 40vw;float:right;" />
            </div>
        </div>
        <br>
        <br>
        <br>
        <h1 class="w3-center">Downloads</h1>
        <br>
        <div class="w3-container w3-cell w3-center w3-mobile w3-third">
            <h3 class="w3-center w3-mobile" style="text-decoration: underline;"><b>Windows</b></h3>
            <a class="w3-button w3-cyan" href="https://download.filezilla-project.org/client/FileZilla_3.48.1_win32_sponsored-setup.exe">32 Bits .exe <i class="fa fa-download"></i></a>
            <br>
            <br>
            <a class="w3-button w3-cyan" href="https://download.filezilla-project.org/client/FileZilla_3.48.1_win64_sponsored-setup.exe">64 Bits .exe <i class="fa fa-download"></i></a>
            <br>
            <br>
        </div>
        <div class="w3-container w3-cell w3-mobile w3-center w3-third">
            <h3 class="w3-center" style="text-decoration: underline;"><b>Mac</b></h3>
            <a class="w3-button w3-cyan" href="https://dl3.cdn.filezilla-project.org/client/FileZilla_3.48.1_macosx-x86.app.tar.bz2?h=0aSdpr1Wf3P4JKrrUiiD4A&x=1590294745">32 Bits or 64 Bits .tar.bz2 <i class="fa fa-download"></i></a>
        </div>
        <div class="w3-container w3-cell w3-mobile w3-center w3-third">
            <h3 class="w3-center" style="text-decoration: underline;"><b>Linux</b></h3>
            <a class="w3-button w3-cyan" href="https://dl2.cdn.filezilla-project.org/client/FileZilla_3.48.1_i686-linux-gnu.tar.bz2?h=ufdrbDmXX3WW0OAysZ_ofQ&x=1590294781">32 Bits .tar.bz2 <i class="fa fa-download"></i></a>
            <br>
            <br>
            <a class="w3-button w3-cyan" href="https://dl1.cdn.filezilla-project.org/client/FileZilla_3.48.1_x86_64-linux-gnu.tar.bz2?h=UcHBb2iboJhz-OZj6kuyUA&x=1590294828">64 Bits .tar.bz2 <i class="fa fa-download"></i></a>
        </div>
    </div>
</body>

</html>