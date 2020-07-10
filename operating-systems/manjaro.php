<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Manjaro - Georgen's Tech Resources</title>
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
            <h1 style="font-size:4vw;color:black;"><b>Manjaro</b></h1>
        </div>
    </div>
    <div class="w3-margin">
        <br>
        <br>
        <div class="w3-cell-row">

            <div class="w3-container w3-cell">
                <img src="/operating-systems/manjaro.jpg" style="width: 40vw;" />
            </div>
            <div class="w3-container w3-cell">
                <h5 class="w3-center" style="text-decoration:underline;"><b>Manjaro</b></h5>
                <p>Manjaro is an Arch-based linux distribution that is a great OS for learning Arch. Manjaro comes in four different flavors such as gnome, kde plasma, xfce, and architect.</p>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="w3-cell-row">

            <div class="w3-container w3-cell">
                <h5 class="w3-center" style="text-decoration: underline;"><b>System Requirements</b></h5>
                <ul>
                    <li>One gigabyte (GB) of memory </li>
                    <li>Thirty gigabytes (GB) of hard disk space </li>
                    <li>A one gigahertz (Ghz) processor </li>
                    <li>A one gigahertz (Ghz) processor</li>
                    <li>A broadband internet connection </li>
                </ul>
            </div>
            <div class="w3-container w3-cell">
                <img src="/operating-systems/manjaro2.png" style="width: 40vw;float:right;" />
            </div>
        </div>
        <br>
        <br>
        <br>
        <h1 class="w3-center">Downloads</h1>
        <br>
        <div class="w3-container w3-cell w3-center w3-mobile w3-third">
            <h3 class="w3-center w3-mobile" style="text-decoration: underline;"><b>Xfce</b></h3>
            <a class="w3-button w3-cyan" href="https://osdn.net/projects/manjaro/storage/xfce/20.0.3/manjaro-xfce-20.0.3-200606-linux56.iso">64 Bits Only .iso <i class="fa fa-download"></i></a>
            <br>
            <br>
        </div>
        <div class="w3-container w3-cell w3-mobile w3-center w3-third">
            <h3 class="w3-center" style="text-decoration: underline;"><b>Kde Plasma</b></h3>
            <a class="w3-button w3-cyan" href="https://osdn.net/projects/manjaro/storage/kde/20.0.3/manjaro-kde-20.0.3-200606-linux56.iso">64 Bits Only .iso <i class="fa fa-download"></i></a>
        </div>
        <div class="w3-container w3-cell w3-mobile w3-center w3-third">
            <h3 class="w3-center" style="text-decoration: underline;"><b>Gnome</b></h3>
            <a class="w3-button w3-cyan" href="https://osdn.net/projects/manjaro/storage/gnome/20.0.3/manjaro-gnome-20.0.3-200606-linux56.iso">64 Bits Only .iso <i class="fa fa-download"></i></a>
        </div>
    </div>
</body>

</html>