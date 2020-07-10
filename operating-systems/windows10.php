<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Windows 10 - Georgen's Tech Resources</title>
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
            <h1 style="font-size:4vw;color:black;"><b>Windows 10</b></h1>
        </div>
    </div>
    <div class="w3-margin">
        <br>
        <br>
        <div class="w3-cell-row">

            <div class="w3-container w3-cell">
                <img src="/operating-systems/windows10.png" style="width: 40vw;" />
            </div>
            <div class="w3-container w3-cell">
                <h5 class="w3-center" style="text-decoration:underline;"><b>Windows 10</b></h5>
                <p>Windows 10 is probably one of the most popular operating systems. Windows 10 can function as a server, basic activities, and gaming. This download is the Windows media creation tool which downloads the latest version of windows onto a flash drive or an ISO image.</p>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="w3-cell-row">

            <div class="w3-container w3-cell">
                <h5 class="w3-center" style="text-decoration: underline;"><b>System Requirements</b></h5>
                <ul>
                    <li>Processor: 1 gigahertz (GHz) or faster processor or SoC</li>
                    <li>RAM: 1 gigabyte (GB) for 32-bit or 2 GB for 64-bit</li>
                    <li>Hard disk space: 16 GB for 32-bit OS 20 GB for 64-bit OS</li>
                    <li>Graphics card: DirectX 9 or later with WDDM 1.0 driver</li>
                    <li>Display: 800x600</li>
                    </li>
                </ul>
            </div>
            <div class="w3-container w3-cell">
                <img src="/operating-systems/windows102.png" style="width: 40vw;float:right;" />
            </div>
        </div>
        <br>
        <br>
        <br>
        <h1 class="w3-center">Downloads</h1>
        <br>
        <div class="w3-container w3-center w3-mobile">
            <h3 class="w3-center w3-mobile" style="text-decoration: underline;"><b>ISO Image</b></h3>
            <a class="w3-button w3-cyan" href="https://www.microsoft.com/en-us/software-download/windows10ISO">Instructions <i class="fa fa-download"></i></a>
            <br>
            <br>
        </div>
    </div>
</body>

</html>