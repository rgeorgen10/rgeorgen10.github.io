<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Active Presenter - Georgen's Tech Resources</title>
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
            <h1 style="font-size:4vw;color:black;"><b>Active Presenter</b></h1>
        </div>
    </div>
    <div class="w3-margin">
        <br>
        <br>
        <div class="w3-cell-row">

            <div class="w3-container w3-cell">
                <img src="https://www.georgenswebsite.com/office-utilities/active_presenter.png" style="width: 40vw;" />
            </div>
            <div class="w3-container w3-cell">
                <h5 class="w3-center" style="text-decoration:underline;"><b>Active Presenter</b></h5>
                <p>This software can be used as a screen recording software or to make presentations similar to Power Points but with many exporting options such as video, html, and document formats. Features include screen recording, video editing, and software simulation.</p>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="w3-cell-row">

            <div class="w3-container w3-cell">
                <h5 class="w3-center" style="text-decoration: underline;"><b>System Requirements</b></h5>
                <ul>
                    <li>Operating System: Windows 7 SP1 / 8 / 10, Mac OS X 10.11 / 10.12 / 10.13 / 10.14</li>
                    <li>Processor: 1.2 GHz or faster processor with SSE2 (1.5 GHz multicore or higher recommended)</li>
                    <li>Memory: 2 GB of RAM or better (>4 GB recommended)</li>
                    <li>Storage: 2 GB of available hard-disk space for installation</li>
                </ul>
            </div>
            <div class="w3-container w3-cell">
                <img src="https://www.georgenswebsite.com/office-utilities/active_presenter2.png" style="width: 40vw;float:right;" />
            </div>
        </div>
        <br>
        <br>
        <br>
        <h1 class="w3-center">Downloads</h1>
        <br>
        <div class="w3-container w3-cell w3-center w3-mobile w3-half">
            <h3 class="w3-center w3-mobile" style="text-decoration: underline;"><b>Windows</b></h3>
            <a class="w3-button w3-cyan" href="https://cdn.atomisystems.com/apdownloads/ActivePresenter_v8.0.7_setup.exe">64 Bits Only .exe <i class="fa fa-download"></i></a>
        </div>
        <div class="w3-container w3-cell w3-mobile w3-center w3-half">
            <h3 class="w3-center" style="text-decoration: underline;"><b>Mac</b></h3>
            <a class="w3-button w3-cyan" href="https://cdn.atomisystems.com/apdownloads/ActivePresenter_v8.0.7_setup.dmg">32 Bits or 64 Bits .dmg <i class="fa fa-download"></i></a>
            <br>
            <br>
        </div>
    </div>
</body>

</html>