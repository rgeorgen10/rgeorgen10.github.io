<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Thunderbird - Georgen's Tech Resources</title>
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
            <h1 style="font-size:4vw;color:black;"><b>Thunderbird</b></h1>
        </div>
    </div>
    <div class="w3-margin">
        <br>
        <br>
        <div class="w3-cell-row">

            <div class="w3-container w3-cell">
                <img src="/office-utilities/thunderbird.png" style="width: 40vw;" />
            </div>
            <div class="w3-container w3-cell">
                <h5 class="w3-center" style="text-decoration:underline;"><b>Thunderbird</b></h5>
                <p>Mozilla Thunderbird is a free open-source client available for Windows, Mac, and Linux. Thunderbird works with any popular email service such as Hotmail, Gmail, and Yahoo Mail. Features also include a calendar and an address book.</p>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="w3-cell-row">

            <div class="w3-container w3-cell">
                <h5 class="w3-center" style="text-decoration: underline;"><b>System Requirements</b></h5>
                <ul>
                    <li>Operating Systems: Windows 7 / Server 2008 / 8 / 8.1 / 10</li>
                    <li>Processor: Pentium 4 or newer processor that supports SSE2</li>
                    <li>RAM: 1 GB RAM</li>
                    <li>Storage: 200 MB hard drive space</li>
                </ul>
            </div>
            <div class="w3-container w3-cell">
                <img src="/office-utilities/thunderbird2.png" style="width: 40vw;float:right;" />
            </div>
        </div>
        <br>
        <br>
        <br>
        <h1 class="w3-center">Downloads</h1>
        <br>
        <div class="w3-container w3-cell w3-center w3-mobile w3-third">
            <h3 class="w3-center w3-mobile" style="text-decoration: underline;"><b>Windows</b></h3>
            <a class="w3-button w3-cyan" href="https://download.mozilla.org/?product=thunderbird-68.10.0-SSL&os=win&lang=en-US">32 Bits .exe <i class="fa fa-download"></i></a>
            <br>
            <br>
            <a class="w3-button w3-cyan" href="https://download.mozilla.org/?product=thunderbird-68.10.0-SSL&os=win64&lang=en-US">64 Bits .exe <i class="fa fa-download"></i></a>
        </div>
        <div class="w3-container w3-cell w3-mobile w3-center w3-third">
            <h3 class="w3-center" style="text-decoration: underline;"><b>Mac</b></h3>
            <a class="w3-button w3-cyan" href="https://download.mozilla.org/?product=thunderbird-68.10.0-SSL&os=osx&lang=en-US">32 Bits or 64 Bits .dmg <i class="fa fa-download"></i></a>
        </div>
        <div class="w3-container w3-cell w3-mobile w3-center w3-third">
            <h3 class="w3-center" style="text-decoration: underline;"><b>Linux</b></h3>
            <a class="w3-button w3-cyan" href="https://download.mozilla.org/?product=thunderbird-68.10.0-SSL&os=linux&lang=en-US">32 Bits <i class="fa fa-download"></i></a>
            <br>
            <br>
            <a class="w3-button w3-cyan" href="https://download.mozilla.org/?product=thunderbird-68.10.0-SSL&os=linux64&lang=en-US">64 Bits <i class="fa fa-download"></i></a>
            <br>
            <br>
        </div>
    </div>
</body>

</html>