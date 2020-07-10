<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        .header {
            position: relative;
            text-align: center;
            color: Black;
        }

        .imgtext {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 75px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        h3 {
            color: #09164a;
        }

        hr {
            margin-right: 200px;
            margin-left: 200px;
            height: 10px;
            color: #e6e6e6;
            background-color: #e6e6e6;
            border: none;
        }

        .logo {
            float: left;
            margin-right: 75px;
        }

        .list {
            margin-left: 15%;
            margin-right: 15%;
        }

        p {
            text-align: center;
            margin-left: 17.5%;
            margin-right: 17.5%;
        }

        .download {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            width: 50%;
            margin: 0 auto;
        }

        .flex-item {
            width: 100px;
            height: 200px;
        }

        .button {
            text-decoration: none;
            background-color: #09164a;
            text-align: center;
            padding: 10px 12px;
            color: white;
        }

        .requirements {
            margin-left: 17.5%;
        }

        .center-image {
            text-align: center;
        }

        @media screen and (max-width: 900px) {
            .list {
                margin-left: 3%;
                margin-right: 3%;
            }

            .logo {
                float: center;
                margin-right: 0px;
            }

            hr {
                margin-right: 10px;
                margin-left: 10px;
            }

            .download {
                width: 95%;
            }
        }

    </style>
    <title>Fedora LXQt | Georgen's Tech Resources</title>
    <link rel="icon" href="favicon.ico" />
</head>

<body>
    <?php
                $path = $_SERVER['DOCUMENT_ROOT'];
                $path .= "/navbar.php";
                include_once($path);
        ?>
    <div class="header">
        <img src="https://www.georgenswebsite.com/background.jpg" width="100%" height="500px" />
        <div class="imgtext"><strong>Fedora LXQt</strong></div>
    </div>
    <br>
    <p>Fedora LXQt is an extremely lightweight version of Fedora using the LXQt Desktop which includes a set of lightweight applications to lower CPU usage, RAM usage, and storage needs. Tools include QTerminal, FeatherPad, and qpdfviewer.</p>
    <br>
    <div class="center-image">
        <img style="text-align:center;" src="/operating-systems/fedoralxqt.jpg" width="65%" />
    </div>
    <br>
    <div class="requirements">
        <h3>System Requirements</h3>
        <ul>
            <li>Storage: 2GB</li>
            <li>Memory: 128MB</li>
        </ul>
    </div>
    <br>
    <h2 style="text-align:center;">Download</h2>
    <br>
    <br>
    <div style="text-align:center;">
    <a class="button" href="https://download.fedoraproject.org/pub/fedora-secondary/releases/30/Spins/i386/iso/Fedora-LXQt-Live-i386-30-1.2.iso">32 Bits</a>
        <br>
        <br>
        <br>
        <br>
    <a class="button" href="https://download.fedoraproject.org/pub/fedora/linux/releases/30/Spins/x86_64/iso/Fedora-LXQt-Live-x86_64-30-1.2.iso">64 Bits</a>
    </div>
    <br>
    <br>
    <br>
    <br>
</body>

</html>
