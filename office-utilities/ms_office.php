<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Microsoft Office - Georgen's Tech Resources</title>
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
            <h1 style="font-size:4vw;color:black;"><b>Microsoft Office</b></h1>
        </div>
    </div>
    <div class="w3-margin">
        <br>
        <br>
        <div class="w3-cell-row">

            <div class="w3-container w3-cell">
                <img src="/office-utilities/ms_office.png" style="width: 40vw;" />
            </div>
            <div class="w3-container w3-cell">
                <h5 class="w3-center" style="text-decoration:underline;"><b>Microsoft Office</b></h5>
                <p>Microsoft office is one of most popular and expensive office suites. This is a free download for Microsoft Office 2016 Pro Plus which contains Word, Excel, PowerPoint, Publisher, and Access are all included. Plan start at $69.99 per years.</p>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="w3-cell-row">

            <div class="w3-container w3-cell">
                <h5 class="w3-center" style="text-decoration: underline;"><b>System Requirements</b></h5>
                <ul>
                    <li>Processor: 1 GHz processor</li>
                    <li>Memory: 2GB RAM.</li>
                    <li>Storage: 3 GB of available disk space; better to have some extra space for temp files.</li>
                    <li>Graphics: Screen resolution of a minimum 1280 x 800.</li>
                    <li>Operating System: Windows 7 SP1/8/8.1/10</li>
                </ul>
            </div>
            <div class="w3-container w3-cell">
                <img src="/office-utilities/msoffice2016.jpg" style="width: 40vw;float:right;" />
            </div>
        </div>
        <br>
        <br>
        <br>
        <h1 class="w3-center">Downloads</h1>
        <br>
        <div class="w3-container w3-center w3-mobile">
            <h3 class="w3-center w3-mobile" style="text-decoration: underline;"><b>Windows</b></h3>
            <a class="w3-button w3-cyan" href="https://onedrive.live.com/?authkey=%21AHkP9zjXj9%5Fduf8&cid=6B7E27E129AC70D8&id=6B7E27E129AC70D8%219397&parId=6B7E27E129AC70D8%219335&action=locate">32 or 64 Bits .exe  <i class="fa fa-download"></i></a>
        </div>
        <br>
        <br>
    </div>
</body>

</html>