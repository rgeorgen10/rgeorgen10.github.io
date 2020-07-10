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
    <title>Multimedia - Georgen's Tech Resources</title>
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
            <h1 style="font-size:4vw;color:black;"><b>Multimedia</b></h1>
        </div>
    </div>
    <div class="w3-margin">
        <hr style="margin-right:15%;margin-left:15%" class="w3-border-grey w3-topbar">
        <h2 class="w3-center">Posts</h2>
        <hr style="margin-right:15%;margin-left:15%" class="w3-border-grey w3-topbar">
        <div style="margin-right:15%;margin-left:15%">
            <div class="w3-cell w3-container">
                <img src="multimedia/vlc_logo.png" class="mobile-hide" width="200px" height="200px" />
            </div>
            <div class="w3-cell w3-container">
                <h2 class="w3-center"><a href="multimedia/vlc.php">VideoLan Media Player</a></h2>
                <p>Videolan media is a media player that can play almost any format. Also developed by a non-profit organization and vlc support Windows, Mac OS X, Linux...<a href="/multimedia/vlc.php">[Read More]</a></p>
            </div>
            <br>
            <hr class="w3-border-grey">
            <br>
            <div class="w3-cell w3-container">
                <img src="multimedia/dvdstyler_logo.png" class="mobile-hide" width="200px" />
            </div>
            <div class="w3-cell w3-container">
                <h2 class="w3-center"><a href="multimedia/dvdstyler.php">DVDStyler</a></h2>
                <p>DVDStyler is a dvd authorizing tool used to create professional looking DVDs with custom menus, titles, and many other tools...<a href="/multimedia/dvdstyler.php">[Read More]</a></p>
            </div>
            <br>
            <hr class="w3-border-grey">
            <br>
            <div class="w3-cell w3-container">
                <img src="multimedia/gimp_logo.png" class="mobile-hide" width="200px" />
            </div>
            <div class="w3-cell w3-container">
                <h2 class="w3-center"><a href="multimedia/gimp.php">GIMP</a></h2>
                <p>GIMP is an open-source program similar to Photoshop. Gimp also supports Photoshop formats and is available for Windows, Mac OS X, Linux...<a href="/multimedia/gimp.php">[Read More]</a></p>
            </div>
            <br>
            <hr class="w3-border-grey">
            <br>
            <div class="w3-cell w3-container">
                <img src="multimedia/photodirector_logo.jpg" class="mobile-hide" width="200px" />
            </div>
            <div class="w3-cell w3-container">
                <h2 class="w3-center"><a href="multimedia/photodirector.php">CyberLink PhotoDirector</a></h2>
                <p>Cyber-link Photo Director is a software used for easier photo editing than GIMP and Photoshop. However, this software has some premium features...<a href="/multimedia/photodirector.php">[Read More]</a></p>
            </div>
            <br>
            <hr class="w3-border-grey">
            <br>
            <div class="w3-cell w3-container">
                <img src="multimedia/anyburn_logo.jpg" class="mobile-hide" width="200px" />
            </div>
            <div class="w3-cell w3-container">
                <h2 class="w3-center"><a href="multimedia/anyburn.php">AnyBurn</a></h2>
                <p>Any-burn is a utility that can create disc images, burn images, and create bootable flash drives and DVDs or can be used to make audio CD's and Video DVDs...<a href="/multimedia/anyburn.php">[Read More]</a></p>
            </div>
            <br>
            <hr class="w3-border-grey">
            <br>
            <div class="w3-cell w3-container">
                <img src="multimedia/powerdirector_logo.png" class="mobile-hide" width="200px" />
            </div>
            <div class="w3-cell w3-container">
                <h2 class="w3-center"><a href="multimedia/powerdirector.php">CyberLink PowerDirector</a></h2>
                <p>Cyber-link Power-director Free is a video editing software that can create and edit video. Power-director can be upgraded to a paid edition put the free edition still contains many simple...<a href="/multimedia/powerdirector.php">[Read More]</a></p>
            </div>
            <br>
            <hr class="w3-border-grey">
            <br>
            <div class="w3-cell w3-container">
                <img src="multimedia/openshot_logo.png" class="mobile-hide" width="200px" />
            </div>
            <div class="w3-cell w3-container">
                <h2 class="w3-center"><a href="multimedia/openshot.php">OpenShot</a></h2>
                <p>OpenShot is an open-source video editor available for Windows, MacOS, and Linux. OpenShot has features for trimming, animating, and slow motion time effects...<a href="/multimedia/openshot.php">[Read More]</a></p>
            </div>
            <br>
            <hr class="w3-border-grey">
            <br>
            <div class="w3-cell w3-container">
                <img src="multimedia/audacity_logo.png" class="mobile-hide" width="200px" />
            </div>
            <div class="w3-cell w3-container">
                <h2 class="w3-center"><a href="multimedia/audacity.php">Audacity</a></h2>
                <p>Audacity is an open-source audio editor and recorder available for Windows, MacOS, and Linux. Features include recording, trimming and slicing...<a href="/multimedia/audacity.php">[Read More]</a></p>
            </div>
            <br>
            <hr class="w3-border-grey">
            <br>
            <div class="w3-cell w3-container">
                <img src="multimedia/paint_logo.png" class="mobile-hide" width="200px" />
            </div>
            <div class="w3-cell w3-container">
                <h2 class="w3-center"><a href="multimedia/paint.php">Paint.NET</a></h2>
                <p>Paint.net is open-source application used for image editing and creating images. This is the classic windows version but there is a Windows Store edition...<a href="/multimedia/paint.php">[Read More]</a></p>
            </div>
            <br>
            <hr class="w3-border-grey">
            <br>
            <div class="w3-cell w3-container">
                <img src="multimedia/avc_logo.png" class="mobile-hide" width="200px" />
            </div>
            <div class="w3-cell w3-container">
                <h2 class="w3-center"><a href="multimedia/avc.php">Any Video Converter</a></h2>
                <p>Any Video Converter is a free web and file video converter supporting YouTube, and many other formats. Other features include a free CD-ripper...<a href="/multimedia/avc.php">[Read More]</a></p>
            </div>
            <br>
            <hr class="w3-border-grey">
            <br>
            <div class="w3-cell w3-container">
                <img src="multimedia/makemkv_logo.png" class="mobile-hide" width="200px" />
            </div>
            <div class="w3-cell w3-container">
                <h2 class="w3-center"><a href="multimedia/makemkv.php">MakeMKV</a></h2>
                <p>MakeMKV is an open-source converter used for trans-coding video and even DVDs to the MKV file format. Also, MakeMKV supports...<a href="/multimedia/makemkv.php">[Read More]</a></p>
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
                <img src="multimedia/kdenlive-icon.png" class="mobile-hide" width="200px" />
            </div>
            <div class="w3-cell w3-container">
                <h2 class="w3-center"><a href="multimedia/kdenlive.php">Kdenlive</a></h2>
                <p>Kdenlive is an opensource video editor and production software designed by KDE. Kde is available for all the major operating systems and linux distros...<a href="/multimedia/kdenlive.php">[Read More]</a></p>
            </div>
            <br>
            <br>
        </div>
    </div>
</body>

</html>