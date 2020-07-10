<!DOCTYPE html>
<html>

<head>
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

            .mobile-hide {
                display: none;
            }
        }
    </style>
    <title>Home - Georgen's Tech Resources</title>
    <link rel="icon" href="favicon.ico" />
</head>

<body>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/navbar.php";
    include_once($path);
    ?>
    <div class="w3-display-container w3-text-white header w3-center">
        <div class="w3-display-middle w3-large">
            <h1 style="font-size:4vw;color:black;"><b>Georgen's Tech Resources</b></h1>
        </div>
    </div>
    <div class="w3-margin">
        <hr style="margin-right:15%;margin-left:15%" class="w3-border-grey w3-topbar">
        <h2 class="w3-center">Posts</h2>
        <hr style="margin-right:15%;margin-left:15%" class="w3-border-grey w3-topbar">
        <div style="margin-right:15%;margin-left:15%">
            <div class="w3-cell w3-container">
                <img src="/office-utilities/iobit_unlocker_logo.png" class="mobile-hide" width="200px" height="200px" />
            </div>
            <div class="w3-cell w3-container">
                <h2 class="w3-center"><a href="/office-utilities/iobit_unlocker.php">IOBit Unlocker</a></h2>
                <p>IOBit unlocker is free "fix" to the windows error message "Cannot move because the file is in use". This software can determine what software is using the file and can stop the program from...<a href="/office-utilities/iobit_unlocker.php">[Read More]</a></p>
            </div>
            <br>
            <hr class="w3-border-grey">
            <br>
            <div class="w3-cell w3-container">
                <img src="multimedia/smplayer.jpg" class="mobile-hide" width="200px" />
            </div>
            <div class="w3-cell w3-container">
                <h2 class="w3-center"><a href="multimedia/smplayer.php">SMPlayer</a></h2>
                <p>SMPlayer is an alternative to VLC that supports Windows and Linux with built-in video codecs that can play most video formats including DVD's...<a href="/multimedia/smplayer.php">[Read More]</a></p>
            </div>
            <br>
            <hr class="w3-border-grey">
            <br>
            <div class="w3-cell w3-container">
                <img src="/operating-systems/opensuse_icon.png" class="mobile-hide" width="200px" />
            </div>
            <div class="w3-cell w3-container">
                <h2 class="w3-center"><a href="/operating-systems/opensuse.php">OpenSuse</a></h2>
                <p>OpenSuse is a free and open-source operating system based on Suse. OpenSuse has two versions: leap which is a stable version of Linux and tumble weed which is less stable and rolling release...<a href="/operating-systems/opensuse.php">[Read More]</a></p>
            </div>
            <br>
            <hr class="w3-border-grey">
            <br>
            <div class="w3-cell w3-container">
                <img src="/development-software/brackets_icon.png" class="mobile-hide" width="200px" />
            </div>
            <div class="w3-cell w3-container">
                <h2 class="w3-center"><a href="/development-software/brackets.php">Adobe Brackets</a></h2>
                <p>Adobe Brackets is an open-source code editor with a focus on web development. Adobe Brackets includes, HTML, CSS, JavaScript, PHP and many other code languages. Other Features...<a href="/development-software/brackets.php">[Read More]</a></p>
            </div>
            <br>
            <hr class="w3-border-grey">
            <br>
            <div class="w3-cell w3-container">
                <img src="/other-software/kaspersky_rescue.png" class="mobile-hide" width="200px" />
            </div>
            <div class="w3-cell w3-container">
                <h2 class="w3-center"><a href="/other-software/kaspersky_rescue.php">Kaspersky Rescue Disk</a></h2>
                <p>Kaspersky rescue disk is a free bootable iso used to fix a broken operating system caused by a virus such as ransomware...<a href="/other-software/kaspersky_rescue.php">[Read More]</a></p>
            </div>
            <br>
            <br>
        </div>
    </div>
</body>

</html>