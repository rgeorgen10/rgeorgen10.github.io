<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>AnyBurn - Georgen's Tech Resources</title>
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
            <h1 style="font-size:4vw;color:black;"><b>AnyBurn</b></h1>
        </div>
    </div>
    <div class="w3-margin">
        <br>
        <br>
        <div class="w3-cell-row">

            <div class="w3-container w3-cell">
                <img src="https://www.georgenswebsite.com/multimedia/anyburn.png" style="width: 40vw;" />
            </div>
            <div class="w3-container w3-cell">
                <h5 class="w3-center" style="text-decoration:underline;"><b>AnyBurn</b></h5>
                <p>Any-burn is a utility that can create disc images, burn images, and create bootable flash drives and DVDs or can be used to make audio CD's and Video DVDs. Disc images can also be created from files or other DVDs</p>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="w3-cell-row">

            <div class="w3-container w3-cell">
                <h5 class="w3-center" style="text-decoration: underline;"><b>System Requirements</b></h5>
                <ul>
                    <li>Operating System: Windows XP / Vista / 7 / 8 / 10</li>
                    <li>Memory: 64 MB memory </li>
                    <li>Storage: At least 10 MB hard disk space </li>
                    <li>Processor: Intel Pentium 166 MHz or above</li>
                </ul>
            </div>
            <div class="w3-container w3-cell">
                <img src="/multimedia/anyburn2.png" style="width: 40vw;float:right;" />
            </div>
        </div>
        <br>
        <br>
        <br>
        <h1 class="w3-center">Downloads</h1>
        <br>
        <div class="w3-container w3-center w3-mobile">
            <h3 class="w3-center w3-mobile" style="text-decoration: underline;"><b>Windows</b></h3>
            <a class="w3-button w3-cyan" href="http://www.anyburn.com/anyburn_setup.exe">32 Bits .exe <i class="fa fa-download"></i></a>
            <br>
            <br>
            <a class="w3-button w3-cyan" href="http://www.anyburn.com/anyburn_setup_x64.exe">64 Bits .exe <i class="fa fa-download"></i></a>
            <br>
            <br>
        </div>
    </div>
</body>

</html>