<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Adobe Brackets - Georgen's Tech Resources</title>
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
            <h1 style="font-size:4vw;color:black;"><b>Adobe Brackets</b></h1>
        </div>
    </div>
    <div class="w3-margin">
        <br>
        <br>
        <div class="w3-cell-row">

            <div class="w3-container w3-cell">
                <img src="/development-software/brackets.png" style="width: 40vw;" />
            </div>
            <div class="w3-container w3-cell">
                <h5 class="w3-center" style="text-decoration:underline;"><b>Adobe Brackets</b></h5>
                <p>Adobe Brackets is an open-source code editor with a focus on web development. Adobe Brackets includes, HTML, CSS, JavaScript, PHP and many other code languages. Other features include live web page preview and preprocessor support. </p>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="w3-cell-row">

            <div class="w3-container w3-cell">
                <h5 class="w3-center" style="text-decoration: underline;"><b>System Requirements</b></h5>
                <ul>
                    <li>OS: Windows XP/Vista or Windows 7/8/8.1/10 </li>
                    <li>RAM: Minimum 512 MB of installed memory </li>
                    <li>Free Disk Space: Minimum 100 MB of space required </li>
                    <li>Processor: Intel Pentium 4 or later </li>
                </ul>
            </div>
            <div class="w3-container w3-cell">
                <img src="/development-software/brackets2.png" style="width: 40vw;float:right;" />
            </div>
        </div>
        <br>
        <br>
        <br>
        <h1 class="w3-center">Downloads</h1>
        <br>
        <div class="w3-container w3-cell w3-center w3-mobile w3-third">
            <h3 class="w3-center w3-mobile" style="text-decoration: underline;"><b>Windows</b></h3>
            <a class="w3-button w3-cyan" href="https://github.com/adobe/brackets/releases/download/release-1.14.2/Brackets.Release.1.14.2.msi">32 Bits or 64 Bits .msi <i class="fa fa-download"></i></a>
        </div>
        <div class="w3-container w3-cell w3-mobile w3-center w3-third">
            <h3 class="w3-center" style="text-decoration: underline;"><b>Mac</b></h3>
            <a class="w3-button w3-cyan" href="https://github.com/adobe/brackets/releases/download/release-1.14.2/Brackets.Release.1.14.2.dmg">32 Bits or 64 Bits .dmg <i class="fa fa-download"></i></a>
        </div>
        <div class="w3-container w3-cell w3-mobile w3-center w3-third">
            <h3 class="w3-center" style="text-decoration: underline;"><b>Debian/Ubuntu</b></h3>
            <a class="w3-button w3-cyan" href="https://github.com/adobe/brackets/releases/download/release-1.14.1/Brackets.Release.1.14.1.32-bit.deb">32 Bits .deb <i class="fa fa-download"></i></a>
            <br>
            <br>
            <a class="w3-button w3-cyan" href="https://github.com/adobe/brackets/releases/download/release-1.14.1/Brackets.Release.1.14.1.64-bit.deb">64 Bits .deb <i class="fa fa-download"></i></a>
            <br>
            <br>
        </div>
    </div>
</body>

</html>