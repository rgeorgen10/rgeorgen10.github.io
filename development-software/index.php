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
    <title>Category - Georgen's Tech Resources</title>
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
            <h1 style="font-size:4vw;color:black;"><b>Development Software</b></h1>
        </div>
    </div>
    <div class="w3-margin">
        <hr style="margin-right:15%;margin-left:15%" class="w3-border-grey w3-topbar">
        <h2 class="w3-center">Posts</h2>
        <hr style="margin-right:15%;margin-left:15%" class="w3-border-grey w3-topbar">
        <div style="margin-right:15%;margin-left:15%">
            <div class="w3-cell w3-container">
                <img src="/development-software/visualstudio_icon.png" class="mobile-hide" width="200px" height="200px" />
            </div>
            <div class="w3-cell w3-container">
                <h2 class="w3-center"><a href="/development-software/visualstudio.php">Visual Studio 2019</a></h2>
                <p>Visual Studio is a popular development software for Windows and Mac for creating applications using visual C++ and visual C# using a visual interface...<a href="/development-software/visualstudio.php">[Read More]</a></p>
            </div>
            <br>
            <hr class="w3-border-grey">
            <br>
            <div class="w3-cell w3-container">
                <img src="/development-software/vscode_icon.png" class="mobile-hide" width="200px" />
            </div>
            <div class="w3-cell w3-container">
                <h2 class="w3-center"><a href="/development-software/vscode.php">Visual Studio Code</a></h2>
                <p>Visual Studio Code is basically Visual Studio but is only for code editing not featuring a visual user interface like in Visual Studio...<a href="/development-software/vscode.php">[Read More]</a></p>
            </div>
            <br>
            <hr class="w3-border-grey">
            <br>
            <div class="w3-cell w3-container">
                <img src="/development-software/filezilla_icon.jpg" class="mobile-hide" width="200px" />
            </div>
            <div class="w3-cell w3-container">
                <h2 class="w3-center"><a href="/development-software/filezilla.php">FileZilla</a></h2>
                <p>Filezilla FTP is one of the most popular free FTP client and server. FTP the File Transfer Protocol can be used to transfer files from one computer to another from anywhere...<a href="/development-software/filezilla.php">[Read More]</a></p>
            </div>
            <br>
            <hr class="w3-border-grey">
            <br>
            <div class="w3-cell w3-container">
                <img src="/development-software/advanced_installer_icon.png" class="mobile-hide" width="200px" />
            </div>
            <div class="w3-cell w3-container">
                <h2 class="w3-center"><a href="/development-software/advanced_installer.php">Advanced Installer</a></h2>
                <p>Advanced installer integrated with visual studio and creates installer packages for windows. Advanced installer has a premium version therefore some features are restricted...<a href="/development-software/advanced_installer.php">[Read More]</a></p>
            </div>
            <br>
            <hr class="w3-border-grey">
            <br>
            <div class="w3-cell w3-container">
                <img src="/development-software/notepad-plus-plus_icon.jpg" class="mobile-hide" width="200px" />
            </div>
            <div class="w3-cell w3-container">
                <h2 class="w3-center"><a href="/development-software/notepad-plus-plus.php">Notepad ++</a></h2>
                <p>Notepad++ is an open-source code editing application similar to Visual Studio Code that is compatible with Windows, Mac OS X, and Linux...<a href="/development-software/notepad-plus-plus.php">[Read More]</a></p>
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
            <br>
        </div>
    </div>
</body>

</html>